<?php
// FILE: app/views/renstra.php

// 1. Setup Halaman
$page_title = 'Rencana Strategis';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php'; 

// 2. Load Data
$renstraList = require __DIR__ . '/../data/renstra_data.php';
?>

<div class="bg-gray-50 font-sans text-gray-800 min-h-screen py-20">
    <div class="container mx-auto px-4 md:px-8 max-w-5xl">

        <div class="mb-10 animate-fade-in-up">
            <h2 class="text-3xl font-bold text-[#002b54] mb-6 flex items-center gap-3">
                <span class="w-1.5 h-8 bg-yellow-500 rounded-full"></span>
                Arah Kebijakan Fakultas
            </h2>
            
            <div class="prose prose-lg text-gray-600 max-w-none bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                <p>
                    <strong>Rencana Strategis (Renstra)</strong> Fakultas Hukum Universitas Jenderal Soedirman adalah dokumen perencanaan jangka menengah yang menjabarkan Visi, Misi, Tujuan, Strategi, Kebijakan, Program, dan Kegiatan pembangunan fakultas sesuai dengan tugas dan fungsinya.
                </p>
                <p class="mt-4">
                    Dokumen ini menjadi acuan utama dalam penyusunan Rencana Kerja dan Anggaran (RKA) tahunan serta sebagai instrumen pengendalian dan evaluasi kinerja fakultas selama periode lima tahun ke depan.
                </p>
            </div>
        </div>

        <div class="animate-fade-in-up delay-100">
            <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-4 ml-1">Dokumen Lampiran</h3>
            
            <?php foreach($renstraList as $item): ?>
                
                <?php include __DIR__ . '/../components/renstra_card.php'; ?>

            <?php endforeach; ?>
            
        </div>

    </div>
</div>