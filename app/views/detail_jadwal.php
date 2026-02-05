<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

$id = $_GET['id'] ?? null;
$stmt = $pdo->prepare("SELECT * FROM lecture_schedules WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch();

if(!$data) {
    echo "<div class='container mx-auto py-20 text-center text-gray-500'>Data jadwal tidak ditemukan.</div>";
    return;
}

$page_title = 'Jadwal';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php';
?>

<div class="container mx-auto px-4 py-12 max-w-2xl animate-fade-in-up">
    <button onclick="history.back()" class="text-blue-600 hover:text-blue-800 mb-6 inline-flex items-center gap-2 font-bold transition-colors cursor-pointer">
        <span>&larr;</span> Kembali
    </button>

    <div class="bg-white rounded-2xl shadow-xl overflow-hidden border border-blue-50">
        <div class="bg-[#002b54] p-10 text-center relative overflow-hidden">
            <div class="absolute top-0 right-0 w-32 h-32 bg-yellow-500 rounded-full opacity-10 blur-2xl -mr-10 -mt-10"></div>
            <h1 class="text-2xl font-bold text-white mb-2 relative z-10"><?= e($data['course_name']) ?></h1>
            <p class="text-blue-200 text-sm relative z-10 uppercase tracking-widest">Detail Mata Kuliah</p>
        </div>
        
        <div class="p-8 space-y-6">
            <div class="flex items-center gap-5 p-4 bg-blue-50 rounded-xl border border-blue-100 hover:bg-blue-100 transition">
                <div class="w-12 h-12 bg-blue-600 text-white rounded-full flex items-center justify-center font-bold text-xl shadow-md">H</div>
                <div>
                    <p class="text-xs text-gray-500 uppercase font-bold tracking-wide">Hari</p>
                    <p class="font-bold text-xl text-gray-800"><?= e($data['day']) ?></p>
                </div>
            </div>
            
            <div class="flex items-center gap-5 p-4 bg-yellow-50 rounded-xl border border-yellow-100 hover:bg-yellow-100 transition">
                <div class="w-12 h-12 bg-yellow-500 text-white rounded-full flex items-center justify-center font-bold text-xl shadow-md">W</div>
                <div>
                    <p class="text-xs text-gray-500 uppercase font-bold tracking-wide">Waktu</p>
                    <p class="font-bold text-xl text-gray-800"><?= e($data['time']) ?></p>
                </div>
            </div>

            <div class="flex items-center gap-5 p-4 bg-green-50 rounded-xl border border-green-100 hover:bg-green-100 transition">
                <div class="w-12 h-12 bg-green-600 text-black rounded-full flex items-center justify-center font-bold text-xl shadow-md">R</div>
                <div>
                    <p class="text-xs text-gray-500 uppercase font-bold tracking-wide">Ruangan</p>
                    <p class="font-bold text-xl text-gray-800">R. <?= e($data['room']) ?></p>
                </div>
            </div>
        </div>
    </div>
</div>