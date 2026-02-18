<?php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

// 1. Ambil ID dari URL
$id = $_GET['id'] ?? null;

// 2. Query data Guru Besar
$stmt = $pdo->prepare("SELECT * FROM professors WHERE id = ?");
$stmt->execute([$id]);
$prof = $stmt->fetch();

// 3. Query data Publikasi
$stmt_pub = $pdo->prepare("SELECT * FROM publications WHERE professor_id = ? ORDER BY year DESC");
$stmt_pub->execute([$id]);
$publications = $stmt_pub->fetchAll();

// 4. Validasi jika data tidak ditemukan
if(!$prof) {
    echo "<div class='py-20 text-center container mx-auto text-gray-500 font-sans'>
            <h2 class='text-2xl font-bold text-red-950'>Profil Tidak Ditemukan</h2>
            <p class='mb-6'>Maaf, data guru besar yang Anda cari tidak tersedia.</p>
            <a href='javascript:history.back()' class='text-red-700 underline'>Kembali ke halaman sebelumnya</a>
          </div>";
    return;
}

$page_title = 'Profil Guru Besar';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php'; 
?>

<div class="bg-gray-50 min-h-screen font-sans text-gray-800 pb-20">
    <div class="container mx-auto px-4 md:px-8 max-w-6xl py-10">
        
        <div class="mb-8" data-aos="fade-down">
            <a href="/unsoed_profile/public/guru_besar" class="inline-flex items-center text-sm font-bold text-gray-500 hover:text-red-950 transition-colors group">
                <div class="w-8 h-8 rounded-full bg-white shadow-sm flex items-center justify-center mr-3 group-hover:bg-red-950 group-hover:text-white transition-all">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </div>
                Kembali ke Direktori
            </a>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/50 border border-gray-100 overflow-hidden mb-12">
            <div class="p-2 md:p-12">
                <div class="flex flex-col md:flex-row items-center md:items-stretch gap-12">
                    
                    <div class="shrink-0" data-aos="fade-right" data-aos-duration="1000">
                        <div class="w-48 h-64 md:w-64 md:h-80 bg-slate-100 rounded-2xl overflow-hidden border-4 border-white shadow-2xl shadow-red-950/10">
                            <img src="/unsoed_profile/public/assets/img/guru_besar/<?= htmlspecialchars($prof['image']) ?>" 
                                 onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($prof['name']) ?>&background=450a0a&color=fff&size=400'"
                                 alt="<?= htmlspecialchars($prof['name']) ?>" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>

                    <div class="flex-1 text-center md:text-left py-4" data-aos="fade-left" data-aos-duration="1000">
                        <div class="mb-6">
                            <div class="flex flex-wrap justify-center md:justify-start gap-2 mb-4">
                                <span class="bg-red-950 text-white text-[10px] font-black px-4 py-1.5 rounded-full uppercase tracking-[0.2em]">
                                    Guru Besar
                                </span>
                                <span class="bg-yellow-500 text-red-950 text-[10px] font-black px-4 py-1.5 rounded-full uppercase tracking-[0.2em]">
                                    FH Unsoed
                                </span>
                            </div>
                            <h1 class="text-3xl md:text-5xl font-black text-red-950 leading-tight mb-2">
                                <?= htmlspecialchars($prof['name']) ?>
                            </h1>
                            <p class="text-xl text-yellow-600 font-bold italic">
                                Bidang Keahlian: <?= htmlspecialchars($prof['expertise']) ?>
                            </p>
                        </div>

                        <div class="h-px bg-linear-to-r from-gray-100 via-gray-100 to-transparent my-8"></div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm text-gray-600">
                            <?php if(!empty($prof['email_institution'])): ?>
                            <div class="flex items-center gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-100 group hover:border-red-200 transition-colors">
                                <div class="w-10 h-10 rounded-xl bg-white shadow-sm flex items-center justify-center text-red-950 group-hover:bg-red-950 group-hover:text-white transition-all">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div class="text-left">
                                    <span class="block text-[10px] text-gray-400 font-black uppercase tracking-widest">Email Resmi</span>
                                    <a href="mailto:<?= htmlspecialchars($prof['email_institution']) ?>" class="font-bold text-gray-800 hover:text-red-700 break-all">
                                        <?= htmlspecialchars($prof['email_institution']) ?>
                                    </a>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>

                        <?php if(!empty($prof['scholar_link'])): ?>
                        <div class="mt-10">
                            <a href="<?= htmlspecialchars($prof['scholar_link']) ?>" target="_blank" 
                               class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-red-950 text-white text-sm font-bold rounded-xl hover:bg-black hover:scale-105 transition-all shadow-lg shadow-red-950/20 group">
                                <svg class="w-5 h-5 text-yellow-500" fill="currentColor" viewBox="0 0 24 24"><path d="M12 24a7 7 0 1 1 0-14 7 7 0 0 1 0 14zm0-24L0 9.5l4.838 3.94A8 8 0 0 1 12 9a8 8 0 0 1 7.162 4.44L24 9.5z"/></svg>
                                Buka Profil Google Scholar
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-sm border border-gray-100 overflow-hidden" data-aos="fade-up">
    <div class="px-8 py-6 bg-red-950 flex items-center gap-4">
        <div class="p-2 bg-white/10 rounded-lg">
            <svg class="w-6 h-6 text-yellow-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
            </svg>
        </div>
        <h3 class="font-bold text-white text-xl">Arsip Publikasi & Karya Ilmiah</h3>
    </div>
    
    <div class="p-8">
        <?php if(empty($publications)): ?>
            <p class="text-gray-400 italic text-center py-10">Belum ada data publikasi yang tercatat.</p>
        <?php else: ?>
            <div class="space-y-8">
                <?php foreach($publications as $pub): ?>
                    <div class="flex gap-6 pb-6 border-b border-gray-50 last:border-0 last:pb-0 group">
                        <div class="shrink-0">
                            <span class="text-red-950 font-black text-xl bg-red-50 px-3 py-1 rounded-lg">
                                <?= htmlspecialchars($pub['year'] ?? '-') ?>
                            </span>
                        </div>
                        
                        <div class="flex-1">
                            <h4 class="font-bold text-gray-900 mb-2 text-lg leading-tight group-hover:text-red-700 transition-colors">
                                <?= htmlspecialchars($pub['title']) ?>
                            </h4>
                            
                            <div class="flex flex-wrap items-center gap-3">
                                <p class="text-sm text-gray-500 italic">
                                    <?= htmlspecialchars($pub['journal_info'] ?? 'Informasi jurnal tidak tersedia') ?>
                                </p>
                                
                                <?php if(($pub['citations'] ?? 0) > 0): ?>
                                <span class="flex items-center gap-1 text-[10px] font-bold bg-yellow-100 text-yellow-700 px-2 py-0.5 rounded-full uppercase">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                    Citasi: <?= htmlspecialchars($pub['citations']) ?>
                                </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
    </div>
</div>