<?php 
$about_data = require __DIR__ . '/../data/tentangkami_data.php';

$page_title = 'Tentang Kami';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php'; 
?>

<section class="py-20 bg-white font-sans text-gray-800">
    <div class="container mx-auto px-6 md:px-12 max-w-6xl">
        
        <div class="text-center mb-20 relative animate-fade-in-up" data-aos="zoom-in">
            <span class="text-red-800 font-bold tracking-[0.3em] uppercase text-xs block mb-4">Sejarah & Profil</span>
            <h2 class="text-3xl md:text-5xl font-black text-red-950 mb-6 leading-tight">
                Membangun Integritas Hukum <br> Sejak <span class="text-yellow-600">1963</span>
            </h2>
            <div class="w-24 h-1.5 bg-yellow-500 mx-auto rounded-full shadow-sm" 
                 data-aos="fade-right"
                 data-aos-delay="200">
            </div>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 mb-24">
            <div class="hidden lg:block lg:col-span-1 relative animate-fade-in-up delay-100">
                <div class="absolute left-1/2 top-0 bottom-0 w-px bg-linear-to-b from-transparent via-gray-300 to-transparent -translate-x-1/2"></div>
                <div class="sticky top-40 flex flex-col gap-60 items-center">
                    <div class="w-5 h-5 rounded-full bg-red-950 ring-8 ring-red-50" data-aos="fade-up"></div>
                    <div class="w-5 h-5 rounded-full bg-yellow-500 ring-8 ring-yellow-50" data-aos="fade-up"></div>
                    <div class="w-5 h-5 rounded-full bg-red-900 ring-8 ring-red-50" data-aos="fade-up"></div>
                </div>
            </div>

            <div class="col-span-1 lg:col-span-11 space-y-10 text-lg leading-relaxed text-justify text-gray-700 " 
                 data-aos="fade-up" data-aos-duration="1000">
                
                <p class="first-letter:text-6xl first-letter:font-black first-letter:text-red-950 first-letter:float-left first-letter:mr-4 first-letter:leading-none" data-aos="fade-up">
                    <?= $about_data['sejarah']['intro'] ?>
                </p>

                <div class="pl-8 border-l-4 border-red-950 bg-red-50/50 py-6 pr-6 rounded-r-2xl shadow-sm transition-transform hover:scale-[1.01]" data-aos="fade-right" >
                    <p class="font-semibold text-red-950 italic leading-loose">
                        "<?= $about_data['sejarah']['quote'] ?>"
                    </p>
                </div>

                <?php foreach($about_data['sejarah']['paragraphs'] as $paragraph): ?>
                    <p class="hover:text-black transition-colors" data-aos="fade-up"><?= $paragraph ?></p>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="flex items-center justify-center gap-6 mb-24 opacity-60 animate-fade-in-up delay-300">
            <div class="h-px bg-linear-to-r from-transparent via-gray-400 to-transparent w-full max-w-xs" data-aos="fade-right"></div>
            <span class="text-red-950 text-xs font-bold tracking-[0.4em] uppercase whitespace-nowrap" data-aos="zoom-in">Global Perspective</span>
            <div class="h-px bg-linear-to-r from-transparent via-gray-400 to-transparent w-full max-w-xs" data-aos="fade-left"></div>
        </div>

        <div class="relative bg-red-950 rounded-[3rem] p-10 md:p-20 text-white overflow-hidden shadow-[0_20px_50px_rgba(69,10,10,0.3)] ">
            <div class="absolute top-0 right-0 w-96 h-96 bg-red-800 opacity-20 rounded-full blur-[100px] -translate-y-1/2 translate-x-1/2"></div>
            <div class="absolute bottom-0 left-0 w-80 h-80 bg-yellow-600 opacity-10 rounded-full blur-[80px] translate-y-1/2 -translate-x-1/2"></div>
            
            <div class="relative z-10" >
                <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-12 gap-6 border-b border-white/10 pb-8" data-aos="fade-up">
                    <h3 class="text-3xl md:text-4xl font-extrabold flex items-center gap-4 italic tracking-tight" data-aos="fade-up">
                        <span class="w-3 h-12 bg-yellow-500 rounded-full shadow-[0_0_15px_rgba(234,179,8,0.5)]"></span>
                        International Overview
                    </h3>
                    <span class="bg-red-900/50 backdrop-blur-md px-6 py-2 rounded-full text-xs font-black border border-white/20 tracking-[0.2em] uppercase" data-aos="fade-up">
                        English Section
                    </span>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-20 text-lg leading-relaxed text-red-50/90 font-light text-justify">
                    <div class="space-y-8" data-aos="fade-up">
                        <?php foreach($about_data['international']['column_1'] as $p): ?>
                            <p class="relative group transition-all duration-300 hover:text-white">
                                <?= $p ?>
                            </p>
                        <?php endforeach; ?>
                    </div>
                    <div class="space-y-8" data-aos="fade-up">
                         <?php foreach($about_data['international']['column_2'] as $p): ?>
                            <p class="relative group transition-all duration-300 hover:text-white">
                                <?= $p ?>
                            </p>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>