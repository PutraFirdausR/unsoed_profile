<?php
$renstraData = [
    'judul' => 'RENSTRA FH 2020-2024',
    'desc'  => 'Dokumen perencanaan strategis Fakultas Hukum UNSOED periode 2020-2024 yang memuat visi, misi, tujuan, dan sasaran strategis pembangunan fakultas.',
    'tahun' => '2020 - 2024',
    // Perubahan Link ke File Lokal
    'link'  => '/unsoed_profile/public/assets/docs/Renstra.pdf' 
];

$page_title = 'Rencana Strategis';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php';
?>

<style>
    @keyframes fadeInUp {
        from { opacity: 0; transform: translate3d(0, 20px, 0); }
        to { opacity: 1; transform: translate3d(0, 0, 0); }
    }
    .animate-fade-in-up {
        animation: fadeInUp 0.6s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
        opacity: 0;
    }
    .delay-100 { animation-delay: 100ms; }
    .delay-200 { animation-delay: 200ms; }
</style>

<div class="bg-gray-50 font-sans text-gray-800 min-h-screen py-20">
    <div class="container mx-auto px-4 md:px-8 max-w-5xl">

        <div class="mb-10 animate-fade-in-up">
            <h2 class="text-3xl font-bold text-[#002b54] mb-6 flex items-center gap-3">
                <span class="w-1.5 h-8 bg-yellow-500 rounded-full"></span>
                Arah Kebijakan Fakultas
            </h2>
            
            <div class="prose prose-lg text-gray-600 max-w-none bg-white p-6 rounded-xl border border-gray-100 shadow-sm">
                <p>
                    <strong>Rencana Strategis (Renstra)</strong> Fakultas Hukum Universitas Jenderal Soedirman adalah dokumen perencanaan jangka menengah yang menjabarkan Visi, Misi, Tujuan, Strategi, Kebijakan, Program, dan Kegiatan pembangunan fakultas sesuai dengan tugas dan fungsinya.
                </p>
                <p class="mt-4">
                    Dokumen ini menjadi acuan utama dalam penyusunan Rencana Kerja dan Anggaran (RKA) tahunan serta sebagai instrumen pengendalian dan evaluasi kinerja fakultas selama periode lima tahun ke depan.
                </p>
            </div>
        </div>

        <div class="animate-fade-in-up delay-100">
            <h3 class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-4 ml-1">Dokumen Lampiran</h3>
            
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 hover:border-blue-400 hover:shadow-md transition-all duration-300 group overflow-hidden">
                <div class="flex flex-col md:flex-row items-start md:items-center p-6 gap-6">
                    
                    <div class="shrink-0">
                        <div class="w-16 h-16 bg-red-50 text-red-500 rounded-lg flex items-center justify-center border border-red-100 group-hover:bg-red-100 transition-colors">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                            </svg>
                        </div>
                    </div>

                    <div class="grow">
                        <div class="flex items-center gap-3 mb-1">
                            <h4 class="text-xl font-bold text-[#002b54] group-hover:text-blue-600 transition-colors">
                                <?= $renstraData['judul'] ?>
                            </h4>
                            <span class="hidden md:inline-flex items-center px-2.5 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800 border border-blue-200">
                                PDF
                            </span>
                        </div>
                        
                        <div class="flex items-center gap-4 text-sm text-gray-500 mb-2">
                            <span class="flex items-center gap-1">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                Periode: <?= $renstraData['tahun'] ?>
                            </span>
                        </div>

                        <p class="text-gray-500 text-sm line-clamp-2 md:line-clamp-1">
                            <?= $renstraData['desc'] ?>
                        </p>
                    </div>

                    <div class="w-full md:w-auto shrink-0 mt-4 md:mt-0">
                        <a href="<?= $renstraData['link'] ?>" target="_blank" class="flex items-center justify-center gap-2 w-full md:w-auto px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold rounded-lg transition-all duration-200 shadow-sm hover:shadow-lg active:scale-95">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                            Unduh File
                        </a>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>