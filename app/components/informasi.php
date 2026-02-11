<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

$activities = [];
$agendas = [];
$announcements = [];

try {
    $stmt = $pdo->prepare("SELECT id, title, date, location FROM activities ORDER BY date DESC LIMIT 4");
    $stmt->execute();
    $activities = $stmt->fetchAll();
    
    $stmt = $pdo->prepare("SELECT id, title, event_date FROM agendas ORDER BY event_date DESC LIMIT 4");
    $stmt->execute();
    $agendas = $stmt->fetchAll();

    $stmt = $pdo->prepare("SELECT id, title, date, content FROM announcements ORDER BY date DESC LIMIT 3");
    $stmt->execute();
    $announcements = $stmt->fetchAll();

} catch (PDOException $e) {
    error_log("Gagal memuat data informasi: " . $e->getMessage());
}
?>

<section class="py-12">
    <div class="container mx-auto px-4 md:px-8">        
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-0 shadow-xl rounded-xl overflow-hidden border border-gray-100">
            <div class="bg-white p-8 border-r border-gray-100 flex flex-col justify-between">
                <div>
                    
                    <h2 class="text-2xl font-bold mb-6 relative z-10 flex items-center gap-2">
                        <span class="w-1.5 h-8 bg-yellow-500 rounded-full block"></span>
                        Kegiatan Terbaru
                    </h2>

                    <?php if(empty($activities)): ?>
                        <p class="text-gray-500 italic text-base">Belum ada kegiatan terbaru.</p>
                    <?php else: ?>
                        <div class="space-y-5">
                            <?php foreach($activities as $item): 
                                $date = strtotime($item['date']);
                            ?>
                            <a href="detail_event?id=<?= $item['id'] ?>" class="block group">
                                <div class="flex gap-4 items-start p-3 -mx-2 rounded-lg hover:bg-blue-50 transition-all border-b border-gray-50 last:border-0">
                                    <div class="shrink-0 w-16 h-16 rounded-xl bg-gray-50 text-gray-600 flex flex-col items-center justify-center border border-gray-200 group-hover:bg-[#002b54] group-hover:text-white group-hover:border-[#002b54] transition-colors shadow-sm">
                                        <span class="text-xs font-bold uppercase tracking-wide"><?= date('M', $date) ?></span>
                                        <span class="text-2xl font-extrabold leading-none mt-0.5"><?= date('d', $date) ?></span>
                                    </div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 text-base leading-snug group-hover:text-[#002b54] transition-colors mb-1.5">
                                            <?= htmlspecialchars($item['title']) ?>
                                        </h4>
                                        <div class="text-sm text-gray-500 flex items-center gap-2 font-medium">
                                            <svg class="w-4 h-4 text-yellow-500 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                            <?= htmlspecialchars($item['location']) ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>                   
                </div>
            </div>

            <div class="bg-[#002b54] p-8 text-white relative overflow-hidden flex flex-col justify-between" 
                 style="background-image: url(&quot;data:image/svg+xml,%3Csvg width='40' height='40' viewBox='0 0 40 40' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Cpath d='M0 38.59l2.83-2.83 1.41 1.41L1.41 40H0v-1.41zM0 1.4l2.83 2.83 1.41-1.41L1.41 0H0v1.41zM38.59 40l-2.83-2.83 1.41-1.41L40 38.59V40h-1.41zM40 1.41l-2.83 2.83-1.41-1.41L38.59 0H40v1.41zM20 18.6l2.83-2.83 1.41 1.41L21.41 20l2.83 2.83-1.41 1.41L20 21.41l-2.83 2.83-1.41-1.41L18.59 20l-2.83-2.83 1.41-1.41L20 18.59z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E&quot;);">
                
                <div class="absolute top-0 right-0 -mt-4 -mr-4 w-32 h-32 bg-yellow-500 rounded-full opacity-10 blur-2xl"></div>
                <div class="absolute bottom-0 left-0 -mb-4 -ml-4 w-24 h-24 bg-blue-400 rounded-full opacity-10 blur-xl"></div>

                <div>
                    <h2 class="text-2xl font-bold mb-8 relative z-10 flex items-center gap-2">
                        <span class="w-1.5 h-8 bg-yellow-500 rounded-full block"></span>
                        Agenda Fakultas
                    </h2>

                    <?php if(empty($agendas)): ?>
                        <p class="text-blue-200 italic text-base">Tidak ada agenda mendatang.</p>
                    <?php else: ?>
                        <div class="space-y-6 relative z-10">
                            <?php foreach($agendas as $agenda): 
                                $time = strtotime($agenda['event_date']);
                            ?>
                            <a href="detail_agenda?id=<?= $agenda['id'] ?>" class="flex items-center gap-5 group cursor-pointer p-2 -mx-2 rounded-xl hover:bg-white/5 transition-all duration-300">
                                <div class="shrink-0 w-16 text-center rounded-xl overflow-hidden shadow-lg bg-white/10 backdrop-blur-sm border border-white/10 group-hover:bg-yellow-500 group-hover:border-yellow-500 transition-colors duration-300">
                                    <div class="text-xs font-bold py-1.5 bg-black/20 text-white/80 uppercase group-hover:text-black/60"><?= date('M', $time) ?></div>
                                    <div class="text-2xl font-bold py-1.5 text-white group-hover:text-black"><?= date('d', $time) ?></div>
                                </div>
                                <div class="grow flex items-center justify-between">
                                    <div class="pr-2">
                                        <h4 class="font-bold text-lg leading-snug group-hover:text-yellow-400 transition-colors"><?= htmlspecialchars($agenda['title']) ?></h4>
                                        <span class="text-sm text-blue-300 mt-1 block group-hover:text-blue-200 font-medium"><?= date('l, Y', $time) ?></span>
                                    </div>
                                    <div class="opacity-0 group-hover:opacity-100 transform -translate-x-2 text-yellow-400">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                                    </div>
                                </div>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="bg-white p-8 border-l border-gray-100 flex flex-col justify-between">
                <div>
                    <h2 class="text-2xl font-bold mb-8 relative z-10 flex items-center gap-2">
                        <span class="w-1.5 h-8 bg-yellow-500 rounded-full block"></span>
                        Pengumuman
                    </h2>

                    <?php if(empty($announcements)): ?>
                        <p class="text-gray-500 italic text-base">Belum ada pengumuman.</p>
                    <?php else: ?>
                        <div class="space-y-8">
                            <?php foreach($announcements as $announcement): 
                                $rawContent = isset($announcement['content']) ? strip_tags($announcement['content']) : '';
                                $excerpt = strlen($rawContent) > 80 ? substr($rawContent, 0, 80) . "..." : $rawContent;
                                if(empty($excerpt)) $excerpt = "Klik untuk melihat detail pengumuman selengkapnya.";
                            ?>
                            <div class="group relative pl-5 border-l-4 border-gray-100 hover:border-blue-500 transition-colors duration-300">
                                <div class="flex items-center gap-2 mb-1.5 text-sm font-bold text-gray-400 uppercase tracking-wide">
                                    <span class="text-red-500"><?= function_exists('tgl_indo') ? tgl_indo($announcement['date']) : date('d F Y', strtotime($announcement['date'])) ?></span>
                                </div>
                                <h4 class="font-bold text-gray-800 text-xl leading-tight group-hover:text-blue-700 transition-colors mb-3">
                                    <a href="detail_pengumuman?id=<?= $announcement['id'] ?>">
                                        <?= htmlspecialchars($announcement['title']) ?>
                                    </a>
                                </h4>
                                <p class="text-base text-gray-600 leading-relaxed line-clamp-2 mb-3"><?= $excerpt ?></p>
                                <a href="detail_pengumuman?id=<?= $announcement['id'] ?>" class="text-base font-bold text-blue-600 flex items-center gap-1 group-hover:gap-2 transition-all">
                                    Baca selengkapnya <span class="text-sm mt-0.5">&rarr;</span>
                                </a>
                            </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
</section>