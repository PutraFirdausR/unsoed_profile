<?php
$page_title = 'Akreditasi & Sertifikasi';
$base_url_asset = '/unsoed_profile/public/assets'; 
$page_bg = $base_url_asset . '/img/home.jpg'; 

require __DIR__ . '/../ui/page_header.php'; 
require __DIR__ . '/../data/akreditasi_data.php';
?>

<style>
    /* Merapikan scrollbar agar sesuai tema merah gelap */
    .custom-scroll::-webkit-scrollbar { width: 6px; }
    .custom-scroll::-webkit-scrollbar-thumb { background: #450a0a; border-radius: 10px; }
    .custom-scroll::-webkit-scrollbar-track { background: #f1f1f1; }
</style>

<div class="bg-gray-50 min-h-screen font-sans text-gray-800 py-20">
    
    <div class="text-center mb-16 px-4" data-aos="zoom-in">
        <span class="text-red-700 font-bold tracking-[0.2em] uppercase text-xs mb-3 block">Official Documentation</span>
        <h2 class="text-4xl md:text-5xl font-extrabold text-red-950 mt-2 mb-6">Pusat Akreditasi</h2>
        <div class="w-24 h-1.5 bg-yellow-500 mx-auto rounded-full mb-8"
             data-aos="fade-right"
             data-aos-delay="200"></div>
        <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed text-lg">
            Transparansi dan penjaminan mutu akademik Fakultas Hukum Universitas Jenderal Soedirman.
        </p>
    </div>

    <div class="container mx-auto max-w-7xl px-4 md:px-8 relative z-20">

        <?php foreach ($akreditasiData as $key => $section): ?>
            <div class="mb-20" data-aos="fade-up">
                <div class="flex items-center gap-6 mb-10 group">
                    <div class="h-12 w-1.5 bg-red-950 rounded-full group-hover:bg-yellow-500 transition-colors duration-300"></div>
                    <div>
                        <h2 class="text-2xl md:text-3xl font-black text-red-950 uppercase tracking-tight"><?= $section['title'] ?></h2>
                        <p class="text-red-700/60 font-semibold text-xs uppercase tracking-widest mt-1"><?= $section['desc'] ?></p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php foreach ($section['items'] as $item): ?>
                        <div class="transform hover:-translate-y-2 transition-all duration-300">
                            <?php require __DIR__ . '/../components/akreditasi_card.php'; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="mt-24 border-t-2 border-gray-200 pt-12" data-aos="fade-up">
            <div class="flex items-center gap-3 mb-8">
                <div class="p-2 bg-red-50 text-red-950 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-red-950 tracking-tight">Arsip & Dokumen Lama</h3>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
                <?php foreach ($arsipData as $arsip): ?>
                <a href="<?= $base_url_asset ?>/akreditasi/<?= $arsip['file'] ?>" 
                   target="_blank" 
                   class="flex items-center justify-between p-5 bg-white border border-gray-100 rounded-xl shadow-sm hover:shadow-md hover:border-red-950 group transition-all duration-300">
                    <div class="flex flex-col">
                        <span class="text-sm font-bold text-gray-700 group-hover:text-red-950 transition-colors"><?= $arsip['title'] ?></span>
                        <span class="text-[10px] text-gray-400 font-bold uppercase mt-1 tracking-tighter">Download Document</span>
                    </div>
                    <div class="bg-red-50 text-red-950 group-hover:bg-red-950 group-hover:text-white px-3 py-1.5 rounded-lg text-xs font-black transition-all">
                        PDF
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>

<script src="<?= $base_url_asset ?>/js/akreditasi.js"></script>