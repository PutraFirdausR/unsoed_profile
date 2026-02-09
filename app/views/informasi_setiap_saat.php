<?php
// FILE: app/views/informasi_setiap_saat.php

// 1. DEFINISI BASE URL
// Sesuaikan dengan nama folder project Anda di htdocs
$base_url = '/UNSOED_PROFILE'; 

$page_title = 'Informasi Setiap Saat';
$page_bg    = $base_url . '/public/assets/img/home.jpg'; 

require __DIR__ . '/../ui/PageHeader.php'; 

// 2. DATA INFORMASI SETIAP SAAT (Sesuai File TXT)
$data_setiap_saat = [
    [
        'category' => '1. Profil & Kelembagaan',
        'icon'     => 'building',
        'items'    => [
            ['title' => 'Alamat Lengkap (Google Maps)', 'link' => 'https://www.google.com/maps/place/Fakultas+Hukum+Universitas+Jenderal+Soedirman/@-7.404956,109.247321,15z/data=!4m6!3m5!1s0x2e655efb2b367917:0x2622fc4ad800553c!8m2!3d-7.4049556!4d109.2473211!16s%2Fg%2F11nx3qrltf?hl=id&entry=ttu', 'type' => 'external', 'note' => 'Peta Lokasi'],
            ['title' => 'Struktur Organisasi', 'link' => $base_url . '/struktur-organisasi', 'type' => 'internal', 'note' => 'Lihat Bagan'],
            ['title' => 'Profil Laboratorium', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Profil Pimpinan (3 Level ke Bawah)', 'link' => $base_url . '/public/assets/docs/Profil-Pimpinan-Fakultas-3-tingkat-kebawah.pdf', 'type' => 'pdf', 'note' => 'Unduh PDF'],
            ['title' => 'Rencana Strategis (Renstra)', 'link' => $base_url . '/public/assets/docs/Renstra.pdf', 'type' => 'pdf', 'note' => 'Unduh PDF'],
            ['title' => 'Daftar Nama / Alamat Kantor Pejabat', 'link' => 'https://drive.google.com/file/d/1Ls1KIQs5G1EDUFAqnfDDKmDu8K5I7L9R/view', 'type' => 'external', 'note' => 'Google Drive'],
        ]
    ],
    [
        'category' => '2. Akademik & Penerimaan',
        'icon'     => 'calendar',
        'items'    => [
            ['title' => 'Daya Tampung Per Prodi', 'link' => 'https://drive.google.com/file/d/15frllogMLOhNXSHkR3YmqIIYf57UOxq2/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Biaya Pendidikan (UKT) Sarjana', 'link' => 'https://admisi.unsoed.ac.id/program-sarjana-biaya-pendidikan/', 'type' => 'external', 'note' => 'Admisi Unsoed'],
            ['title' => 'Biaya Pendidikan (UKT) Pascasarjana', 'link' => 'https://admisi.unsoed.ac.id/program-pascasarjana-biaya-pendidikan/', 'type' => 'external', 'note' => 'Admisi Unsoed'],
            ['title' => 'Jadwal Penerimaan Mahasiswa Baru', 'link' => 'https://admisi.unsoed.ac.id/', 'type' => 'external', 'note' => 'Admisi Unsoed'],
            ['title' => 'Pedoman Akademik Mahasiswa', 'link' => 'https://fh.unsoed.ac.id/wp-content/uploads/2024/09/Untitled.pdf', 'type' => 'pdf', 'note' => 'Unduh PDF'],
            ['title' => 'Jadwal Perkuliahan', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Jadwal Ujian', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Petunjuk Praktikum', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Perubahan Jadwal Kuliah/Ujian', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ],
    [
        'category' => '3. SOP & Alur Layanan Akademik',
        'icon'     => 'scale',
        'items'    => [
            ['title' => 'Alur Pengisian KRS', 'link' => 'https://drive.google.com/file/d/148EAsiaums6pU5AEeIS5nF0A3vaCNPXt/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Magang / Kerja Praktik', 'link' => 'https://drive.google.com/file/d/1MmAE92m5fXNYubhIcbsOIlNhd29ghTDL/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Kuliah Kerja Lapangan (PPL)', 'link' => 'https://drive.google.com/file/d/15UcjuH8vcC-EeBzjtR8Nt5e77S0vK-qM/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Jadwal KKL / KP', 'link' => 'https://drive.google.com/file/d/161LS3Z2FgqBRfP6iC7Zb_vhvstltTZTa/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Proses Skripsi', 'link' => 'https://drive.google.com/file/d/145bgYGC6Vun07Q87zP3r63wAOXIYw9J2/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Proses Yudisium', 'link' => 'https://drive.google.com/file/d/1XxmYwwtEIgRZMTcoJRRhY7cioJyh0rMr/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Pelepasan Calon Wisuda', 'link' => 'https://drive.google.com/file/d/1dfaBM5DAl1z853twk8wEaTJ_pPV34sbl/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Pedoman Penulisan Tugas Akhir', 'link' => 'https://drive.google.com/file/d/1wbM1H0bmx0nPXZ3Fqf7wtXcieW1Sjr8S/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Cuti & Aktif Kembali', 'link' => 'https://drive.google.com/file/d/1DoBn4PXlybtdmGOzfbLh7p_AN2X09KMS/view', 'type' => 'external', 'note' => 'Google Drive'],
        ]
    ],
    [
        'category' => '4. Kemahasiswaan & Alumni',
        'icon'     => 'shield',
        'items'    => [
            ['title' => 'Profil UKM', 'link' => 'https://docs.google.com/spreadsheets/d/1IjmVoIhzP8JhvY1Mla6NBGMUojCG3lEd/edit?usp=sharing&ouid=104248458895643129437&rtpof=true&sd=true', 'type' => 'external', 'note' => 'Google Sheets'],
            ['title' => 'SOP Layanan Kemahasiswaan', 'link' => 'https://drive.google.com/file/d/1Qf7pkp9HJ5WZ01fQDyehjaP2efex67Qf/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Daftar Prestasi Penalaran', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Daftar Prestasi Khusus', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Daftar Nama UKM', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Panduan Kegiatan UKM', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ],
    [
        'category' => '5. Perpustakaan (PII)',
        'icon'     => 'book',
        'items'    => [
            ['title' => 'Alur Peminjaman Buku/Jurnal', 'link' => 'https://drive.google.com/file/d/19DifIoXKFePceDkt6fMqmwnWKQW2FL5E/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Daftar Koleksi Perpustakaan', 'link' => 'https://drive.google.com/file/d/1mj8xkORhc3bn2afqEuHFgOz6iRcx9OTD/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Katalog Buku', 'link' => 'https://drive.google.com/file/d/1mj8xkORhc3bn2afqEuHFgOz6iRcx9OTD/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Panduan Pengguna PII', 'link' => 'https://drive.google.com/file/d/1PYvQBUaf1ub6Qnmya7F2sBVmBfzp48nv/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Jadwal Pelayanan PII', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Alur Permohonan Bebas PII', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ],
    [
        'category' => '6. Umum, Keuangan & Fasilitas',
        'icon'     => 'chart',
        'items'    => [
            ['title' => 'Pedoman Peminjaman Fasilitas', 'link' => 'https://drive.google.com/file/d/1MQTqRQWJdmwDf1pd5gMlGSfk6n131etL/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Tarif Layanan Fasilitas', 'link' => 'https://drive.google.com/file/d/1MQTqRQWJdmwDf1pd5gMlGSfk6n131etL/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Daftar Inventaris Barang Ruang', 'link' => 'https://drive.google.com/file/d/1NAlXO5uBGN5wxgfGvAWc2gyIywWwXozQ/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Permintaan Barang Persediaan', 'link' => 'https://drive.google.com/file/d/19eK0darNpjMmed7VPqvgAf59FQKQchNN/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'SOP Surat Masuk & Keluar', 'link' => 'https://drive.google.com/file/d/19eK0darNpjMmed7VPqvgAf59FQKQchNN/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'SOP Layanan Umum & BMN', 'link' => 'https://drive.google.com/file/d/19eK0darNpjMmed7VPqvgAf59FQKQchNN/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Pengelolaan Kearsipan', 'link' => 'https://docs.google.com/spreadsheets/d/1YM-z6PQuzW4PiL4Td9WTeJXVc4rdedOt/edit?usp=sharing&ouid=104248458895643129437&rtpof=true&sd=true', 'type' => 'external', 'note' => 'Google Sheets'],
            ['title' => 'Alur Peminjaman Fasilitas', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ],
    [
        'category' => '7. Publikasi & Lainnya',
        'icon'     => 'book',
        'items'    => [
            ['title' => 'Ringkasan Isi Informasi', 'link' => 'https://drive.google.com/file/d/1BNh10R6Xg8TCFPxNaLlWRyp8wZuH2yJW/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Majalah/Jurnal 2024', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Booklet/Leaflet 2024', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Pengumuman Upacara', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Daftar Dosen Berprestasi', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Daftar Tendik Berprestasi', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ]
];
?>

<div class="bg-slate-50 font-sans text-slate-800 min-h-screen py-16">
    
    <div class="absolute top-0 left-0 w-full h-96 bg-linear-to-b from-blue-50 to-transparent pointer-events-none"></div>

    <div class="container mx-auto px-4 md:px-8 max-w-7xl relative z-10">

        <div class="text-center mb-16 max-w-3xl mx-auto">
            <span class="inline-block py-1.5 px-4 rounded-full bg-yellow-400 text-[#002b54] text-xs font-bold tracking-widest uppercase mb-6 shadow-sm">
                PPID Fakultas Hukum
            </span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#002b54] mb-6 leading-tight">
                Informasi Setiap Saat
            </h2>
            <p class="text-slate-600 mb-10 text-lg leading-relaxed font-light">
                Daftar seluruh informasi publik yang dapat diakses oleh masyarakat kapan saja.
            </p>

            <div class="relative max-w-lg mx-auto group">
                <input type="text" id="searchInput" 
                    class="block w-full pl-12 pr-6 py-4 bg-white border border-gray-200 rounded-full text-base text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-300 shadow-lg shadow-blue-900/5 transition-all" 
                    placeholder="Penelusuran Informasi (contoh: SOP, Skripsi, UKT, Profil)...">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="cardContainer">
            
            <?php foreach($data_setiap_saat as $data): ?>
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 card-item flex flex-col h-full border-t-4 border-t-[#002b54] overflow-hidden group">
                
                <div class="p-6 pb-2">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#002b54] flex items-center justify-center shrink-0 border border-blue-100 group-hover:bg-[#002b54] group-hover:text-white transition-colors duration-300">
                            <?php 
                            $icon = $data['icon'];
                            if($icon == 'building') echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>';
                            elseif($icon == 'calendar') echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>';
                            elseif($icon == 'chart') echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>';
                            elseif($icon == 'scale') echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>';
                            elseif($icon == 'shield') echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>';
                            elseif($icon == 'book') echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>';
                            else echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>';
                            ?>
                        </div>
                        <h3 class="text-lg font-bold text-[#002b54] category-title leading-snug"><?= $data['category'] ?></h3>
                    </div>
                    <div class="h-px w-full bg-linear-to-r from-gray-200 to-transparent"></div>
                </div>

                <div class="p-6 pt-2 flex-1 flex flex-col">
                    <ul class="space-y-3">
                        <?php foreach($data['items'] as $item): ?>
                        <li class="item-link">
                            
                            <?php if($item['type'] == 'disabled' || $item['type'] == 'none'): ?>
                                <div class="flex items-center gap-3 p-3 rounded-lg bg-gray-50 border border-transparent text-gray-400 cursor-not-allowed">
                                    <span class="w-2 h-2 rounded-full bg-gray-300 shrink-0"></span>
                                    <div class="flex-1 min-w-0">
                                        <span class="font-medium text-sm item-text block truncate"><?= $item['title'] ?></span>
                                        <span class="text-[10px] uppercase tracking-wide opacity-60 font-semibold">Belum Tersedia</span>
                                    </div>
                                </div>

                            <?php else: ?>
                                <a href="<?= $item['link'] ?>" target="<?= ($item['type']=='internal')?'_self':'_blank' ?>" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50 hover:border-blue-100 border border-transparent transition-all duration-200 group/link">
                                    <span class="w-2 h-2 rounded-full bg-blue-600 shrink-0 group-hover/link:scale-125 transition-transform shadow-sm shadow-blue-200"></span>
                                    <div class="flex-1 min-w-0">
                                        <span class="font-semibold text-sm text-gray-700 group-hover/link:text-[#002b54] item-text block"><?= $item['title'] ?></span>
                                        <?php if(isset($item['note'])): ?>
                                            <span class="text-[11px] text-gray-500 block mt-0.5 group-hover/link:text-blue-600"><?= $item['note'] ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-300 group-hover/link:text-blue-600 group-hover/link:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
            <?php endforeach; ?>
            
        </div>
        
        <div id="noResults" class="hidden text-center py-20 animate-fade-in-up">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gray-100 mb-6">
                <svg class="w-10 h-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Dokumen tidak ditemukan</h3>
            <p class="text-gray-500">Silakan coba dengan kata kunci lain.</p>
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
                const category = card.querySelector('.category-title').innerText.toLowerCase();
                const listItems = card.querySelectorAll('.item-link');
                let matchInCard = false;

                if(category.includes(term)) {
                    matchInCard = true;
                    listItems.forEach(li => li.classList.remove('hidden'));
                } else {
                    listItems.forEach(li => {
                        const text = li.querySelector('.item-text').innerText.toLowerCase();
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
    });
</script>