<?php
// FILE: app/views/alumni.php

$base_url = '/UNSOED_PROFILE'; 
$page_title = 'Alumni Terkemuka';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 

require __DIR__ . '/../ui/page_header.php'; 

// 1. Load Data
require __DIR__ . '/../data/alumni_data.php';
?>

<div class="bg-slate-50 min-h-screen py-16 font-sans text-slate-800">
    <div class="container mx-auto px-4 max-w-6xl">

        <div class="text-center mb-16">
            <h2 class="text-3xl font-bold text-[#002b54] mb-3">Alumni Terkemuka</h2>
            <div class="h-1 w-20 bg-yellow-400 mx-auto rounded-full"></div>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">
                Profil lulusan Fakultas Hukum Universitas Jenderal Soedirman yang berkiprah di kancah nasional.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach($data_alumni as $alumni): ?>
                
                <?php include __DIR__ . '/../components/alumni_card.php'; ?>

            <?php endforeach; ?>
        </div>

        <div class="mt-20 text-center border-t border-slate-200 pt-10">
            <p class="text-slate-500 text-sm mb-4">Apakah Anda bagian dari alumni?</p>
            <a href="https://kafhunsoed.com/" target="_blank" class="inline-flex items-center gap-2 px-6 py-2.5 bg-[#002b54] text-white text-sm font-semibold rounded hover:bg-blue-900 transition-colors shadow-lg shadow-blue-900/20">
                <span>Kunjungi Website Alumni</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
            </a>
        </div>

    </div>
</div>