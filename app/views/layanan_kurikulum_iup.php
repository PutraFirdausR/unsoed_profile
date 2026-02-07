<?php
// FILE: app/views/layanan_kurikulum_iup.php

// Judul Halaman & Background Header
$page_title = 'Layanan Kurikulum IUP';
$page_bg    = base_url('assets/img/home.jpg'); // Pastikan gambar ini ada
require __DIR__ . '/../ui/PageHeader.php'; 

// Data Dokumen (Sesuai Request)
$documents = [
    [
        'title' => 'Buku Panduan Fakultas Hukum',
        'sub'   => 'Universitas Jenderal Soedirman',
        'desc'  => 'Pedoman Akademik Program Sarjana. Berisi panduan lengkap mengenai tata tertib, hak & kewajiban mahasiswa, serta prosedur akademik.',
        'file'  => 'BukuPanduanFH.pdf', // File No. 1
        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />'
    ],
    [
        'title' => 'Kurikulum Fakultas Hukum',
        'sub'   => 'Universitas Jenderal Soedirman',
        'desc'  => 'Dokumen Kurikulum resmi Fakultas Hukum. Memuat struktur mata kuliah, sebaran SKS per semester, dan deskripsi kompetensi lulusan.',
        'file'  => 'KurikulumFH.pdf', // File No. 2
        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" />'
    ]
];
?>

<div class="bg-gray-50 font-sans text-gray-800 w-full min-h-screen">
    
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8 max-w-5xl">
            
            <div class="text-center mb-12">
                <span class="text-yellow-600 font-bold tracking-widest uppercase text-sm">Dokumen Akademik</span>
                <h2 class="text-3xl font-bold text-[#002b54] mt-2 mb-4">Dokumen IUP</h2>
                <div class="w-20 h-1.5 bg-yellow-400 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Berikut adalah dokumen resmi yang dapat digunakan sebagai acuan akademik bagi mahasiswa International Undergraduate Program (IUP).
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <?php foreach($documents as $doc): ?>
                
                <div class="bg-white rounded-2xl border border-gray-200 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden group flex flex-col h-full">
                    
                    <div class="bg-[#002b54] p-6 relative overflow-hidden">
                        <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-8 -mt-8 blur-2xl"></div>
                        
                        <div class="flex items-start justify-between">
                            <div class="w-14 h-14 bg-yellow-500 rounded-xl flex items-center justify-center text-[#002b54] shadow-lg">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <?= $doc['icon'] ?>
                                </svg>
                            </div>
                            <span class="bg-white/20 text-white text-xs px-3 py-1 rounded-full font-medium backdrop-blur-sm border border-white/10">
                                PDF File
                            </span>
                        </div>
                    </div>

                    <div class="p-8 grow flex flex-col">
                        <h3 class="text-xl font-bold text-[#002b54] mb-1 group-hover:text-blue-700 transition-colors">
                            <?= $doc['title'] ?>
                        </h3>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-wide mb-4">
                            <?= $doc['sub'] ?>
                        </p>
                        
                        <p class="text-gray-600 text-sm leading-relaxed mb-8 border-b border-gray-100 pb-6 grow">
                            <?= $doc['desc'] ?>
                        </p>

                        <a href="<?= base_url('assets/docs/' . $doc['file']) ?>" target="_blank" 
                           class="w-full inline-flex items-center justify-center px-6 py-3 bg-[#002b54] text-white font-bold rounded-lg hover:bg-yellow-500 hover:text-yellow-500 transition-all duration-300 gap-2 group/btn shadow-md border border-transparent">
                            
                            <svg class="w-5 h-5 transition-transform group-hover/btn:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                            
                            Lihat Dokumen
                        </a>
                    </div>
                </div>

                <?php endforeach; ?>
            </div>

            <div class="mt-12 text-center">
                <p class="text-sm text-gray-500 bg-gray-50 inline-block px-6 py-3 rounded-full border border-gray-200 shadow-sm">
                    <span class="font-bold text-[#002b54]">Catatan:</span> Pastikan browser Anda mendukung tampilan PDF atau file akan terunduh otomatis.
                </p>
            </div>

        </div>
    </section>
</div>