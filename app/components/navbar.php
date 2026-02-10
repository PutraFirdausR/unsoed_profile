<?php
// Data Menu
$menus = [
    'Profil' => [
        ['text' => 'Tentang Kami', 'url' => base_url('tentang-kami')],
        ['text' => 'Visi Misi', 'url' => base_url('visi-misi')],
        ['text' => 'Struktur Organisasi', 'url' => base_url('struktur-organisasi')],
        ['text' => 'Akreditasi', 'url' => base_url('akreditasi')],
        ['text' => 'Fasilitas', 'url' => base_url('fasilitas')],
        ['text' => 'Kerjasama', 'url' => base_url('kerjasama')],
        ['text' => 'Renstra', 'url' => base_url('renstra')],
    ],
    'Program Studi' => [
        ['text' => 'Program Doktor', 'url' => base_url('program-doktor')],
        ['text' => 'Kenotariatan', 'url' => base_url('magister-kenotariatan')],
        ['text' => 'Magister Hukum', 'url' => '#'],
    ],
    'SDM' => [
        ['text' => 'Guru Besar', 'url' => base_url('guru-besar')],
        ['text' => 'Staf Pendidik', 'url' => base_url('staf-pendidik')],
        ['text' => 'Staf Kependidikan', 'url' => base_url('staf-kependidikan')],
    ],
    'Layanan' => [
        ['text' => 'Kurikulum IUP', 'url' => base_url('layanan-kurikulum-iup')],
        ['text' => 'Magang', 'url' =>  base_url('magang')],
    ],
    'PPID' => [
        ['text' => 'Informasi Berkala', 'url' => base_url('informasi-berkala')],
        ['text' => 'Informasi Setiap Saat', 'url' => base_url('informasi-setiap-saat')],
        ['text' => 'Regulasi KIP', 'url' => '#'],
        ['text' => 'Permohonan Informasi', 'url' => base_url('permohonan-informasi')],
    ],
    'Alumni' => [
        ['text' => 'Keluarga Alumni', 'url' => 'https://kafhunsoed.com/'],
        ['text' => 'Register Alumni', 'url' => 'https://docs.google.com/forms/d/e/1FAIpQLSfymbQK6gJEWW9C6T5nnsxC5NcM-STp6RskBdvnxQmDxOR6nQ/viewform?pli=1'],
        ['text' => 'Alumni Terkemuka', 'url' => base_url('alumni-terkemuka')],
    ]
];
?>

