<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

$id = $_GET['id'] ?? null;
$stmt = $pdo->prepare("SELECT * FROM agendas WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch();

if(!$data) {
    echo "<div class='container mx-auto py-20 text-center text-gray-500'>Data agenda tidak ditemukan.</div>";
    return;
}

$page_title = 'Agenda';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php';
?>

<div class="container mx-auto px-4 py-12 max-w-3xl animate-fade-in-up">
    <button onclick="history.back()" class="text-red-950 hover:text-red-800 mb-6 inline-flex items-center gap-2 font-bold transition-colors cursor-pointer">
        <span>&larr;</span> Kembali
    </button>
    
    <div class="bg-white p-10 rounded-2xl shadow-xl border-t-8 border-yellow-500 relative">
        <span class="bg-yellow-100 text-yellow-800 px-4 py-1.5 rounded-full text-xs font-bold uppercase tracking-wide inline-block mb-4">Agenda Fakultas</span>
        
        <h1 class="text-3xl font-extrabold text-red-950 mb-6 leading-tight"><?= e($data['title']) ?></h1>
        
        <div class="flex items-center gap-4 text-gray-700 mb-8 border-y border-gray-100 py-6">
            <div class="w-12 h-12 bg-red-50 text-red-950 rounded-lg flex items-center justify-center">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
            </div>
            <div>
                <p class="text-sm text-gray-400 font-bold uppercase tracking-widest">Waktu Pelaksanaan</p>
                <p class="text-lg font-bold"><?= tgl_indo($data['event_date']) ?></p>
            </div>
        </div>

        <div class="prose max-w-none text-gray-600 leading-relaxed">
             <?= nl2br(e($data['description'] ?? 'Tidak ada deskripsi tambahan untuk agenda ini.')) ?>
        </div>
    </div>
</div>