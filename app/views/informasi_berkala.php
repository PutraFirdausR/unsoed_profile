<?php
// FILE: app/views/informasi_berkala.php

$page_title = 'Informasi Berkala';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php'; 

// DATA DUMMY (Struktur disesuaikan dengan website FH UNSOED)
// Silakan isi 'link' dengan URL file PDF asli Anda nanti
$data_berkala = [
    [
        'category' => 'Profil Badan Publik',
        'icon'     => 'building', // Icon keyword
        'items'    => [
            ['title' => 'Sejarah Pendirian Fakultas', 'link' => '#'],
            ['title' => 'Visi dan Misi', 'link' => '#'],
            ['title' => 'Struktur Organisasi', 'link' => '#'],
            ['title' => 'Tugas dan Fungsi', 'link' => '#'],
            ['title' => 'Profil Pimpinan', 'link' => '#'],
            ['title' => 'Alamat dan Kontak', 'link' => '#'],
            ['title' => 'LHKPN Pimpinan', 'link' => '#'],
        ]
    ],
    [
        'category' => 'Program & Kegiatan',
        'icon'     => 'calendar',
        'items'    => [
            ['title' => 'Nama Program dan Kegiatan', 'link' => '#'],
            ['title' => 'Penanggungjawab Pelaksana', 'link' => '#'],
            ['title' => 'Target dan Capaian', 'link' => '#'],
            ['title' => 'Jadwal Pelaksanaan', 'link' => '#'],
            ['title' => 'Agenda Kegiatan Tahunan', 'link' => '#'],
            ['title' => 'Informasi Penerimaan Mahasiswa Baru', 'link' => '#'],
        ]
    ],
    [
        'category' => 'Kinerja & Keuangan',
        'icon'     => 'chart',
        'items'    => [
            ['title' => 'Laporan Akuntabilitas Kinerja (LAKIP)', 'link' => '#'],
            ['title' => 'Laporan Keuangan Tahunan', 'link' => '#'],
            ['title' => 'Rencana Kerja dan Anggaran (RKA)', 'link' => '#'],
            ['title' => 'Daftar Isian Pelaksanaan Anggaran (DIPA)', 'link' => '#'],
            ['title' => 'Laporan Realisasi Anggaran', 'link' => '#'],
            ['title' => 'Neraca Keuangan', 'link' => '#'],
        ]
    ],
    [
        'category' => 'Akses Informasi',
        'icon'     => 'eye',
        'items'    => [
            ['title' => 'Jumlah Permohonan Informasi', 'link' => '#'],
            ['title' => 'Waktu Pelayanan Informasi', 'link' => '#'],
            ['title' => 'Laporan Layanan Informasi Publik', 'link' => '#'],
            ['title' => 'Statistik Akses Informasi', 'link' => '#'],
        ]
    ],
    [
        'category' => 'Peraturan & Kebijakan',
        'icon'     => 'scale',
        'items'    => [
            ['title' => 'Undang-Undang Terkait', 'link' => '#'],
            ['title' => 'Peraturan Pemerintah', 'link' => '#'],
            ['title' => 'Peraturan Rektor', 'link' => '#'],
            ['title' => 'Keputusan Dekan', 'link' => '#'],
            ['title' => 'SOP Layanan Akademik', 'link' => '#'],
        ]
    ],
    [
        'category' => 'Hak & Tata Cara',
        'icon'     => 'book',
        'items'    => [
            ['title' => 'Hak-Hak Pemohon Informasi', 'link' => '#'],
            ['title' => 'Tata Cara Permohonan Informasi', 'link' => '#'],
            ['title' => 'Tata Cara Pengajuan Keberatan', 'link' => '#'],
            ['title' => 'Proses Penyelesaian Sengketa', 'link' => '#'],
            ['title' => 'Biaya / Tarif Layanan', 'link' => '#'],
        ]
    ],
    [
        'category' => 'Pengaduan & Pelanggaran',
        'icon'     => 'exclamation',
        'items'    => [
            ['title' => 'Tata Cara Pengaduan', 'link' => '#'],
            ['title' => 'Laporan Pelanggaran (Whistleblowing)', 'link' => '#'],
            ['title' => 'Laporan Pungutan Liar', 'link' => '#'],
            ['title' => 'Kontak Layanan Pengaduan', 'link' => '#'],
        ]
    ],
    [
        'category' => 'Pengadaan Barang & Jasa',
        'icon'     => 'box',
        'items'    => [
            ['title' => 'Pengumuman Pengadaan', 'link' => '#'],
            ['title' => 'Prosedur Pengadaan', 'link' => '#'],
            ['title' => 'Daftar Rekanan', 'link' => '#'],
            ['title' => 'Laporan Pengadaan', 'link' => '#'],
        ]
    ]
];
?>

