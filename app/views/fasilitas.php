<?php

$page_title = 'Fasilitas';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 

require __DIR__ . '/../ui/page_header.php'; 
require __DIR__ . '/../data/fasilitas_data.php';
?>

<div class="font-sans text-gray-800 w-full min-h-screen">

    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8 max-w-7xl">
            
            <div class="mb-12 text-center" data-aos="zoom-in">
                <span class="text-yellow-600 font-bold tracking-widest text-sm uppercase mb-2 block">Sarana & Prasarana</span>
                <h2 class="text-3xl md:text-4xl font-bold text-[#002b54]">Jelajahi Fasilitas Kami</h2>
                <div class="w-24 h-1.5 bg-yellow-500 mx-auto mt-4 rounded-full"
                     data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="100"
                     data-aos-offset="0">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" >
                
                <?php foreach ($fasilitas as $item): ?>
                    
                    <?php include __DIR__ . '/../components/fasilitas_card.php'; ?>

                <?php endforeach; ?>

            </div>

        </div>
    </section>

</div>