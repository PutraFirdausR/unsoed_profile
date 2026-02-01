<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

try {
    $stmt = $pdo->prepare("SELECT id, title, date, image FROM news ORDER BY date DESC LIMIT 3");
    $stmt->execute();
    $gallery_news = $stmt->fetchAll();
} catch (PDOException $e) {
    error_log("Gagal load gallery: " . $e->getMessage());
    $gallery_news = [];
}
?>

<section class="py-12 ">
    <div class="container mx-auto px-4 md:px-8">
        
        <?php 
            $title = "Berita & Kabar Fakultas";
            include __DIR__ . '/../ui/SectionTitle.php'; 
        ?>

        <?php if(empty($gallery_news)): ?>
            <p class="text-center text-gray-400 mt-8">Belum ada berita yang diunggah.</p>
        <?php else: ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                
                <?php foreach($gallery_news as $item): 
                    $folder_gambar = '/unsoed_profile/public/assets/img/';
                    $nama_file = $item['image'];
                    $img_src = empty($nama_file) ? 'https://via.placeholder.com/600x400?text=News' : $folder_gambar . $nama_file;
                ?>

                <a href="#" class="block group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1 cursor-pointer">
                    
                    <div class="relative overflow-hidden aspect-video">
                        <img src="<?= e($img_src) ?>" 
                             alt="<?= e($item['title']) ?>" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        
                        <div class="absolute top-4 left-4 bg-yellow-500 text-[#002b54] text-xs font-bold px-3 py-1 rounded shadow">
                            <?= tgl_indo($item['date']) ?>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 leading-snug group-hover:text-[#002b54] transition-colors line-clamp-2">
                            <?= e($item['title']) ?>
                        </h3>
                        
                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                            <span class="text-xs font-semibold text-gray-500 flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <?= tgl_indo($item['date']) ?>
                            </span>
                            
                            <div class="text-yellow-600 group-hover:text-yellow-700 bg-yellow-50 rounded-lg p-2 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </div>
                        </div>
                    </div>

                </a>
                <?php endforeach; ?>

            </div>

        <?php endif; ?>

        <div class="text-center mt-12">
            <a href="/berita" class="inline-block px-8 py-3 border-2 border-[#002b54] text-[#002b54] font-bold rounded-full hover:bg-[#002b54] hover:text-white transition-all duration-300">
                Lihat Semua Berita
            </a>
        </div>

    </div>
</section>