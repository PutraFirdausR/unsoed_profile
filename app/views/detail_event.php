<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

$id = $_GET['id'] ?? null;

// Perbaikan logika query ke tabel activities (sesuai konteks file)
$stmt = $pdo->prepare("SELECT * FROM activities WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch();

if(!$data) {
    echo "<div class='container mx-auto py-20 text-center text-gray-500'>
            <h2 class='text-2xl font-bold mb-2'>Kegiatan tidak ditemukan</h2>
            <a href='javascript:history.back()' class='text-red-950 underline mt-4 inline-block'>Kembali</a>
          </div>";
    return;
}

$page_title = 'Detail Kegiatan';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php'; 
?>

<div class="bg-slate-50 min-h-screen py-12 font-sans">
    <div class="container mx-auto px-4 md:px-8 max-w-4xl animate-fade-in-up">
        
        <button onclick="history.back()" class="text-red-950 hover:text-red-800 mb-6 inline-flex items-center gap-2 font-bold transition-colors cursor-pointer">
            <span>&larr;</span> Kembali
        </button>

        <div class="bg-white rounded-3xl shadow-sm border border-slate-200 overflow-hidden">
            <div class="p-8 md:p-12">
                <h1 class="text-3xl md:text-4xl font-black text-red-950 mb-8 leading-tight">
                    <?= e($data['title']) ?>
                </h1>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-10 pb-10 border-b border-slate-100">
                    <div class="flex items-start gap-4">
                        <div class="shrink-0 w-12 h-12 rounded-2xl bg-red-50 text-red-950 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <span class="block text-xs font-bold text-slate-400 uppercase tracking-wide mb-1">Tanggal</span>
                            <span class="block text-lg font-bold text-slate-800"><?= tgl_indo($data['date']) ?></span>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="shrink-0 w-12 h-12 rounded-2xl bg-yellow-50 text-yellow-600 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <span class="block text-xs font-bold text-slate-400 uppercase tracking-wide mb-1">Lokasi</span>
                            <span class="block text-lg font-bold text-slate-800">
                                <?= e($data['location'] ?? 'Kampus FH Unsoed') ?>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed">
                    <?= !empty($data['description']) ? nl2br(e($data['description'])) : 'Detail kegiatan akan segera diperbarui.' ?>
                </div>
            </div>
        </div>
    </div>
</div>