<nav class="fixed top-0 left-0 w-full z-50 shadow-md font-sans">
    
    <div class="bg-yellow-500 text-sm py-2 px-4 hidden md:block">
        <div class="container mx-auto flex justify-end items-center space-x-6">
            <a href="https://unsoed.ac.id/" class="border-b-2 text-white border-white/0 hover:border-white pb-0.5 transition-all duration-300 font-medium tracking-wide">
              UNSOED Official
            </a>
            <span class="border-l border-white h-4"></span>
            
            <div class="relative h-full flex items-center ml-2">
                <button onclick="toggleLangDropdown(event)" class="flex items-center gap-2 focus:outline-none py-1 hover:text-gray-100 cursor-pointer">
                    <img src="/unsoed_profile/public/assets/img/indonesia.png" alt="ID" class="w-6 h-4 object-cover border shadow-sm rounded-sm">
                    <span class="font-bold text-white">ID</span>
                    <svg id="lang-icon" class="w-3 h-3 text-white transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                </button>

                <div id="lang-dropdown-content" class="hidden absolute right-0 top-full mt-2 w-48 bg-white rounded-md shadow-xl overflow-hidden z-50 border border-gray-100 animate-fade-in-down">
                    <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-yellow-50 transition border-b border-gray-100 group/item">
                        <img src="/unsoed_profile/public/assets/img/indonesia.png" alt="ID" class="w-6 h-auto shadow-sm border border-gray-200 rounded-sm">
                        <span class="text-black font-medium group-hover/item:text-yellow-600 px-2">Indonesia</span>
                    </a>
                    <a href="#" class="flex items-center gap-3 px-4 py-3 hover:bg-yellow-50 transition group/item">
                        <img src="/unsoed_profile/public/assets/img/english.png" alt="EN" class="w-6 h-auto shadow-sm border border-gray-200 rounded-sm">
                        <span class="text-black font-medium group-hover/item:text-yellow-600 px-2">English (UK)</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-[#002b54] relative">
        <div class="container mx-auto px-4 md:px-8">
            <div class="flex justify-between items-center h-20"> 
                
                <a href="/unsoed_profile/public/" class="flex items-center shrink-0 py-2">
                    <img src="/unsoed_profile/public/assets/img/logo.png" 
                    class="w-64 md:w-68 h-auto object-contain ">
                </a>

                <div class="hidden md:flex space-x-6 lg:space-x-8 items-center h-full">
                    <a href="/unsoed_profile/public/" class="text-white font-medium hover:text-yellow-400 transition h-full flex items-center px-1 tracking-wide">Beranda</a>
                    <?php 
                    foreach ($menus as $label => $items) {
                        include __DIR__ . '/../ui/NavDropdown.php';
                    }
                    ?>
                </div>

                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" onclick="toggleMobileMenu()" class="text-white hover:text-yellow-500 focus:outline-none p-2 rounded-md">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu" class="hidden md:hidden bg-[#002244] border-t border-gray-700 absolute w-full left-0 top-full shadow-2xl max-h-[85vh] overflow-y-auto z-40">
            
            <div class="bg-[#001a33] px-6 py-5 border-b border-gray-600">
                
                <a href="https://unsoed.ac.id/" target="_blank" class="flex items-center justify-between text-white font-medium hover:text-yellow-400 mb-4 group">
                    <span>UNSOED Official</span>
                    <svg class="w-4 h-4 text-gray-400 group-hover:text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                </a>

                <div class="flex items-center gap-4">
                    <span class="text-gray-400 text-sm">Bahasa:</span>
                    <div class="flex gap-2">
                        <button class="flex items-center gap-2 bg-yellow-500 text-black px-3 py-1.5 rounded-sm shadow-sm">
                            <img src="/unsoed_profile/public/assets/img/indonesia.png" class="w-5 h-auto rounded-sm">
                            <span class="text-xs font-bold">ID</span>
                        </button>
                        <button class="flex items-center gap-2 bg-gray-700 text-gray-200 hover:text-white px-3 py-1.5 rounded-sm shadow-sm border border-gray-600">
                            <img src="/unsoed_profile/public/assets/img/english.png" class="w-5 h-auto rounded-sm">
                            <span class="text-xs font-bold">EN</span>
                        </button>
                    </div>
                </div>
            </div>
            <a href="/unsoed_profile/public/" class="block px-6 py-4 text-white font-bold border-b border-gray-700 hover:bg-[#003366] transition">Beranda</a>
            
            <?php foreach ($menus as $label => $items): ?>
                <?php $menuId = str_replace(' ', '-', $label); ?>
                <div class="border-b border-gray-700">
                    <button onclick="toggleSubmenu('<?php echo $menuId; ?>')" class="w-full flex justify-between items-center px-6 py-4 text-white font-medium hover:bg-[#003366] transition focus:outline-none">
                        <span><?php echo $label; ?></span>
                        <svg id="arrow-<?php echo $menuId; ?>" class="w-4 h-4 transform transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div id="submenu-<?php echo $menuId; ?>" class="hidden bg-[#001a33] px-6 py-2 shadow-inner">
                        <?php foreach ($items as $item): ?>
                            <a href="<?php echo $item['url']; ?>" class="block py-3 text-gray-400 hover:text-yellow-400 text-sm border-l-2 border-gray-700 hover:border-yellow-500 pl-4 mb-1 transition-colors">
                                <?php echo $item['text']; ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</nav>

<script src="/unsoed_profile/public/assets/js/navbar.js"></script>