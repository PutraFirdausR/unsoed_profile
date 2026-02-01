<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

$news = [];
$agendas = [];
$announcements = [];

try {

    $stmt = $pdo->prepare("SELECT id, title, date FROM news ORDER BY date DESC LIMIT 3");
    $stmt->execute();
    $news = $stmt->fetchAll();
   
    $stmt = $pdo->prepare("SELECT id, title, event_date FROM agendas ORDER BY event_date DESC LIMIT 3");
    $stmt->execute();
    $agendas = $stmt->fetchAll();

    $stmt = $pdo->prepare("SELECT id, title, date FROM announcements ORDER BY date DESC LIMIT 3");
    $stmt->execute();
    $announcements = $stmt->fetchAll();

    foreach($announcements as &$a) { $a['is_announcement'] = true; }

} catch (PDOException $e) {
    error_log("Gagal memuat data informasi: " . $e->getMessage());
}
?>

<section class="py-12">
    <div class="container mx-auto px-4 md:px-8">
        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 shadow-xl rounded-xl overflow-hidden border border-gray-100">

            <?php 
                $title = "Berita Terkini";
                $data = $news;
                $linkBase = "/news?id=";
                $viewAllLink = "/berita";
                $viewAllText = "Lihat Semua Berita";
                $isLast = false; 
                
                include __DIR__ . '/../ui/InfoListColumn.php'; 
            ?>

            <div class="bg-[#002b54] p-8 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-yellow-500 rounded-full opacity-20 blur-xl"></div>

                <h2 class="text-2xl font-bold mb-6 relative z-10 flex items-center gap-2">
                    <span class="w-1 h-8 bg-yellow-500 rounded-full block"></span>
                    Agenda Fakultas
                </h2>

                <?php if(empty($agendas)): ?>
                    <p class="text-blue-200 italic text-sm">Tidak ada agenda mendatang.</p>
                <?php else: ?>
                    <div class="space-y-5 relative z-10">
                        <?php foreach($agendas as $agenda): 
                            $time = strtotime($agenda['event_date']);
                        ?>
                        <div class="flex items-start gap-4 group cursor-pointer">
                            <div class="shrink-0 w-14 text-center rounded-lg overflow-hidden shadow-lg bg-white/10 backdrop-blur-sm border border-white/10 group-hover:bg-yellow-500 transition-colors duration-300">
                                <div class="text-[10px] font-bold py-1 bg-black/20 text-white/80 uppercase">
                                    <?= date('M', $time) ?>
                                </div>
                                <div class="text-xl font-bold py-1 text-white">
                                    <?= date('d', $time) ?>
                                </div>
                            </div>
                            <div class="pt-1">
                                <a href="/agenda?id=<?= $agenda['id'] ?>" class="font-semibold text-base leading-tight hover:text-yellow-400 transition-colors block">
                                    <?= e($agenda['title']) ?>
                                </a>
                                <span class="text-xs text-blue-300 mt-1 block"><?= date('Y', $time) ?></span>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
                
                <a href="/agenda" class="inline-flex items-center mt-8 text-yellow-400 text-sm font-bold hover:text-white transition-colors relative z-10">
                    Kalender Akademik
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                </a>
            </div>

            <?php 
                $title = "Pengumuman";
                $data = $announcements; 
                $linkBase = "/pengumuman?id=";
                $viewAllLink = "/pengumuman";
                $viewAllText = "Arsip Pengumuman";
                $isLast = true; 
                
                include __DIR__ . '/../ui/InfoListColumn.php'; 
            ?>

        </div>
    </div>
</section>