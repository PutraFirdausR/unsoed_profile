<?php

$base_url = '/UNSOED_PROFILE'; 
$page_title = 'Informasi Berkala';
$page_bg    = $base_url . '/public/assets/img/home.jpg'; 

require __DIR__ . '/../ui/page_header.php'; 
require __DIR__ . '/../data/berkala_data.php';
$asset_path = '/unsoed_profile/public/assets';
?>

<div class="bg-slate-50 font-sans text-slate-800 min-h-screen py-16 relative">
    
    <div class="absolute top-0 left-0 w-full h-96 bg-linear-to-b from-red-50 to-transparent pointer-events-none"></div>

    <div class="container mx-auto px-4 md:px-8 max-w-7xl relative z-10">

        <div class="text-center mb-16 max-w-3xl mx-auto" data-aos="zoom-in">
            <span class="inline-block py-1.5 px-4 rounded-full bg-yellow-400 text-red-950 text-xs font-bold tracking-widest uppercase mb-6 shadow-sm">
                PPID Fakultas Hukum
            </span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-red-950 mb-6 leading-tight">
                Informasi Berkala
            </h2>
            <p class="text-slate-600 mb-10 text-lg leading-relaxed font-light">
                Akses transparansi publik, laporan kinerja, dan dokumen resmi fakultas dalam satu pintu.
            </p>

            <div class="relative max-w-lg mx-auto group" data-aos="fade-up">
                <input type="text" id="searchInput" 
                    class="block w-full pl-12 pr-6 py-4 bg-white border border-gray-200 rounded-full text-base text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-red-100 focus:border-red-300 shadow-lg shadow-red-900/5 transition-all" 
                    placeholder="Penelusuran dokumen (contoh: Profil, Laporan, Daftar)...">
                <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                    <svg class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="cardContainer" >
            <?php foreach($data_berkala as $data): ?>
                
                <?php include __DIR__ . '/../components/berkala_card.php'; ?>

            <?php endforeach; ?>
        </div>
        
        <div id="noResults" class="hidden text-center py-20 animate-fade-in-up" >
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gray-100 mb-6">
                <svg class="w-10 h-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Dokumen tidak ditemukan</h3>
            <p class="text-gray-500">Silakan coba dengan kata kunci lain.</p>
        </div>

    </div>
</div>

<div id="imageModal" class="fixed inset-0 z-9999 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="absolute inset-0 bg-slate-900/90 backdrop-blur-md transition-opacity" onclick="closeModal()"></div>
    
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center">
            
            <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:w-full sm:max-w-xl scale-100">
                <div class="bg-white px-6 py-4 sm:flex sm:flex-row-reverse">
                    <button type="button" class="inline-flex w-full justify-center rounded-xl bg-red-950 px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-red-900 sm:w-auto transition-colors" onclick="closeModal()">
                        Tutup Tampilan
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="<?= $asset_path ?>/js/berkala.js"></script>