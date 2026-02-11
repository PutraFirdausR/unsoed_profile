<header class="relative h-screen min-h-150 flex items-center justify-center bg-cover bg-center bg-fixed"
        style="background-image: url('/unsoed_profile/public/assets/img/home.jpg');">
    <div class="absolute inset-0 bg-linear-to-r from-[#002b54]/90 to-[#002b54]/40"></div>
    
    <div class="relative z-10 container mx-auto px-6 md:px-12 text-white "
         data-aos="fade-right">
        <span class="block text-yellow-400 font-bold tracking-widest uppercase mb-4 animate-fade-in-down" >
            Selamat Datang di
        </span>
        <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-6 max-w-3xl">
            Fakultas Hukum <br> Universitas Jenderal Soedirman
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-8 max-w-2xl leading-relaxed">
            Mewujudkan sarjana hukum yang berintegritas, profesional, dan berdaya saing global dengan nilai-nilai kearifan lokal.
        </p>
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="tentang-kami" class="px-8 py-3 border-2 border-white text-white font-bold rounded-full hover:bg-white hover:text-[#002b54] transition transform hover:-translate-y-1 shadow-lg text-center">
                Tentang Kami
            </a>
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
