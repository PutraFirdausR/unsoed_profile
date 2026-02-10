// FILE: public/assets/js/navbar.js

function toggleLangDropdown(event) {
    event.stopPropagation(); 
    const content = document.getElementById('lang-dropdown-content');
    const icon = document.getElementById('lang-icon');

    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        if(icon) icon.classList.add('rotate-180');
    } else {
        content.classList.add('hidden');
        if(icon) icon.classList.remove('rotate-180');
    }
}

// Tutup dropdown jika klik di luar
window.addEventListener('click', function(e) {
    const langDrop = document.getElementById('lang-dropdown-content');
    const langIcon = document.getElementById('lang-icon');

    if (langDrop && !langDrop.classList.contains('hidden')) {
        langDrop.classList.add('hidden');
        if (langIcon) langIcon.classList.remove('rotate-180');
    }
});

function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    menu.classList.toggle('hidden');
}

function toggleSubmenu(id) {
    const submenu = document.getElementById('submenu-' + id);
    const arrow = document.getElementById('arrow-' + id);
    submenu.classList.toggle('hidden');
    arrow.classList.toggle('rotate-180');
}