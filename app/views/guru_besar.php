<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

$stmt = $pdo->query("SELECT * FROM professors ORDER BY id ASC");
$professors = $stmt->fetchAll();

$page_title = 'Guru Besar';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php'; 
?>

<div class=" min-h-screen font-sans py-16">
    
    <div class=" pb-12 border-b border-gray-100" data-aos="fade-down" data-aos-duration="800">
        <div class="container mx-auto px-4 text-center">
            
            <span class="text-red-900 font-bold tracking-[0.3em] uppercase text-[10px] mb-3 block">
                Lembaga Akademik Tertinggi
            </span>
            
            <h1 class="text-3xl md:text-5xl font-black text-red-950 mb-6 tracking-tight">
                Dewan Guru Besar
            </h1>
            
            <div class="w-16 h-1 bg-yellow-500 mx-auto rounded-full mb-8" data-aos="fade-right"
             data-aos-delay="200"></div>
            
            <div class="max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="500">
                <div class="relative px-8 py-4 border-l-4 border-red-950/20 bg-slate-50 rounded-r-xl">
                    <p class="text-gray-600 text-base md:text-lg leading-relaxed font-medium italic">
                        "Direktori ini menghimpun para akademisi dengan kasta keilmuan tertinggi di Fakultas Hukum Unsoed, yang dedikasinya menjadi pilar utama dalam kemajuan riset dan integritas hukum."
                    </p>
                    <p class="mt-2 text-red-950 text-xs font-bold uppercase tracking-widest">— Fakultas Hukum Unsoed</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 md:px-8 py-20">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-10">
            <?php foreach($professors as $index => $prof): ?>
            
            <a href="/unsoed_profile/public/detail_guru_besar?id=<?= $prof['id'] ?>" 
               class="group bg-white rounded-2xl border border-gray-200 hover:border-red-950 transition-all duration-500 flex flex-col overflow-hidden hover:shadow-2xl hover:-translate-y-2"
               data-aos="fade-up" 
               data-aos-delay="<?= ($index % 4) * 100 ?>"> <div class="aspect-3/4 w-full overflow-hidden bg-gray-100 relative">
                    <img src="/unsoed_profile/public/assets/img/guru_besar/<?= $prof['image'] ?>" 
                         onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($prof['name']) ?>&background=450a0a&color=fff&size=400'"
                         alt="<?= htmlspecialchars($prof['name']) ?>" 
                         class="w-full h-full object-cover object-top group-hover:scale-110 transition-transform duration-1000">
                    
                    <div class="absolute inset-0 bg-linear-to-t from-red-950/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                        <span class="text-white text-xs font-bold uppercase tracking-widest">Lihat Detail Profil</span>
                    </div>
                </div>

                <div class="p-8 flex flex-col grow">
                    <div class="mb-4">
                        <span class="inline-block py-1 px-3 rounded-full bg-red-50 text-red-950 text-[10px] font-extrabold uppercase tracking-widest border border-red-100 group-hover:bg-red-950 group-hover:text-white transition-colors duration-300">
                            <?= htmlspecialchars($prof['expertise']) ?>
                        </span>
                    </div>

                    <h3 class="text-xl font-bold text-gray-900 mb-4 leading-tight group-hover:text-red-950 transition-colors">
                        <?= htmlspecialchars($prof['name']) ?>
                    </h3>
                    
                    <div class="mt-auto pt-4 border-t border-gray-100 flex items-center justify-between">
                        <span class="text-xs font-bold text-gray-400 uppercase">Guru Besar</span>
                        <div class="w-10 h-10 rounded-full bg-slate-50 flex items-center justify-center text-red-950 group-hover:bg-yellow-500 group-hover:text-white transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </div>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>