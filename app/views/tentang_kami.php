<?php 
// Load Data
$about_data = require __DIR__ . '/../data/tentangkami_data.php';

$page_title = 'Tentang Kami';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php'; 
?>

<section class="py-20 bg-white font-sans text-gray-800">
    <div class="container mx-auto px-6 md:px-12 max-w-6xl">
        
        <div class="text-center mb-16 relative animate-fade-in-up">
            <span class="text-yellow-600 font-bold tracking-[0.2em] uppercase text-sm block mb-3">Sejarah & Profil</span>
            <h2 class="text-3xl md:text-5xl font-extrabold text-[#002b54] mb-6 leading-tight">
                Membangun Integritas Hukum <br> Sejak <span class="text-yellow-500">1963</span>
            </h2>
            <div class="w-24 h-1.5 bg-[#002b54] mx-auto rounded-full"></div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-20">
            <div class="hidden lg:block lg:col-span-1 relative animate-fade-in-up delay-100">
                <div class="absolute left-1/2 top-0 bottom-0 w-0.5 bg-gray-200 -translate-x-1/2"></div>
                <div class="sticky top-32 flex flex-col gap-20 items-center">
                    <div class="w-4 h-4 rounded-full bg-[#002b54] ring-4 ring-blue-50"></div>
                    <div class="w-4 h-4 rounded-full bg-yellow-500 ring-4 ring-yellow-50"></div>
                    <div class="w-4 h-4 rounded-full bg-gray-300"></div>
                </div>
            </div>

            <div class="col-span-1 lg:col-span-11 space-y-8 text-lg leading-loose text-justify text-gray-700 animate-fade-in-up delay-200">
                
                <p class="first-letter:text-5xl first-letter:font-bold first-letter:text-[#002b54] first-letter:float-left first-letter:mr-3 first-letter:leading-none">
                    <?= $about_data['sejarah']['intro'] ?>
                </p>

                <div class="pl-6 border-l-4 border-yellow-400 bg-yellow-50 py-4 pr-4 rounded-r-lg shadow-sm">
                    <p class="font-medium text-gray-800 italic">
                        <?= $about_data['sejarah']['quote'] ?>
                    </p>
                </div>

                <?php foreach($about_data['sejarah']['paragraphs'] as $paragraph): ?>
                    <p><?= $paragraph ?></p>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="flex items-center justify-center gap-4 mb-20 opacity-50 animate-fade-in-up delay-300">
            <div class="h-px bg-gray-300 w-full max-w-xs"></div>
            <span class="text-gray-400 text-sm tracking-widest uppercase">Global Perspective</span>
            <div class="h-px bg-gray-300 w-full max-w-xs"></div>
        </div>

        <div class="relative bg-[#002b54] rounded-[2.5rem] p-10 md:p-16 text-white overflow-hidden shadow-2xl animate-fade-in-up delay-400">
            <div class="absolute top-0 right-0 w-96 h-96 bg-white opacity-5 rounded-full blur-3xl -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-yellow-500 opacity-10 rounded-full blur-3xl translate-y-1/2 -translate-x-1/2"></div>
            
            <div class="relative z-10">
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-10 gap-4">
                    <h3 class="text-3xl font-bold flex items-center gap-3">
                        <span class="w-2 h-10 bg-yellow-500 rounded-full"></span>
                        International Overview
                    </h3>
                    <span class="bg-white/10 backdrop-blur-md px-4 py-1.5 rounded-full text-sm font-semibold border border-white/20 tracking-wide">
                        English Section
                    </span>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-16 text-lg leading-relaxed text-blue-50 font-light text-justify">
                    <div class="space-y-6">
                        <?php foreach($about_data['international']['column_1'] as $p): ?>
                            <p><?= $p ?></p>
                        <?php endforeach; ?>
                    </div>
                    <div class="space-y-6">
                         <?php foreach($about_data['international']['column_2'] as $p): ?>
                            <p><?= $p ?></p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>