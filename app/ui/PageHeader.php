<?php
$page_title = $page_title ?? 'Judul Halaman';
$page_bg    = $page_bg ?? '/unsoed_profile/public/assets/img/sejarah.jpg'; 
?>

<div class="relative w-full py-32 md:py-40 bg-cover bg-center bg-no-repeat bg-fixed"
     style="background-image: url('<?= $page_bg ?>'); background-color: #002b54;">
    
    <div class="absolute inset-0 bg-[#002b54]" style="opacity: 0.80; mix-blend-mode: multiply;"></div>
    
    <div class="container mx-auto px-4 relative z-10 text-center">
        <h1 class="text-4xl md:text-6xl font-bold text-white tracking-wide drop-shadow-lg">
            <?= $page_title ?>
        </h1>
        <div class="h-1.5 w-24 bg-yellow-400 mx-auto rounded-full mt-4"></div>
    </div>
</div>