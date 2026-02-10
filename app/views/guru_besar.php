<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

$stmt = $pdo->query("SELECT * FROM professors ORDER BY id ASC");
$professors = $stmt->fetchAll();

$page_title = 'Guru Besar';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php'; 
?>

<div class="bg-slate-50 min-h-screen font-sans py-16">
    
    <div class="bg-whites  pt-16 pb-12">
        <div class="container mx-auto px-4 text-center">
            
            <span class="text-yellow-500 font-bold tracking-widest uppercase text-xs mb-3 block">
                Fakultas Hukum Universitas Jenderal Soedirman
            </span>
            
            <h1 class="text-3xl md:text-4xl font-extrabold text-[#002b54] mb-8">
                Guru Besar
            </h1>
            <div class="w-20 h-1.5 bg-yellow-400 mx-auto rounded-full mb-6"></div>
            <div class="max-w-4xl mx-auto bg-blue-50/50 rounded-2xl p-6 md:p-8 border border-blue-100">
                <p class="text-gray-600 text-lg leading-relaxed font-medium">
                    "Selamat datang di direktori Guru Besar. Halaman ini memuat profil para akademisi tertinggi di lingkungan Fakultas Hukum Unsoed yang berdedikasi dalam pengembangan keilmuan hukum, penelitian, serta pengabdian kepada masyarakat."
                </p>
            </div>

        </div>
    </div>

    <div class="container mx-auto px-4 md:px-8 py-16">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
            <?php foreach($professors as $prof): ?>
            
            <a href="/unsoed_profile/public/detail_guru_besar?id=<?= $prof['id'] ?>" class="group bg-white rounded-lg border border-gray-200 hover:border-[#002b54] transition-all duration-300 flex flex-col overflow-hidden hover:shadow-lg">
                
                <div class="aspect-square w-full overflow-hidden bg-gray-100 relative">
                    <img src="/unsoed_profile/public/assets/img/guru_besar/<?= $prof['image'] ?>" 
                         onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($prof['name']) ?>&background=002b54&color=fff&size=400'"
                         alt="<?= htmlspecialchars($prof['name']) ?>" 
                         class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-500">
                    
                    <div class="absolute inset-0 bg-black/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                </div>

                <div class="p-6 flex flex-col grow">
                    
                    <div class="mb-3">
                        <span class="inline-block py-1 px-2 rounded bg-gray-100 text-gray-600 text-[11px] font-bold uppercase tracking-wide border border-gray-200 group-hover:bg-[#002b54] group-hover:text-white group-hover:border-[#002b54] transition-colors">
                            <?= htmlspecialchars($prof['expertise']) ?>
                        </span>
                    </div>

                    <h3 class="text-lg font-bold text-gray-900 mb-2 leading-snug group-hover:text-[#002b54] transition-colors">
                        <?= htmlspecialchars($prof['name']) ?>
                    </h3>
                    
                    <div class="w-full h-px bg-gray-100 my-4 group-hover:bg-gray-200"></div>

                    <div class="mt-auto flex justify-between items-center">
                        <span class="text-sm font-semibold text-gray-500 group-hover:text-[#002b54] transition-colors">
                            Lihat Profil
                        </span>
                        <div class="w-8 h-8 rounded-full bg-gray-50 flex items-center justify-center text-gray-400 group-hover:bg-[#002b54] group-hover:text-white transition-all">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                        </div>
                    </div>

                </div>
            </a>
            <?php endforeach; ?>
        </div>
        
    </div>
</div>