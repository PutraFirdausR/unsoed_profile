<?php

$page_title = 'Rencana Strategis';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php'; 

$renstraList = require __DIR__ . '/../data/renstra_data.php';
?>

<div class="bg-gray-50 font-sans text-gray-800 w-full min-h-screen py-16">
    <div class="container mx-auto px-4 md:px-8 max-w-7xl" >

        <div class="mb-12 animate-fade-in-up" data-aos="fade-up">
            <h2 class="text-3xl md:text-4xl font-bold text-red-950 mb-8 flex items-center gap-4">
                <span class="w-2 h-10 bg-red-950 rounded-full"></span>
                Arah Kebijakan Fakultas
            </h2>
            
            <div class="prose prose-lg text-gray-700 max-w-none bg-white p-8 rounded-2xl border border-gray-100 shadow-sm relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-red-50 rounded-bl-full -mr-16 -mt-16 opacity-50"></div>
                
                <p class="relative z-10 leading-relaxed">
                    <strong class="text-red-900">Rencana Strategis (Renstra)</strong> Fakultas Hukum Universitas Jenderal Soedirman adalah dokumen perencanaan jangka menengah yang menjabarkan Visi, Misi, Tujuan, Strategi, Kebijakan, Program, dan Kegiatan pembangunan fakultas sesuai dengan tugas dan fungsinya.
                </p>
                <p class="mt-6 relative z-10 leading-relaxed text-gray-600">
                    Dokumen ini menjadi acuan utama dalam penyusunan Rencana Kerja dan Anggaran (RKA) tahunan serta sebagai instrumen pengendalian dan evaluasi kinerja fakultas selama periode lima tahun ke depan.
                </p>
            </div>
        </div>

        <div class="animate-fade-in-up delay-100" data-aos="fade-up">
            <div class="flex items-center gap-3 mb-6 ml-1">
                <h3 class="text-sm font-black text-red-900/40 uppercase tracking-[0.2em]">Dokumen Lampiran</h3>
                <div class="h-px bg-gray-200 grow"></div>
            </div>
            
            <div class="space-y-4">
                <?php foreach($renstraList as $item): ?>
                    <div class="transform hover:-translate-y-1 transition-transform duration-300">
                        <?php include __DIR__ . '/../components/renstra_card.php'; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>