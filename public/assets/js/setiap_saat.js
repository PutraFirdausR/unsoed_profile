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