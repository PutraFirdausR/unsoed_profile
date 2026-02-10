<?php
// FILE: app/views/struktur_organisasi.php

// 1. Load Helper & Data
require_once __DIR__ . '/../helpers.php'; // Asumsi ada helper
$org_data = require __DIR__ . '/../data/organisasi_data.php';

// 2. Setup Page
$page_title = 'Struktur Organisasi';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php'; 
?>

<div class="bg-gray-50 min-h-screen font-sans text-gray-800 overflow-x-hidden">
    
    <section class="relative py-20 md:py-32">
        <div class="container mx-auto px-4 md:px-8 max-w-7xl">

            <div class="text-center mb-20 md:mb-28 animate-fade-in-up">
                <span class="inline-block py-1.5 px-4 rounded-full bg-blue-100 text-[#002b54] text-sm font-bold tracking-widest uppercase mb-4">
                    Fakultas Hukum UNSOED
                </span>
                <h2 class="text-4xl md:text-5xl font-extrabold text-[#002b54] tracking-tight">Periode Berjalan</h2>
                <div class="w-24 h-1.5 bg-yellow-500 mx-auto mt-8 rounded-full"></div>
            </div>

            <div class="mb-32">
                <?php $title = 'Pimpinan Fakultas'; include __DIR__ . '/../components//../ui/organisasi_section.php'; ?>
                
                <div class="flex justify-center mb-16 animate-fade-in-up delay-200">
                    <div class="bg-white p-10 md:p-12 rounded-[2.5rem] shadow-2xl shadow-blue-900/10 border-t-8 border-yellow-500 w-full max-w-2xl text-center transform hover:-translate-y-3 transition-all duration-500 relative overflow-hidden group">
                        <div class="absolute top-0 right-0 w-40 h-40 bg-yellow-50 rounded-bl-full -mr-10 -mt-10 z-0 transition-transform duration-700 group-hover:scale-125 group-hover:rotate-12"></div>
                        <div class="relative z-10">
                            <div class="w-24 h-24 bg-[#002b54] text-yellow-400 rounded-2xl flex items-center justify-center text-4xl font-bold mx-auto mb-8 shadow-lg group-hover:rotate-3 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                            </div>
                            <span class="block text-sm font-bold text-yellow-600 uppercase tracking-[0.2em] mb-3"><?= $org_data['dekan']['jabatan'] ?></span>
                            <h4 class="text-2xl md:text-4xl font-extrabold text-gray-900 leading-tight"><?= $org_data['dekan']['nama'] ?></h4>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-10">
                    <?php foreach($org_data['wakil_dekan'] as $i => $wd): 
                        $delay = ($i + 3) * 100; ?>
                    <div class="bg-white p-8 rounded-3xl shadow-[0_10px_30px_rgba(0,0,0,0.05)] border-b-4 border-[#002b54] hover:shadow-[0_20px_40px_rgba(0,43,84,0.1)] hover:-translate-y-2 transition-all duration-300 group animate-fade-in-up" style="animation-delay: <?= $delay ?>ms">
                        <div class="flex items-center justify-between mb-8">
                            <div class="w-14 h-14 bg-blue-50 rounded-2xl flex items-center justify-center text-[#002b54] group-hover:bg-[#002b54] group-hover:text-white transition-colors duration-300 shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                            </div>
                            <span class="text-5xl font-black text-gray-100 select-none group-hover:text-blue-50/50 transition-colors duration-300"><?= $wd['kode'] ?></span>
                        </div>
                        <div class="space-y-2">
                            <span class="block text-xs font-bold text-blue-500 uppercase tracking-widest">Wakil Dekan <?= $wd['kode'] ?></span>
                            <h4 class="text-xl font-bold text-gray-900 leading-snug group-hover:text-[#002b54] transition-colors"><?= $wd['nama'] ?></h4>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 md:gap-12 mb-32">
                
                <div class="lg:col-span-8 animate-fade-in-up delay-300">
                    <div class="bg-white rounded-[2.5rem] p-10 md:p-12 shadow-xl border border-gray-100 h-full relative overflow-hidden">
                         <div class="absolute top-0 left-0 w-full h-2 bg-linear-to-r from-[#002b54] to-blue-500"></div>

                        <div class="flex items-center gap-5 mb-10">
                            <div class="p-4 bg-blue-100 rounded-2xl text-[#002b54] shadow-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                            </div>
                            <h3 class="text-3xl font-bold text-[#002b54]">Anggota Senat</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                            <div class="bg-[#002b54] text-white p-8 rounded-3xl relative overflow-hidden shadow-lg transform hover:scale-[1.02] transition-transform">
                                <div class="absolute top-0 right-0 w-24 h-24 bg-white opacity-10 rounded-bl-full -mr-5 -mt-5"></div>
                                <span class="block text-xs text-yellow-300 uppercase font-bold mb-3 tracking-wider">Ketua</span>
                                <span class="font-bold text-xl block leading-snug"><?= $org_data['senat']['ketua'] ?></span>
                            </div>
                            <div class="bg-white text-[#002b54] p-8 rounded-3xl border-2 border-blue-50 shadow-md transform hover:scale-[1.02] transition-transform">
                                <span class="block text-xs text-blue-400 uppercase font-bold mb-3 tracking-wider">Sekretaris</span>
                                <span class="font-bold text-xl block leading-snug"><?= $org_data['senat']['sekretaris'] ?></span>
                            </div>
                        </div>

                        <div>
                            <span class="block text-sm text-gray-400 uppercase font-bold mb-8 tracking-[0.2em] text-center md:text-left">Anggota Lainnya</span>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-y-5 gap-x-10">
                                <?php foreach($org_data['senat']['anggota'] as $anggota): ?>
                                <div class="flex items-center gap-4 p-4 rounded-2xl bg-gray-50 hover:bg-blue-50 transition-colors duration-300">
                                    <div class="w-3 h-3 bg-yellow-500 rounded-full ring-4 ring-yellow-100"></div>
                                    <span class="text-gray-700 font-semibold"><?= $anggota ?></span>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-4 animate-fade-in-up delay-500 py-5">
                    <div class="bg-linear-to-br from-[#002b54] to-blue-900 text-white p-10 md:p-12 rounded-[2.5rem] shadow-2xl relative overflow-hidden h-full flex flex-col justify-center">
                        <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 bg-blue-500 rounded-full opacity-20 blur-3xl animate-pulse"></div>
                        <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-64 h-64 bg-yellow-500 rounded-full opacity-10 blur-3xl"></div>

                        <div class="relative z-10">
                            <h3 class="text-2xl font-bold text-yellow-400 mb-12 border-b border-white/10 pb-6">Pimpinan Administrasi</h3>
                            <ul class="space-y-10">
                                <?php foreach($org_data['administrasi'] as $admin): ?>
                                <li class="group">
                                    <span class="block text-xs text-blue-200 uppercase tracking-widest mb-2 group-hover:text-yellow-300 transition-colors"><?= $admin['jabatan'] ?></span>
                                    <span class="font-bold text-2xl block tracking-tight"><?= $admin['nama'] ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mb-32 animate-fade-in-up delay-300 py-5">
                <?php $title = 'Bagian - Bagian'; include __DIR__ . '/../components//../ui/organisasi_section.php'; ?>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <?php foreach($org_data['bagian'] as $i => $bag): 
                        $delay = ($i * 100) + 300; ?>
                    <div class="bg-white rounded-2xl shadow-sm border border-gray-100 hover:border-yellow-400 hover:shadow-[0_15px_30px_rgba(0,0,0,0.1)] hover:-translate-y-2 transition-all duration-500 p-8 flex flex-col h-full group animate-fade-in-up" style="animation-delay: <?= $delay ?>ms">
                        <div class="mb-8">
                            <div class="w-12 h-1.5 bg-yellow-400 mb-4 group-hover:w-full group-hover:bg-yellow-400 transition-all duration-500 rounded-full"></div>
                            <h4 class="font-black text-[#002b54] text-xl leading-tight min-h-14 flex items-center"><?= $bag[0] ?></h4>
                        </div>
                        <div class="mt-auto space-y-4">
                            <div class="bg-blue-50/50 p-4 rounded-xl group-hover:bg-blue-100/50 transition-colors duration-300">
                                <span class="block text-blue-400 text-[10px] uppercase font-bold mb-1 tracking-wider">Ketua</span>
                                <span class="text-sm font-bold text-gray-800 line-clamp-2"><?= $bag[1] ?></span>
                            </div>
                            <div class="px-4 py-2">
                                <span class="block text-gray-400 text-[10px] uppercase font-bold mb-1 tracking-wider">Sekretaris</span>
                                <span class="text-sm font-medium text-gray-600 line-clamp-2"><?= $bag[2] ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="animate-fade-in-up delay-500 py-5">
                <?php $title = 'Pusat Kajian'; include __DIR__ . '/../components//../ui/organisasi_section.php'; ?>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <?php foreach($org_data['pusat_kajian'] as $i => $kj): 
                        $delay = ($i * 100) + 500; ?>
                    <div class="bg-white p-0 rounded-2xl shadow-sm border border-gray-200 overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-500 group animate-fade-in-up" style="animation-delay: <?= $delay ?>ms">
                        <div class="bg-[#002b54] p-6 border-b border-blue-900 group-hover:bg-blue-800 transition-colors">
                            <h4 class="font-bold text-white text-lg leading-snug min-h-14 flex items-center"><?= $kj[0] ?></h4>
                        </div>
                        <div class="p-6 grid grid-cols-2 gap-6 bg-gray-50 group-hover:bg-white transition-colors">
                            <div>
                                <span class="block text-gray-400 uppercase font-bold text-[10px] mb-2 tracking-wider">Ketua</span>
                                <span class="text-[#002b54] font-bold text-sm block"><?= $kj[1] ?: '-' ?></span>
                            </div>
                            <div class="border-l border-gray-200 pl-6">
                                <span class="block text-gray-400 uppercase font-bold text-[10px] mb-2 tracking-wider">Sekretaris</span>
                                <span class="text-[#002b54] font-bold text-sm block"><?= $kj[2] ?: '-' ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>
</div>