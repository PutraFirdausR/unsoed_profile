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

                if(category.includes(term)) {
                    matchInCard = true;
                    listItems.forEach(li => li.classList.remove('hidden'));
                } else {
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

                if(matchInCard) {
                    card.classList.remove('hidden');
                    hasVisible = true;
                } else {
                    card.classList.add('hidden');
                }
            });

            if(hasVisible) {
                noResults.classList.add('hidden');
            } else {
                noResults.classList.remove('hidden');
            }
        });
    }
});

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
        document.body.style.overflow = 'hidden'; 
    }
}

window.closeModal = function() {
    const modal = document.getElementById('imageModal');
    if(modal) {
        modal.classList.add('hidden');
        const img = document.getElementById('modal-image');
        if(img) img.src = '';
        document.body.style.overflow = 'auto'; 
    }
}