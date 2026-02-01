<?php
$renstraData = [
    'judul' => 'RENSTRA FH 2020-2024',
    'desc'  => 'Dokumen perencanaan strategis Fakultas Hukum UNSOED periode 2020-2024 yang memuat visi, misi, tujuan, dan sasaran strategis pembangunan fakultas.',
    'tahun' => '2020 - 2024',
    'link'  => 'https://docs.google.com/viewerng/viewer?url=https://fh.unsoed.ac.id/wp-content/uploads/2023/02/RENSTRA-FH-2020-2024-FIX.pdf' 
];

$page_title = 'Rencana Strategis';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php';
?>

<div class="bg-gray-50 font-sans text-gray-800 w-full min-h-screen ">

    <div class="container mx-auto px-4 md:px-6 lg:px-8 max-w-7xl relative z-20 py-16 space-y-12">

        <div class="w-full">
            <h2 class="text-3xl font-bold text-[#002b54] mb-6 border-b-2 border-yellow-400 pb-3 inline-block">Arah Kebijakan Fakultas</h2>
            <div class="text-slate-600 text-lg leading-relaxed space-y-4 text-justify">
                <p>
                    <strong>Rencana Strategis (Renstra)</strong> Fakultas Hukum Universitas Jenderal Soedirman adalah dokumen perencanaan jangka menengah yang menjabarkan Visi, Misi, Tujuan, Strategi, Kebijakan, Program, dan Kegiatan pembangunan fakultas sesuai dengan tugas dan fungsinya.
                </p>
                <p>
                    Dokumen ini menjadi acuan utama dalam penyusunan Rencana Kerja dan Anggaran (RKA) tahunan serta sebagai instrumen pengendalian dan evaluasi kinerja fakultas selama periode lima tahun ke depan.
                </p>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/60 border border-white overflow-hidden">
            <div class="px-8 py-10 border-b border-gray-100 bg-white">
                <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-6">
                    <div class="flex items-center gap-5">
                        <div class="w-16 h-16 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600 shadow-sm shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-slate-800 tracking-tight"><?= $renstraData['judul'] ?></h2>
                            <p class="text-slate-500 text-base mt-1">Periode Perencanaan: <span class="font-bold text-blue-600"><?= $renstraData['tahun'] ?></span></p>
                        </div>
                    </div>

                    <a href="<?= $renstraData['link'] ?>" target="_blank" class="w-full md:w-auto h-12 inline-flex items-center justify-center px-8 border border-transparent text-sm font-bold rounded-xl text-white bg-blue-600 hover:bg-blue-700 hover:-translate-y-0.5 transition-all duration-200 shadow-lg shadow-blue-600/20 whitespace-nowrap">
                        <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        Unduh Renstra Lengkap
                    </a>
                </div>
            </div>

            <div class="p-8 bg-blue-50/30">
                <div class="flex items-start gap-4">
                    <div class="shrink-0 mt-1">
                        <svg class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-slate-700 leading-relaxed text-lg">
                        <?= $renstraData['desc'] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>