<div class="bg-gray-50 font-sans text-gray-800 min-h-screen py-16">
    <div class="container mx-auto px-4 md:px-8 max-w-7xl">

        <div class="text-center mb-16 max-w-3xl mx-auto">
            <span class="inline-block py-1 px-3 rounded text-blue-800 bg-blue-100 text-xs font-bold tracking-widest uppercase mb-4">
                PPID Fakultas Hukum
            </span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#002b54] mb-6">Informasi Berkala</h2>
            <p class="text-gray-600 mb-8">
                Layanan informasi publik yang disediakan secara berkala untuk menjamin transparansi dan akuntabilitas fakultas.
            </p>

            <div class="relative max-w-xl mx-auto group">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400 group-focus-within:text-blue-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>
                <input type="text" id="searchInput" 
                    class="block w-full pl-12 pr-4 py-4 bg-white border border-gray-200 rounded-full text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm transition-all" 
                    placeholder="Cari dokumen (misal: Laporan Keuangan, Visi Misi)...">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="cardContainer">
            
            <?php foreach($data_berkala as $data): ?>
            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-xl hover:border-blue-200 transition-all duration-300 group card-item">
                
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#002b54] flex items-center justify-center group-hover:bg-[#002b54] group-hover:text-white transition-colors duration-300">
                        <?php if($data['icon'] == 'building'): ?>
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                        <?php elseif($data['icon'] == 'calendar'): ?>
                             <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        <?php elseif($data['icon'] == 'chart'): ?>
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>
                        <?php elseif($data['icon'] == 'eye'): ?>
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/></svg>
                        <?php elseif($data['icon'] == 'scale'): ?>
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                        <?php elseif($data['icon'] == 'book'): ?>
                             <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>
                        <?php elseif($data['icon'] == 'exclamation'): ?>
                             <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        <?php else: ?>
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                        <?php endif; ?>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800 category-title"><?= $data['category'] ?></h3>
                </div>

                <ul class="space-y-3">
                    <?php foreach($data['items'] as $item): ?>
                    <li class="item-link">
                        <a href="<?= $item['link'] ?>" class="flex items-start gap-3 group/link p-2 rounded-lg hover:bg-gray-50 transition-colors">
                            <span class="mt-1.5 w-1.5 h-1.5 bg-gray-300 rounded-full shrink-0 group-hover/link:bg-blue-500 transition-colors"></span>
                            <span class="text-sm text-gray-600 group-hover/link:text-blue-700 transition-colors item-text"><?= $item['title'] ?></span>
                            <svg class="w-4 h-4 text-gray-300 ml-auto opacity-0 group-hover/link:opacity-100 group-hover/link:text-blue-500 transition-all transform group-hover/link:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>

            </div>
            <?php endforeach; ?>
            
        </div>
        
        <div id="noResults" class="hidden text-center py-20">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-gray-100 mb-4 text-gray-400">
                <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
            </div>
            <h3 class="text-lg font-bold text-gray-800">Dokumen tidak ditemukan</h3>
            <p class="text-gray-500">Coba kata kunci lain.</p>
        </div>

    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const cards = document.querySelectorAll('.card-item');
        const noResults = document.getElementById('noResults');

        searchInput.addEventListener('keyup', function(e) {
            const term = e.target.value.toLowerCase();
            let hasVisible = false;

            cards.forEach(card => {
                const category = card.querySelector('.category-title').textContent.toLowerCase();
                const items = card.querySelectorAll('.item-text');
                let cardHasMatch = false;

                // Cek apakah kategori cocok
                if (category.includes(term)) {
                    cardHasMatch = true;
                    // Tampilkan semua item jika kategori cocok
                    items.forEach(item => item.closest('li').style.display = 'block');
                } else {
                    // Cek per item
                    items.forEach(item => {
                        const text = item.textContent.toLowerCase();
                        if (text.includes(term)) {
                            item.closest('li').style.display = 'block';
                            cardHasMatch = true;
                        } else {
                            item.closest('li').style.display = 'none';
                        }
                    });
                }

                if (cardHasMatch) {
                    card.style.display = 'block';
                    hasVisible = true;
                } else {
                    card.style.display = 'none';
                }
            });

            if (hasVisible) {
                noResults.classList.add('hidden');
            } else {
                noResults.classList.remove('hidden');
            }
        });
    });
</script>