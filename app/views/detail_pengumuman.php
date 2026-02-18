<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

$id = $_GET['id'] ?? null;
$stmt = $pdo->prepare("SELECT * FROM announcements WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch();

if(!$data) {
    echo "<div class='container mx-auto py-20 text-center text-gray-500'>Data pengumuman tidak ditemukan.</div>";
    return;
}

$page_title = 'Pengumuman';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php';
?>

<div class="container mx-auto px-4 py-12 max-w-3xl animate-fade-in-up">
    <button onclick="history.back()" class="text-red-950 hover:text-red-800 mb-6 inline-flex items-center gap-2 font-bold transition-colors cursor-pointer">
        <span>&larr;</span> Kembali
    </button>

    <div class="bg-white p-10 rounded-xl shadow-lg border border-gray-200">
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-8 gap-4">
            <span class="bg-red-50 text-red-900 text-xs font-black px-4 py-1.5 rounded uppercase tracking-wider border border-red-100 self-start">PENTING</span>
            <span class="text-gray-400 text-sm font-medium flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                Diposting: <?= tgl_indo($data['date']) ?>
            </span>
        </div>

        <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-8 leading-snug border-b border-gray-100 pb-6"><?= e($data['title']) ?></h1>
        
        <div class="prose max-w-none text-gray-700 leading-loose text-lg">
            <?= !empty($data['content']) ? nl2br(e($data['content'])) : 'Berikut adalah detail pengumuman yang disampaikan.' ?>
        </div>
        
        <div class="mt-10 pt-6 border-t border-gray-100 flex justify-end">
             <button class="bg-red-950 text-white px-6 py-2 rounded shadow hover:bg-red-900 transition flex items-center gap-2 cursor-pointer" onclick="window.print()">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z"></path></svg>
                Cetak Pengumuman
             </button>
        </div>
    </div>
</div>