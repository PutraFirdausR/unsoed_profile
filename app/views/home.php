<header class="relative min-h-112.5 py-12 md:py-20 flex items-center justify-center bg-cover bg-center bg-fixed overflow-hidden"
        style="background-image: url('/unsoed_profile/public/assets/img/home.jpg');">
    
    <div class="absolute inset-0 bg-linear-to-tr from-red-950 via-red-950/80 to-transparent"></div>
    
    <div class="relative z-10 container mx-auto px-6 md:px-12 text-white" data-aos="fade-up">
        <div class="max-w-4xl">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-red-900/50 border border-red-700/50 mb-4 backdrop-blur-sm" data-aos="zoom-in">
                <span class="relative flex h-2 w-2">
                  <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-yellow-400 opacity-75"></span>
                  <span class="relative inline-flex rounded-full h-2 w-2 bg-yellow-500"></span>
                </span>
                <span class="text-xs font-bold tracking-[0.2em] uppercase text-yellow-400" >
                    Official Website
                </span>
            </div>

            <h1 class="text-4xl md:text-6xl font-black leading-tight mb-4 drop-shadow-2xl" data-aos="fade-up">
                Fakultas <span class="text-transparent bg-clip-text bg-linear-to-r from-white to-gray-400">Hukum</span>
                <br>
                <span class="text-yellow-500">Universitas Jendral Soedirman</span>
            </h1>

            <div class="border-l-4 border-yellow-500 pl-6 mb-8" data-aos="fade-up">
                <p class="text-lg md:text-xl text-gray-200 max-w-2xl leading-relaxed italic font-light" >
                    "Mewujudkan sarjana hukum yang berintegritas, profesional, dan berdaya saing global dengan nilai kearifan lokal."
                </p>
            </div>

            <div class="flex flex-wrap gap-4" >
                <a href="tentang-kami" class="group relative px-8 py-3 overflow-hidden font-bold rounded-lg bg-red-800 text-white shadow-xl transition-all duration-300 hover:bg-red-700 active:scale-95 text-sm md:text-base" >
                    <span class="relative z-10">Jelajahi Profil</span>
                    <div class="absolute inset-0 -translate-x-full group-hover:translate-x-0 bg-linear-to-r from-red-900 to-red-800 transition-transform duration-300"></div>
                </a>
                
                <a href="#prodi" class="px-8 py-3 font-bold rounded-lg border-2 border-white/30 backdrop-blur-md text-white hover:bg-white hover:text-red-950 transition-all duration-300 shadow-lg text-sm md:text-base">
                    Program Studi
                </a>
            </div>
        </div>
    </div>
</header>

<?php require_once __DIR__ . '/../components/layanan_digital.php'; ?>

<section id="prodi">
    <?php require_once __DIR__ . '/../components/studi.php'; ?>
</section>

<section id="berita">
    <?php require_once __DIR__ . '/../components/berita_gallery.php'; ?>
</section>

<?php 
if(file_exists(__DIR__ . '/../components/informasi.php')) {
    require_once __DIR__ . '/../components/informasi.php';
}
?>

<?php require_once __DIR__ . '/../components/statistik.php'; ?>
