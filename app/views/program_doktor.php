<?php
// FILE: app/views/program_doktor.php

// 1. Setup Halaman
$base_url = '/UNSOED_PROFILE'; 
$page_title = 'Program Doktor';
$page_bg    = $base_url . '/public/assets/img/home.jpg'; 

require __DIR__ . '/../ui/page_header.php'; 

// 2. Load Data
$data = require __DIR__ . '/../data/doktor_data.php';

// Helper Function Judul (Jika belum ada di global helper)
function renderDoktorTitle($title) {
    echo '<div class="flex items-center gap-3 mb-6">';
    echo '<div class="w-1.5 h-8 bg-yellow-400 rounded-full"></div>';
    echo '<h2 class="text-2xl md:text-3xl font-bold text-[#002b54]">' . $title . '</h2>';
    echo '</div>';
}
?>

<div class="bg-gray-50 min-h-screen font-sans text-gray-800 py-16 scroll-smooth">
    <div class="container mx-auto px-4 md:px-8 max-w-7xl">

        <div class="mb-10 border-b border-gray-200 pb-6">
            <h1 class="text-3xl md:text-5xl font-extrabold text-[#002b54] mb-4">
                Program Doktor Ilmu Hukum
            </h1>
            <p class="text-gray-500 text-lg max-w-3xl leading-relaxed">
                Menghasilkan lulusan Doktor Hukum yang bermoral, berdaya saing global, dan berbasis kearifan lokal.
            </p>
            <div class="mt-4 inline-block bg-blue-100 border border-blue-300 text-blue-800 text-sm font-bold px-4 py-1.5 rounded-full">
                Terakreditasi "B" BAN-PT
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 md:gap-12 relative">
            
            <aside class="hidden lg:block lg:col-span-1">
                <?php 
                $sidebar_path = __DIR__ . '/../components/sidebar_doktor.php';
                if(file_exists($sidebar_path)) {
                    include $sidebar_path;
                } else {
                    echo "Sidebar tidak ditemukan.";
                }
                ?>
            </aside>

            <main class="lg:col-span-3 space-y-16">
                
                <section id="visi-misi" class="scroll-mt-28">
                    <?php renderDoktorTitle("Visi, Misi & Tujuan"); ?>
                    
                    <div class="space-y-6">
                        <div class="bg-[#002b54] text-white rounded-xl p-8 shadow-md relative overflow-hidden">
                            <div class="absolute top-0 right-0 p-4 opacity-10">
                                <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L1 7l11 5 9-4.09V17h2V7L12 2zm1 14.55C10.61 16.1 8.89 15.65 7.5 15.65c-3.15 0-5.5 2.05-5.5 5.35C2 22.95 4.5 24 7.5 24c3.55 0 6.5-1.9 6.5-5.1 0-2.3-1.6-3.8-3.45-4.55l1.45-2.2c2.75 1.55 4.5 4.05 4.5 6.75h2c0-3.5-2.25-6.55-5.5-8.35l-1 1.6z"/></svg>
                            </div>
                            <h3 class="text-xl font-bold text-yellow-400 mb-2 uppercase tracking-wider">Visi 2033</h3>
                            <p class="text-lg leading-relaxed font-light italic">"<?= $data['visi'] ?>"</p>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-xl font-bold text-[#002b54] mb-4 flex items-center gap-2">
                                <span class="w-2 h-6 bg-[#002b54] rounded"></span> Misi
                            </h3>
                            <ul class="space-y-3">
                                <?php foreach($data['misi'] as $item): ?>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <svg class="w-5 h-5 text-yellow-500 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-justify"><?= $item ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-xl font-bold text-[#002b54] mb-4 flex items-center gap-2">
                                <span class="w-2 h-6 bg-[#002b54] rounded"></span> Tujuan & Sasaran
                            </h3>
                            <ul class="space-y-3">
                                <?php foreach($data['tujuan'] as $item): ?>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <svg class="w-5 h-5 text-blue-500 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                                    <span class="text-justify"><?= $item ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="strategi" class="scroll-mt-28">
                    <?php renderDoktorTitle("Strategi"); ?>
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <?php foreach($data['strategi'] as $index => $item): ?>
                            <div class="flex items-start gap-3 p-3 bg-gray-50 rounded hover:bg-yellow-50 transition">
                                <span class="shrink-0 w-6 h-6 bg-[#002b54] text-white rounded-full flex items-center justify-center text-xs font-bold mt-0.5"><?= $index + 1 ?></span>
                                <span class="text-gray-700 text-sm font-medium"><?= $item ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </section>

                <section id="syarat" class="scroll-mt-28">
                    <?php renderDoktorTitle("Syarat & Instrumen Seleksi"); ?>
                    
                    <div class="grid grid-cols-1 gap-6">
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                            <div class="bg-blue-50 px-6 py-4 border-b border-blue-100">
                                <h3 class="font-bold text-[#002b54]">Syarat Pendaftaran</h3>
                            </div>
                            <div class="p-6">
                                <ul class="list-disc list-outside ml-5 space-y-2 text-gray-700">
                                    <?php foreach($data['syarat'] as $syarat): ?>
                                        <li class="pl-2"><?= $syarat ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                            <div class="bg-yellow-50 px-6 py-4 border-b border-yellow-100">
                                <h3 class="font-bold text-[#002b54]">Instrumen Seleksi</h3>
                            </div>
                            <div class="p-6">
                                <ul class="space-y-4">
                                    <?php foreach($data['instrumen'] as $idx => $inst): ?>
                                    <li class="flex gap-3">
                                        <div class="shrink-0 w-8 h-8 bg-yellow-100 text-yellow-700 rounded-lg flex items-center justify-center font-bold"><?= $idx + 1 ?></div>
                                        <p class="text-gray-700 text-sm mt-1"><?= $inst ?></p>
                                    </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="alur" class="scroll-mt-28">
                    <?php renderDoktorTitle("Alur Pendaftaran"); ?>
                    <div class="relative border-l-4 border-gray-200 ml-4 space-y-8">
                        <?php foreach($data['alur'] as $index => $alur): ?>
                        <div class="relative pl-8">
                            <div class="absolute -left-3 top-0 w-6 h-6 bg-[#002b54] rounded-full border-4 border-white shadow"></div>
                            <h4 class="font-bold text-gray-800 mb-1">Langkah <?= $index + 1 ?></h4>
                            <p class="text-gray-600 bg-white p-4 rounded-lg shadow-sm border border-gray-100">
                                <?= $alur ?>
                            </p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section id="dosen" class="scroll-mt-28">
                    <?php renderDoktorTitle("Dosen Pengajar"); ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php foreach($data['dosen'] as $idx => $dosen): ?>
                        <div class="flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition group">
                            <div class="w-10 h-10 rounded-full bg-blue-50 text-[#002b54] flex items-center justify-center font-bold text-sm border border-blue-100 group-hover:bg-[#002b54] group-hover:text-white transition">
                                <?= $idx + 1 ?>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm md:text-base group-hover:text-blue-700 transition"><?= $dosen ?></h4>
                                <span class="text-xs text-gray-500">Dosen Tetap</span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section id="struktur" class="scroll-mt-28">
                    <?php renderDoktorTitle("Struktur Organisasi"); ?>
                    <div class="flex flex-col md:flex-row justify-center gap-6">
                        <?php foreach($data['pimpinan'] as $p): 
                            $c = $p['color']; // blue or yellow
                        ?>
                        <div class="bg-white rounded-xl shadow-lg border-t-4 <?= ($c == 'yellow' ? 'border-yellow-400' : 'border-[#002b54]') ?> overflow-hidden w-full max-w-sm text-center">
                            <div class="p-6 bg-linear-to-b <?= ($c == 'yellow' ? 'from-yellow-50' : 'from-gray-50') ?> to-white">
                                <div class="w-24 h-24 mx-auto rounded-full bg-gray-200 mb-4 flex items-center justify-center text-3xl"><?= $p['icon'] ?></div>
                                <h3 class="text-lg font-bold text-[#002b54] mb-1"><?= $p['nama'] ?></h3>
                                <p class="text-sm font-medium <?= ($c == 'yellow' ? 'text-yellow-600' : 'text-gray-500') ?> uppercase tracking-wide"><?= $p['jabatan'] ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>

            </main>
        </div>
    </div>
</div>