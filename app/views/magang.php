<?php
$page_title = 'Program Magang Mahasiswa';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php'; 
?>

<div class="bg-gray-50 font-sans text-gray-800 w-full min-h-screen relative">

    <div class="container mx-auto px-4 md:px-8 relative z-10 max-w-5xl py-20">
        
        <div class="text-center mb-12" data-aos="zoom-in">
                <span class="text-yellow-600 font-bold tracking-widest uppercase text-sm">Program Magang</span>
                <h2 class="text-3xl font-bold text-[#002b54] mt-2 mb-4">Layanan Magang Mahasiswa</h2>
                <div class="w-20 h-1.5 bg-yellow-400 mx-auto rounded-full mb-6"
                     data-aos="fade-zoom-in"
                     data-aos-easing="ease-in-back"
                     data-aos-delay="100"
                     data-aos-offset="0">
                </div>
                <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Portal resmi untuk memfasilitasi pengembangan kompetensi praktis dan perluasan jejaring profesional mahasiswa Fakultas Hukum.                </p>
            </div>

        <div class="bg-white rounded-[2.5rem] shadow-2xl shadow-gray-200/50 overflow-hidden border border-white flex flex-col md:flex-row">
            
            <div class="w-full md:w-1/2 bg-[#002b54] p-10 md:p-14 text-white flex flex-col justify-center relative overflow-hidden" data-aos="fade-right">
                <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 24px 24px;"></div>
                <div class="absolute bottom-0 right-0 w-64 h-64 bg-blue-500 rounded-full blur-[80px] opacity-20 translate-x-1/2 translate-y-1/2"></div>
                
                <div class="relative z-10" >
                    <span class="inline-block py-1.5 px-4 rounded-lg bg-blue-500/20 border border-blue-400/20 text-blue-200 text-xs font-bold tracking-widest uppercase mb-6 backdrop-blur-sm">
                        Layanan Akademik
                    </span>
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 leading-tight">
                        Program <br>Magang
                    </h2>
                    <p class="text-blue-100/90 text-lg leading-relaxed mb-8 font-light">
                        Jembatan emas menuju dunia profesional. Tingkatkan kompetensi hukum Anda melalui praktik kerja lapangan di instansi terpercaya.
                    </p>
                    
                    <div class="flex items-center gap-4 text-sm font-medium text-blue-200">
                        <div class="flex -space-x-3">
                            <div class="w-10 h-10 rounded-full bg-blue-400 border-2 border-[#002b54] flex items-center justify-center text-xs text-white">FH</div>
                            <div class="w-10 h-10 rounded-full bg-gray-200 border-2 border-[#002b54] flex items-center justify-center text-xs text-gray-600">Mitra</div>
                        </div>
                        <span>Kolaborasi Industri & Institusi</span>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 bg-white p-10 md:p-14 flex flex-col justify-center items-center text-center" data-aos="fade-left" >
                
                <div class="w-24 h-24 bg-blue-50 rounded-3xl flex items-center justify-center text-blue-600 mb-6 shadow-sm transform hover:scale-105 transition-transform duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>

                <h3 class="text-2xl font-bold text-gray-800 mb-2">Buku Pedoman Magang</h3>
                <p class="text-gray-500 mb-8 max-w-xs leading-relaxed">
                    Dokumen lengkap berisi panduan, format laporan, dan persyaratan administrasi terbaru.
                </p>

                <a href="/unsoed_profile/public/assets/docs/Magang.pdf" target="_blank" 
                   class="w-full max-w-xs group relative inline-flex items-center justify-center px-8 py-4 text-base font-bold text-white transition-all duration-300 bg-blue-600 rounded-xl hover:bg-blue-700 hover:shadow-xl hover:shadow-blue-600/20 hover:-translate-y-1">
                    <svg class="w-5 h-5 mr-3 transition-transform group-hover:-translate-y-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
                    </svg>
                    Unduh Dokumen PDF
                </a>
                
                <p class="mt-8 text-xs text-gray-400 font-medium tracking-wide">
                    FAKULTAS HUKUM UNSOED
                </p>
            </div>

        </div>
    </div>
</div>