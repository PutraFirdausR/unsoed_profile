<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

$id = $_GET['id'] ?? null;
$stmt = $pdo->prepare("SELECT * FROM news WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch();

if(!$data) {
    echo "<div class='container mx-auto py-20 text-center text-gray-500'>Data berita tidak ditemukan.</div>";
    return;
}

$page_title = 'Berita';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php';
?>

<div class="container mx-auto px-4 py-16 max-w-4xl animate-fade-in-up">
    <button onclick="history.back()" class="text-blue-600 hover:text-blue-800 mb-6 inline-flex items-center gap-2 font-bold transition-colors cursor-pointer">
        <span>&larr;</span> Kembali
    </button>
    
    <h1 class="text-3xl md:text-4xl font-extrabold text-[#002b54] mb-4 leading-tight">
        <?= e($data['title']) ?>
    </h1>
    
    <p class="text-gray-500 mb-8 flex items-center gap-2 text-sm font-medium border-b border-gray-100 pb-6">
        <svg class="w-4 h-4 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
        <?= tgl_indo($data['date']) ?>
    </p>

    <?php if(!empty($data['image'])): ?>
        <div class="rounded-xl overflow-hidden shadow-lg mb-10">
            <img src="/unsoed_profile/public/assets/img/<?= e($data['image']) ?>" class="w-full object-cover max-h-125 hover:scale-105 transition-transform duration-700">
        </div>
    <?php endif; ?>

    <div class="bg-white p-8 rounded-xl shadow-sm border border-gray-100 text-lg leading-relaxed text-gray-700 text-justify">
        <?= !empty($data['content']) ? nl2br(e($data['content'])) : 'Isi berita lengkap belum tersedia.' ?>
    </div>
</div>