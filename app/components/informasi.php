<?php
// FILE: app/components/informasi.php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

$schedules = [];
$agendas = [];
$announcements = [];

try {
    // 1. Ambil Jadwal Kuliah (Tetap 4 biar genap/rapi)
    $stmt = $pdo->prepare("SELECT id, course_name, day, time, room FROM lecture_schedules ORDER BY id DESC LIMIT 4");
    $stmt->execute();
    $schedules = $stmt->fetchAll();
    
    // 2. Ambil Agenda (SETTING JADI 3)
    $stmt = $pdo->prepare("SELECT id, title, event_date FROM agendas ORDER BY event_date DESC LIMIT 3");
    $stmt->execute();
    $agendas = $stmt->fetchAll();

    // 3. Ambil Pengumuman (SETTING JADI 3)
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
                        <span class="w-1 h-8 bg-yellow-500 rounded-full block"></span>
                        Jadwal Kuliah
                    </h2>

                    <?php if(empty($schedules)): ?>
                        <p class="text-gray-500 italic text-sm">Belum ada jadwal kuliah ditampilkan.</p>
                    <?php else: ?>
                        <div class="space-y-6">
                            <?php foreach($schedules as $item): ?>
                            <a href="/unsoed_profile/public/detail_jadwal?id=<?= $item['id'] ?>" class="group flex gap-4 items-start cursor-pointer hover:bg-gray-50 p-2 rounded-lg transition-colors">
                                <div class="shrink-0 w-12 h-12 rounded-lg bg-blue-50 text-blue-800 flex flex-col items-center justify-center text-xs font-bold border border-blue-100 group-hover:bg-yellow-500 group-hover:text-white transition-colors">
                                    <span class="uppercase"><?= substr($item['day'], 0, 3) ?></span> <i class="mt-1 fa fa-clock"></i>
                                </div>
                                
                                <div>
                                    <h4 class="font-bold text-gray-800 leading-tight group-hover:text-blue-600 transition-colors">
                                        <?= e($item['course_name']) ?>
                                    </h4>
                                    <div class="text-sm text-gray-500 mt-1 flex items-center gap-3">
                                        <span class="flex items-center gap-1">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                            <?= e($item['time']) ?>
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                                            R. <?= e($item['room']) ?>
                                        </span>
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
                        <span class="w-1 h-8 bg-yellow-500 rounded-full block"></span>
                        Agenda Fakultas
                    </h2>

                    <?php if(empty($agendas)): ?>
                        <p class="text-blue-200 italic text-sm">Tidak ada agenda mendatang.</p>
                    <?php else: ?>
                        <div class="space-y-6 relative z-10">
                            <?php foreach($agendas as $agenda): 
                                $time = strtotime($agenda['event_date']);
                            ?>
                            <a href="/unsoed_profile/public/detail_agenda?id=<?= $agenda['id'] ?>" class="flex items-center gap-4 group cursor-pointer p-3 -mx-3 rounded-xl hover:bg-white/5 transition-all duration-300">
                                
                                <div class="shrink-0 w-16 text-center rounded-xl overflow-hidden shadow-lg bg-white/10 backdrop-blur-sm border border-white/10 group-hover:bg-yellow-500 group-hover:border-yellow-500 transition-colors duration-300 transform group-hover:scale-105">
                                    <div class="text-xs font-bold py-1.5 bg-black/20 text-white/80 uppercase group-hover:text-black/60">
                                        <?= date('M', $time) ?>
                                    </div>
                                    <div class="text-2xl font-bold py-1.5 text-white group-hover:text-black">
                                        <?= date('d', $time) ?>
                                    </div>
                                </div>
                                
                                <div class="grow flex items-center justify-between">
                                    <div class="pr-2">
                                        <h4 class="font-bold text-lg leading-snug group-hover:text-yellow-400 transition-colors">
                                            <?= e($agenda['title']) ?>
                                        </h4>
                                        <span class="text-sm text-blue-300 mt-1 block group-hover:text-blue-200"><?= date('l, Y', $time) ?></span>
                                    </div>
                                    
                                    <div class="opacity-0 group-hover:opacity-100 transform -translate-x-2.5 group-hover:translate-x-0 transition-all duration-300 text-yellow-400">
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
                        <span class="w-1 h-8 bg-yellow-500 rounded-full block"></span>
                        Pengumuman
                    </h2>

                    <?php if(empty($announcements)): ?>
                        <p class="text-gray-500 italic text-sm">Belum ada pengumuman.</p>
                    <?php else: ?>
                        <div class="space-y-8">
                            <?php foreach($announcements as $announcement): 
                                $rawContent = isset($announcement['content']) ? strip_tags($announcement['content']) : '';
                                $excerpt = strlen($rawContent) > 80 ? substr($rawContent, 0, 80) . "..." : $rawContent;
                                if(empty($excerpt)) $excerpt = "Klik untuk melihat detail pengumuman selengkapnya.";
                            ?>
                            <div class="group relative pl-4 border-l-2 border-gray-100 hover:border-blue-500 transition-colors duration-300">
                                <div class="flex items-center gap-2 mb-1 text-xs font-bold text-gray-400 uppercase tracking-wide">
                                    <span class="text-red-500"><?= tgl_indo($announcement['date']) ?></span>
                                </div>
                                
                                <h4 class="font-bold text-gray-800 text-lg leading-snug group-hover:text-blue-700 transition-colors mb-2">
                                    <a href="/unsoed_profile/public/detail_pengumuman?id=<?= $announcement['id'] ?>">
                                        <?= e($announcement['title']) ?>
                                    </a>
                                </h4>
                                
                                <p class="text-sm text-gray-500 leading-relaxed line-clamp-2 mb-2">
                                    <?= $excerpt ?>
                                </p>

                                <a href="/unsoed_profile/public/detail_pengumuman?id=<?= $announcement['id'] ?>" class="text-sm font-semibold text-blue-600 flex items-center gap-1 group-hover:gap-2 transition-all">
                                    Baca selengkapnya <span class="text-xs">&rarr;</span>
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