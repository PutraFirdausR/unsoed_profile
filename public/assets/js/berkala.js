// FILE: public/assets/js/berkala.js

document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const cards = document.querySelectorAll('.card-item');
    const noResults = document.getElementById('noResults');

    if(searchInput) {
        searchInput.addEventListener('keyup', function(e) {
            const term = e.target.value.toLowerCase();
            let hasVisible = false;

            cards.forEach(card => {
                const categoryEl = card.querySelector('.category-title');
                const category = categoryEl ? categoryEl.innerText.toLowerCase() : '';
                const listItems = card.querySelectorAll('.item-link');
                let matchInCard = false;

                // 1. Cek apakah Judul Kategori cocok
                if(category.includes(term)) {
                    matchInCard = true;
                    // Jika kategori cocok, tampilkan semua isinya
                    listItems.forEach(li => li.classList.remove('hidden'));
                } else {
                    // 2. Jika kategori tidak cocok, cek per item di dalamnya
                    listItems.forEach(li => {
                        const textEl = li.querySelector('.item-text');
                        const text = textEl ? textEl.innerText.toLowerCase() : '';
                        
                        if(text.includes(term)) {
                            li.classList.remove('hidden');
                            matchInCard = true;
                        } else {
                            li.classList.add('hidden');
                        }
                    });
                }

                // 3. Toggle visibilitas kartu utama
                if(matchInCard) {
                    card.classList.remove('hidden');
                    hasVisible = true;
                } else {
                    card.classList.add('hidden');
                }
            });

            // 4. Tampilkan pesan "Tidak Ditemukan"
            if(hasVisible) {
                noResults.classList.add('hidden');
            } else {
                noResults.classList.remove('hidden');
            }
        });
    }
});

// Fungsi Modal (Global Scope)
window.openModal = function(imageSrc, title) {
    const modal = document.getElementById('imageModal');
    const img = document.getElementById('modal-image');
    const titleEl = document.getElementById('modal-title');
    const errorMsg = document.getElementById('modal-error');

    if(modal && img) {
        img.style.display = 'block';
        if(errorMsg) errorMsg.classList.add('hidden');
        
        img.src = imageSrc;
        if(titleEl) titleEl.textContent = title;
        
        img.onerror = function() {
            img.style.display = 'none';
            if(errorMsg) errorMsg.classList.remove('hidden');
        };

        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; // Disable scroll background
    }
}

window.closeModal = function() {
    const modal = document.getElementById('imageModal');
    if(modal) {
        modal.classList.add('hidden');
        const img = document.getElementById('modal-image');
        if(img) img.src = ''; // Clear source
        document.body.style.overflow = 'auto'; // Enable scroll
    }
}