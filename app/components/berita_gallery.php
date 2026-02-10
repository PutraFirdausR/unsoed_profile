<?php
// FILE: app/components/berita_section.php (atau nama file komponen Anda)

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

try {
    // TAMPILKAN HANYA 3 BERITA TERBARU DI HALAMAN DEPAN
    $stmt = $pdo->prepare("SELECT id, title, date, image FROM news ORDER BY date DESC LIMIT 3");
    $stmt->execute();
    $gallery_news = $stmt->fetchAll();
} catch (PDOException $e) {
    error_log("Gagal load gallery: " . $e->getMessage());
    $gallery_news = [];
}
?>

<section class="py-12 bg-white">
    <div class="container mx-auto px-4 md:px-8">
        
        <?php 
            // Judul Section
            if(file_exists(__DIR__ . '/../ui/SectionTitle.php')) {
                $title = "Berita & Kabar Fakultas";
                include __DIR__ . '/../ui/SectionTitle.php';
            } else {
                echo '<h2 class="text-3xl font-bold text-[#002b54] mb-8 border-l-4 border-yellow-500 pl-4">Berita & Kabar Fakultas</h2>';
            }
        ?>

        <?php if(empty($gallery_news)): ?>
            <p class="text-center text-gray-400 mt-8 italic">Belum ada berita yang diunggah.</p>
        <?php else: ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mt-8">
                
                <?php foreach($gallery_news as $item): 
                    $folder_gambar = '/unsoed_profile/public/assets/img/';
                    $nama_file = $item['image'];
                    $img_src = empty($nama_file) ? 'https://via.placeholder.com/600x400?text=News' : $folder_gambar . $nama_file;
                ?>

                <a href="/unsoed_profile/public/detail_berita?id=<?= $item['id'] ?>" class="block group bg-white rounded-xl overflow-hidden shadow-md hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:-translate-y-1 cursor-pointer">
                    
                    <div class="relative overflow-hidden aspect-video">
                        <img src="<?= e($img_src) ?>" 
                             alt="<?= e($item['title']) ?>" 
                             class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        
                        <div class="absolute top-4 left-4 bg-yellow-500 text-[#002b54] text-xs font-bold px-3 py-1 rounded shadow">
                            <?= function_exists('tgl_indo') ? tgl_indo($item['date']) : date('d M Y', strtotime($item['date'])) ?>
                        </div>
                    </div>

                    <div class="p-6">
                        <h3 class="text-xl font-bold text-gray-800 mb-3 leading-snug group-hover:text-[#002b54] transition-colors line-clamp-2">
                            <?= e($item['title']) ?>
                        </h3>
                        
                        <div class="flex items-center justify-between mt-4 pt-4 border-t border-gray-100">
                            <span class="text-xs font-semibold text-gray-500 flex items-center gap-1">
                                <svg class="w-4 h-4 text-blue-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Baca Selengkapnya
                            </span>
                            
                            <div class="text-gray-300 group-hover:text-yellow-600 transition-colors">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                            </div>
                        </div>
                    </div>

                </a>
                <?php endforeach; ?>

            </div>

            <div class="mt-12 text-center">
                <a href="/unsoed_profile/public/berita" class="inline-flex items-center gap-2 px-8 py-3 bg-[#002b54] text-white font-bold rounded-full hover:text-white transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    Lihat Semua Berita
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                </a>
            </div>

        <?php endif; ?>

    </div>
</section>