<?php 
$vm_data = require __DIR__ . '/../data/visi_misi_data.php';

// Mengambil string visi dari dalam array agar tidak error conversion
$visi_text = isset($vm_data['visi']['content']) ? $vm_data['visi']['content'] : '';

$page_title = 'Visi & Misi';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php'; 
?>

<div class="bg-white min-h-screen font-sans text-slate-700 py-16">
    <div class="container mx-auto px-6 max-w-6xl">

        <div class="mb-20 ">
            <div class="relative p-0.5 bg-linear-to-tr from-red-950 via-red-800 to-yellow-600 rounded-[2.5rem] shadow-2xl" data-aos="zoom-in">
                <div class="bg-red-950 rounded-[2.4rem] p-10 md:p-16 text-center overflow-hidden relative">
                    <div class="absolute -top-20 -right-20 w-64 h-64 bg-red-500/10 rounded-full blur-[80px]"></div>
                    <div class="relative z-10">
                        <span class="inline-block px-4 py-1 rounded-full bg-yellow-500/10 border border-yellow-500/20 text-yellow-500 text-[10px] font-bold uppercase tracking-[0.4em] mb-8">
                            Visi Utama
                        </span>
                        <h2 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white leading-relaxed max-w-4xl mx-auto italic">
                            <?= $visi_text ?>
                        </h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            <div class="lg:col-span-6 space-y-8" data-aos="fade-up">
                <div class="flex items-center gap-4 border-b border-slate-100 pb-4">
                    <div class="w-10 h-10 rounded-xl bg-red-950 flex items-center justify-center text-yellow-500 shadow-md">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" /></svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-red-950 uppercase tracking-tight">Misi Kami</h3>
                </div>
                
                <div class="space-y-4">
                    <?php foreach($vm_data['misi'] as $index => $misi): ?>
                    <div class="group flex gap-5 p-5 rounded-2xl bg-slate-50 border border-slate-100 hover:bg-white hover:shadow-md transition-all duration-300" data-aos="fade-up">
                        <span class="shrink-0 w-8 h-8 rounded-lg bg-red-950 text-white flex items-center justify-center font-bold text-xs">
                            <?= str_pad($index + 1, 2, '0', STR_PAD_LEFT) ?>
                        </span>
                        <p class="text-sm md:text-base leading-relaxed text-slate-600 group-hover:text-slate-900 transition-colors">
                            <?= $misi ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="lg:col-span-6 space-y-12" >
                
                <div data-aos="fade-up">
                    <h3 class="text-xl font-bold text-red-950 mb-6 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-yellow-500 rounded-full"></span>
                        Tujuan Pendidikan
                    </h3>
                    <div class="grid grid-cols-1 gap-3" >
                        <?php foreach($vm_data['tujuan'] as $tujuan): ?>
                        <div class="flex items-start gap-3 bg-white p-4 rounded-xl shadow-sm border border-slate-100 hover:border-red-200 transition-colors group" data-aos="fade-up">
                            <div class="mt-1 bg-red-950 rounded p-0.5 shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-3.5 h-3.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-sm font-semibold text-slate-700 leading-snug"><?= $tujuan ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div data-aos="fade-up">
                    <h3 class="text-xl font-bold text-red-950 mb-6 flex items-center gap-3">
                        <span class="w-1.5 h-6 bg-red-950 rounded-full"></span>
                        Sasaran & Target Strategis
                    </h3>
                    <div class="grid grid-cols-1 gap-3">
                        <?php foreach($vm_data['sasaran'] as $sasaran): ?>
                        <div class="flex items-start gap-3 bg-white p-4 rounded-xl shadow-sm border border-slate-100 hover:border-red-200 transition-colors group" data-aos="fade-up">
                            <div class="mt-1 bg-red-950 rounded p-0.5 shrink-0 group-hover:scale-110 transition-transform">
                                <svg class="w-3.5 h-3.5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" /></svg>
                            </div>
                            <span class="text-sm font-semibold text-slate-700 leading-snug"><?= $sasaran ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>