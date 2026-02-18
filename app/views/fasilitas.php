<?php
$page_title = 'Fasilitas';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 

require __DIR__ . '/../ui/page_header.php'; 
require __DIR__ . '/../data/fasilitas_data.php';
?>

<div class="font-sans text-gray-800 w-full min-h-screen">

    <section class="py-20 bg-gray-50">
        <div class="container mx-auto px-4 md:px-8 max-w-7xl">
            
            <div class="mb-16 text-center" data-aos="zoom-in">
                <span class="text-red-700 font-bold tracking-[0.3em] text-xs uppercase mb-3 block">Sarana & Prasarana</span>
                <h2 class="text-3xl md:text-5xl font-extrabold text-red-950 tracking-tight">Jelajahi Fasilitas Kami</h2>
                <div class="w-24 h-1.5 bg-yellow-500 mx-auto mt-6 rounded-full"
                     data-aos="fade-right"
                     data-aos-delay="200">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
                
                <?php foreach ($fasilitas as $item): ?>
                    <div class="transform hover:-translate-y-2 transition-all duration-300">
                        <?php include __DIR__ . '/../components/fasilitas_card.php'; ?>
                    </div>
                <?php endforeach; ?>

            </div>

        </div>
    </section>

</div>