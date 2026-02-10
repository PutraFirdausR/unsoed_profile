<?php
// FILE: app/views/berita.php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

// Setup Header Halaman
$page_title = 'Arsip Berita';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; // Pastikan gambar header ada
require __DIR__ . '/../ui/PageHeader.php'; 

try {
    // QUERY SEMUA BERITA (TANPA LIMIT)
    $stmt = $pdo->prepare("SELECT id, title, date, image, content FROM news ORDER BY date DESC");
    $stmt->execute();
    $all_news = $stmt->fetchAll();
} catch (PDOException $e) {
    $all_news = [];
}
?>

<div class="bg-slate-50 min-h-screen py-16">
    <div class="container mx-auto px-4 md:px-8">
        
        <div class="mb-8">
            <a href="/unsoed_profile/public/" class="inline-flex items-center text-blue-600 hover:text-[#002b54] font-bold transition-colors">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Beranda
            </a>
        </div>

        <?php if(empty($all_news)): ?>
            <div class="text-center py-20 bg-white rounded-2xl shadow-sm">
                <h3 class="text-xl font-bold text-gray-400">Belum ada arsip berita.</h3>
            </div>
        <?php else: ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach($all_news as $item): 
                    $folder_gambar = '/unsoed_profile/public/assets/img/';
                    $nama_file = $item['image'];
                    $img_src = empty($nama_file) ? 'https://via.placeholder.com/600x400?text=News' : $folder_gambar . $nama_file;
                    
                    // Cuplikan isi berita (opsional, jika ada kolom content)
                    $excerpt = isset($item['content']) ? substr(strip_tags($item['content']), 0, 100) . '...' : '';
                ?>
                
                <a href="/unsoed_profile/public/detail_berita?id=<?= $item['id'] ?>" class="flex flex-col h-full bg-white rounded-2xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 group hover:-translate-y-1">
                    
                    <div class="relative h-48 overflow-hidden">
                        <img src="<?= e($img_src) ?>" alt="<?= e($item['title']) ?>" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700">
                        <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors"></div>
                    </div>
                    
                    <div class="p-6 flex flex-col grow
                        <div class="flex items-center gap-2 mb-3">
                            <span class="bg-yellow-100 text-yellow-800 text-xs font-bold px-2 py-1 rounded">
                                Berita
                            </span>
                            <span class="text-xs text-gray-500 font-medium">
                                <?= function_exists('tgl_indo') ? tgl_indo($item['date']) : date('d M Y', strtotime($item['date'])) ?>
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-gray-800 mb-2 leading-snug group-hover:text-[#002b54] transition-colors">
                            <?= e($item['title']) ?>
                        </h3>
                        
                        <?php if($excerpt): ?>
                        <p class="text-sm text-gray-500 line-clamp-3 mb-4">
                            <?= $excerpt ?>
                        </p>
                        <?php endif; ?>
                        
                        <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
                            <span class="text-sm font-bold text-[#002b54] group-hover:underline">Baca Selengkapnya</span>
                            <svg class="w-5 h-5 text-yellow-500 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>

        <?php endif; ?>
    </div>
</div>