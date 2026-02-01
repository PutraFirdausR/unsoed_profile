<?php
// app/components/akademik_section.php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

try {
    // 1. Ambil Data Informasi Akademik (Limit 6 agar pas 3 kolom x 2 baris)
    $stmt = $pdo->query("SELECT * FROM academic_infos ORDER BY date DESC LIMIT 6");
    $infos = $stmt->fetchAll();

    // 2. Data Jadwal (Query tetap ada, tapi jika tidak ditampilkan di view, tidak masalah)
    $stmt = $pdo->query("SELECT * FROM lecture_schedules ORDER BY date DESC LIMIT 5"); 
    $schedules = $stmt->fetchAll();
} catch (PDOException $e) {
    $infos = []; 
    $schedules = [];
}
?>

<section class="py-12 font-sans"> 
    <div class="container mx-auto px-4 md:px-8">
        
        <div class="flex flex-col lg:flex-row gap-10 items-start">

            <div class="w-full">
                
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-1 h-10 bg-[#002b54]"></div> 
                    <div>
                        <h2 class="text-2xl font-bold text-[#002b54] uppercase tracking-wide">
                            Informasi Akademik
                        </h2>
                        <p class="text-sm text-gray-500">Berita dan pengumuman terbaru untuk mahasiswa</p>
                        <div class="h-1 w-20 bg-yellow-500 mt-2 rounded-full <?= (isset($align) && $align === 'start') ? 'mx-auto' : '' ?>"></div>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <?php if(empty($infos)): ?>
                        <div class="col-span-1 md:col-span-2 lg:col-span-3 p-8 bg-white border border-dashed border-gray-300 rounded-lg text-gray-400 text-center">
                            Belum ada informasi akademik.
                        </div>
                    <?php else: ?>
                        <?php foreach($infos as $info): ?>
                        <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 hover:shadow-lg hover:-translate-y-1 transition-all duration-300 flex flex-col h-full">
                            
                            <h3 class="text-lg font-bold text-gray-800 leading-snug mb-3 line-clamp-3">
                                <a href="<?= $info['link'] ?>" class="hover:text-[#002b54] transition-colors">
                                    <?= e($info['title']) ?>
                                </a>
                            </h3>
                            
                            <div class="mt-auto">
                                <div class="w-full h-px bg-gray-100 my-3"></div>
                                
                                <div class="flex justify-between items-center">
                                    <div class="text-xs text-gray-400 font-medium flex flex-col">
                                        <span class="uppercase text-gray-300 tracking-wider mb-1">Posted by</span>
                                        <span class="text-gray-500"><?= e($info['author']) ?></span>
                                    </div>

                                    <a href="<?= $info['link'] ?>" class="group flex items-center gap-1 text-xs font-bold text-red-600 uppercase tracking-wider hover:bg-red-50 px-3 py-2 rounded transition-colors">
                                        Read More 
                                        <span class="transform group-hover:translate-x-1 transition-transform">»</span>
                                    </a>
                                </div>
                                <div class="mt-2 text-[10px] text-gray-300 text-right">
                                    <?= tgl_indo($info['date']) ?>
                                </div>
                            </div>

                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>

            </div>
            
            </div>
    </div>
</section>