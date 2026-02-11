<?php
require __DIR__ . '/../data/stats_data.php';

$asset_path = '/unsoed_profile/public/assets';
?>

<section class="py-12">
    <div class="container mx-auto px-4 md:px-8">
        
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#002b54] mb-2">FH UNSOED Dalam Angka</h2>
            <p class="text-gray-500 text-sm font-medium">Data Statistik Tahun Akademik 2024/2025</p>
            <div class="h-1 w-20 bg-yellow-500 mt-2 rounded-full mx-auto"></div>
        </div>

        <div class="relative bg-[#002b54] rounded-3xl overflow-hidden shadow-2xl transform hover:scale-[1.01] transition-transform duration-500">
            
            <div class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 bg-yellow-500 rounded-full opacity-20 blur-2xl"></div>
            <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-40 h-40 bg-blue-400 rounded-full opacity-20 blur-2xl"></div>

            <div class="relative z-10 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 divide-x divide-white/10 text-yellow-400 text-center py-12">
                <?php foreach ($stats as $stat): ?>
                    
                    <?php include __DIR__ . '/../components/stats_card.php'; ?>
                    
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>

<script src="<?= $asset_path ?>/js/stats.js"></script>