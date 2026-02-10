<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

$id = $_GET['id'] ?? null;

$stmt = $pdo->prepare("SELECT * FROM agendas WHERE id = ?");
$stmt->execute([$id]);
$data = $stmt->fetch();

if(!$data) {
    echo "<div class='container mx-auto py-20 text-center text-gray-500'>
            <h2 class='text-2xl font-bold mb-2'>Agenda tidak ditemukan</h2>
            <a href='javascript:history.back()' class='text-blue-600 underline mt-4 inline-block'>Kembali</a>
          </div>";
    return;
}

$page_title = 'Detail Agenda';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php'; 
?>

<div class="bg-slate-50 min-h-screen py-12 font-sans">
    <div class="container mx-auto px-4 md:px-8 max-w-4xl animate-fade-in-up">
        
        <button onclick="history.back()" class="text-blue-600 hover:text-blue-800 mb-6 inline-flex items-center gap-2 font-bold transition-colors cursor-pointer">
            <span>&larr;</span> Kembali
        </button>
        
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden border border-slate-100">
            
            <div class="bg-[#002b54] p-8 md:p-10 text-white relative overflow-hidden">
                <div class="absolute top-0 right-0 w-32 h-32 bg-yellow-400 opacity-10 rounded-full -mr-10 -mt-10 blur-2xl"></div>
                
                <span class="inline-block py-1 px-3 rounded bg-yellow-400 text-[#002b54] text-xs font-bold uppercase tracking-wider mb-4">
                    Agenda Fakultas
                </span>
                
                <h1 class="text-2xl md:text-4xl font-extrabold leading-tight mb-2">
                    <?= htmlspecialchars($data['title']) ?>
                </h1>
            </div>

            <div class="p-8 md:p-10">
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8 pb-8 border-b border-slate-100">
                    
                    <div class="flex items-start gap-4">
                        <div class="shrink-0 w-12 h-12 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                        </div>
                        <div>
                            <span class="block text-xs font-bold text-slate-400 uppercase tracking-wide mb-1">Tanggal Pelaksanaan</span>
                            <span class="block text-lg font-bold text-slate-800">
                                <?= function_exists('tgl_indo') ? tgl_indo($data['event_date']) : date('d F Y', strtotime($data['event_date'])) ?>
                            </span>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="shrink-0 w-12 h-12 rounded-2xl bg-yellow-50 text-yellow-600 flex items-center justify-center">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        </div>
                        <div>
                            <span class="block text-xs font-bold text-slate-400 uppercase tracking-wide mb-1">Lokasi</span>
                            <span class="block text-lg font-bold text-slate-800">
                                Kampus FH Unsoed
                            </span>
                        </div>
                    </div>

                </div>

                <div class="prose prose-slate max-w-none text-slate-600 leading-relaxed">
                    <?php 
                        $desc = $data['description'];
                        if(empty($desc)) {
                            $desc = "Belum ada deskripsi detail untuk agenda ini.";
                        }
                        echo nl2br(htmlspecialchars($desc)); 
                    ?>
                </div>

            </div>
        </div>

    </div>
</div>