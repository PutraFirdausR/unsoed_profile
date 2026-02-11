<?php
$page_title = 'Layanan Kurikulum IUP';
$page_bg    = base_url('assets/img/home.jpg'); 
require __DIR__ . '/../ui/page_header.php'; 
require __DIR__ . '/../data/iup_data.php';
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
                    
                    <?php include __DIR__ . '/../components/iup_card.php'; ?>

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