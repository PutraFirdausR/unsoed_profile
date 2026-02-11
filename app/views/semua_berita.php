<?php
$items_per_page = 9; 
$page_num = isset($_GET['halaman']) ? (int)$_GET['halaman'] : 1;
$offset = ($page_num - 1) * $items_per_page;

try {
    $stmt_count = $pdo->query("SELECT COUNT(*) FROM news");
    $total_items = $stmt_count->fetchColumn();
    $total_pages = ceil($total_items / $items_per_page);

    $stmt = $pdo->prepare("SELECT id, title, date, image FROM news ORDER BY date DESC LIMIT :limit OFFSET :offset");
    $stmt->bindValue(':limit', $items_per_page, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stmt->execute();
    $all_news = $stmt->fetchAll();

} catch (PDOException $e) {
    error_log("Gagal load semua berita: " . $e->getMessage());
    $all_news = [];
}

$page_title = 'Arsip Berita & Kabar';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php'; 
?>

<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4 md:px-8">
        
        <div class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-[#002b54] mb-2">Arsip Berita & Kabar</h1>
            <div class="h-1 w-20 bg-yellow-500 mx-auto"></div>
            <p class="text-gray-600 mt-4">Menampilkan seluruh informasi terkini seputar fakultas.</p>
        </div>

        <?php if(empty($all_news)): ?>
            <div class="text-center py-16">
                <p class="text-gray-400 text-lg italic">Belum ada berita yang tersedia.</p>
                <a href="/unsoed_profile/public/" class="mt-4 inline-block text-blue-900 font-semibold hover:underline">&larr; Kembali ke Beranda</a>
            </div>
        <?php else: ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach($all_news as $item): 
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

            <?php if ($total_pages > 1): ?>
            <div class="mt-12 flex justify-center items-center gap-2">
                <?php if ($page_num > 1): ?>
                    <a href="?halaman=<?= $page_num - 1 ?>" class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100 text-gray-700 transition">Prev</a>
                <?php endif; ?>

                <?php for($i = 1; $i <= $total_pages; $i++): ?>
                    <a href="?halaman=<?= $i ?>" class="px-4 py-2 border rounded transition <?= $i == $page_num ? 'bg-[#002b54]  border-[#002b54]' : 'bg-white border-gray-300 hover:bg-gray-100' ?>">
                        <?= $i ?>
                    </a>
                <?php endfor; ?>

                <?php if ($page_num < $total_pages): ?>
                    <a href="?halaman=<?= $page_num + 1 ?>" class="px-4 py-2 bg-white border border-gray-300 rounded hover:bg-gray-100 text-gray-700 transition">Next</a>
                <?php endif; ?>
            </div>
            <?php endif; ?>

        <?php endif; ?>
    </div>
</section>