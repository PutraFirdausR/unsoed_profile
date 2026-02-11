<?php

$page_title = 'Akreditasi & Sertifikasi';
$base_url_asset = '/unsoed_profile/public/assets'; 
$page_bg = $base_url_asset . '/img/home.jpg'; 

require __DIR__ . '/../ui/page_header.php'; 
require __DIR__ . '/../data/akreditasi_data.php';
?>

<style>
    .custom-scroll::-webkit-scrollbar { width: 6px; }
    .custom-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
</style>

<div class="bg-gray-50 min-h-screen font-sans text-gray-800 py-16">
    
    <div class="text-center mb-12">
        <span class="text-yellow-600 font-bold tracking-widest uppercase text-sm">OFFICIAL DOCUMENTATION</span>
        <h2 class="text-3xl font-bold text-[#002b54] mt-2 mb-4">Pusat Akreditasi</h2>
        <div class="w-20 h-1.5 bg-yellow-400 mx-auto rounded-full mb-6"></div>
        <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
            Transparansi dan penjaminan mutu Fakultas Hukum Universitas Jenderal Soedirman.
        </p>
    </div>

    <div class="container mx-auto max-w-7xl px-4 md:px-6 -mt-20 relative z-20">

        <?php foreach ($akreditasiData as $key => $section): ?>
            <div class="mb-16">
                <div class="flex items-end gap-4 mb-8 pl-2 border-l-4 border-yellow-500">
                    <div>
                        <h2 class="text-3xl font-bold text-[#002b54] leading-none"><?= $section['title'] ?></h2>
                        <p class="text-gray-500 mt-2 text-sm uppercase tracking-wide"><?= $section['desc'] ?></p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-6">
                    <?php foreach ($section['items'] as $item): ?>
                        <?php require __DIR__ . '/../components/akreditasi_card.php'; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="mt-20 border-t border-gray-200 pt-10">
            <h3 class="text-xl font-bold text-gray-400 mb-6 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                Arsip & Dokumen Lama
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php foreach ($arsipData as $arsip): ?>
                <a href="<?= $base_url_asset ?>/akreditasi/<?= $arsip['file'] ?>" target="_blank" class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg text-gray-500 hover:text-[#002b54] hover:border-[#002b54] transition cursor-pointer">
                    <span class="text-sm font-medium"><?= $arsip['title'] ?></span>
                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">PDF</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>

<script src="<?= $base_url_asset ?>/js/akreditasi.js"></script>