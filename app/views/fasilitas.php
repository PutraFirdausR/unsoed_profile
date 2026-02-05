<?php
$fasilitas = [
    [
        'nama'  => 'Gedung Yustisia 1 (Akademik)',
        'desc'  => 'Pusat kegiatan perkuliahan sarjana dan laboratorium dasar.',
        'items' => [
            'Ruang Kuliah Reguler (AC & Multimedia)',
            'Laboratorium Komputer',
            'Laboratorium Hukum Dasar',
            'Ruang Jurnal Dinamika Hukum'
        ]
    ],
    [
        'nama'  => 'Gedung Yustisia 3 (Pusat Informasi)',
        'desc'  => 'Pusat referensi ilmiah dan pertemuan skala besar.',
        'items' => [
            'Pusat Informasi Ilmiah (Perpustakaan)',
            'Aula Fakultas Hukum',
            'Ruang Video Conference',
            'Ruang Server & IT'
        ]
    ],
    [
        'nama'  => 'Gedung Yustisia 4 (Lab & Multimedia)',
        'desc'  => 'Gedung modern untuk praktik hukum dan kreativitas digital.',
        'items' => [
            'Ruang Peradilan Semu (Moot Court)',
            'Podcast & Multimedia Room',
            'Pusat Prestasi Mahasiswa (PPM)',
            'Ruang Praktik Latihan Kemahiran Hukum (PLKH)'
        ]
    ],
    [
        'nama'  => 'Gedung Yustisia 6 (Adhyaksa)',
        'desc'  => 'Gedung pascasarjana dan auditorium utama.',
        'items' => [
            'Auditorium ST Burhanuddin',
            'Ruang Kuliah Pascasarjana (S2 & S3)',
            'Ruang Guru Besar',
            'Ruang Sidang Tertutup'
        ]
    ],
    [
        'nama'  => 'Gedung Yustisia 5 (Kemahasiswaan)',
        'desc'  => 'Pusat kegiatan organisasi dan pengembangan diri mahasiswa.',
        'items' => [
            'Sekretariat BEM & DLM',
            'Ruang Unit Kegiatan Mahasiswa (UKM)',
            'Co-Working Space Mahasiswa',
            'Ruang Diskusi Terbuka'
        ]
    ],
    [
        'nama'  => 'Fasilitas Penunjang',
        'desc'  => 'Sarana pendukung kenyamanan sivitas akademika.',
        'items' => [
            'Masjid Al-Mizan & Musholla',
            'Kantin Sehat & Higienis',
            'Area Parkir Luas & Aman',
            'Free Wi-Fi (Hotspot Area)'
        ]
    ],
];

$page_title = 'Fasilitas';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php';
?>

<div class=" font-sans text-gray-800 w-full min-h-screen">

    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8 max-w-7xl">
            
            <div class="mb-12 text-center">
                <span class="text-yellow-600 font-bold tracking-widest text-sm uppercase mb-2 block">Sarana & Prasarana</span>
                <h2 class="text-3xl md:text-4xl font-bold text-[#002b54]">Jelajahi Fasilitas Kami</h2>
                <div class="w-24 h-1.5 bg-yellow-500 mx-auto mt-4 rounded-full"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <?php foreach ($fasilitas as $item): ?>
                <div class="group bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full relative overflow-hidden">
                    
                    <div class="h-2 w-full bg-[#002b54] group-hover:bg-yellow-500 transition-colors"></div>

                    <div class="p-8 flex flex-col grow">
                        
                        <h3 class="text-xl font-bold text-[#002b54] mb-3 group-hover:text-yellow-600 transition-colors flex items-center gap-2">
                            <svg class="w-6 h-6 text-gray-400 group-hover:text-yellow-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            <?= $item['nama'] ?>
                        </h3>
                        
                        <p class="text-gray-600 text-sm mb-6 leading-relaxed border-b border-gray-100 pb-4">
                            <?= $item['desc'] ?>
                        </p>

                        <div class="mt-auto">
                            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Fasilitas Tersedia:</h4>
                            <ul class="space-y-2">
                                <?php foreach ($item['items'] as $fitur): ?>
                                <li class="flex items-start text-sm text-gray-700 group/item">
                                    <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 shrink-0 group-hover/item:text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors"><?= $fitur ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section>

</div>