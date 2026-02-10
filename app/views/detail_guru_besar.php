<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

$id = $_GET['id'] ?? null;

$stmt = $pdo->prepare("SELECT * FROM professors WHERE id = ?");
$stmt->execute([$id]);
$prof = $stmt->fetch();

$stmt_pub = $pdo->prepare("SELECT * FROM publications WHERE professor_id = ? ORDER BY year DESC");
$stmt_pub->execute([$id]);
$publications = $stmt_pub->fetchAll();

if(!$prof) {
    echo "<div class='py-20 text-center container mx-auto text-gray-500'>Data Guru Besar tidak ditemukan. <a href='javascript:history.back()' class='underline'>Kembali</a></div>";
    return;
}

$page_title = 'Profil Guru Besar';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php'; 
?>

<div class="bg-gray-50 min-h-screen font-sans text-gray-800 pb-20">
    <div class="container mx-auto px-4 md:px-8 max-w-5xl py-10">
        
        <div class="mb-6">
            <a href="/unsoed_profile/public/guru_besar" class="inline-flex items-center text-sm font-semibold text-gray-500 hover:text-[#002b54] transition-colors">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Kembali ke Direktori
            </a>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden mb-8">
            <div class="p-6 md:p-8">
                <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                    
                    <div class="shrink-0">
                        <div class="w-40 h-40 md:w-48 md:h-56 bg-gray-100 rounded-lg overflow-hidden border border-gray-200 shadow-sm">
                            <img src="/unsoed_profile/public/assets/img/guru_besar/<?= $prof['image'] ?>" 
                                 onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($prof['name']) ?>&background=002b54&color=fff&size=256'"
                                 alt="<?= htmlspecialchars($prof['name']) ?>" 
                                 class="w-full h-full object-cover">
                        </div>
                    </div>

                    <div class="flex-1 text-center md:text-left w-full">
                        <div class="mb-4">
                            <span class="inline-block bg-blue-50 text-[#002b54] text-xs font-bold px-3 py-1 rounded border border-blue-100 uppercase tracking-wide mb-2">
                                Guru Besar
                            </span>
                            <h1 class="text-2xl md:text-3xl font-bold text-[#002b54] leading-tight">
                                <?= htmlspecialchars($prof['name']) ?>
                            </h1>
                            <p class="text-yellow-600 font-semibold mt-1">
                                <?= htmlspecialchars($prof['expertise']) ?>
                            </p>
                        </div>

                        <div class="border-t border-gray-100 my-4"></div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-gray-600">
                            
                            <div class="flex items-center gap-3 justify-center md:justify-start p-2 rounded hover:bg-gray-50 transition">
                                <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-[#002b54]">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </div>
                                <div class="text-left">
                                    <span class="block text-xs text-gray-400 font-bold uppercase">Email Institusi</span>
                                    <a href="mailto:<?= htmlspecialchars($prof['email_institution']) ?>" class="font-medium text-gray-800 hover:text-blue-700">
                                        <?= htmlspecialchars($prof['email_institution']) ?>
                                    </a>
                                </div>
                            </div>

                            <?php if(!empty($prof['email_personal'])): ?>
                            <div class="flex items-center gap-3 justify-center md:justify-start p-2 rounded hover:bg-gray-50 transition">
                                <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-yellow-600">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207"></path></svg>
                                </div>
                                <div class="text-left">
                                    <span class="block text-xs text-gray-400 font-bold uppercase">Email Alternatif</span>
                                    <a href="mailto:<?= htmlspecialchars($prof['email_personal']) ?>" class="font-medium text-gray-800 hover:text-blue-700">
                                        <?= htmlspecialchars($prof['email_personal']) ?>
                                    </a>
                                </div>
                            </div>
                            <?php endif; ?>

                        </div>

                        <?php if(!empty($prof['scholar_link'])): ?>
                        <div class="mt-6">
                            <a href="<?= $prof['scholar_link'] ?>" target="_blank" class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-[#002b54] text-white text-sm font-semibold rounded hover:bg-blue-900 transition-all shadow-sm">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 24a7 7 0 1 1 0-14 7 7 0 0 1 0 14zm0-24L0 9.5l4.838 3.94A8 8 0 0 1 12 9a8 8 0 0 1 7.162 4.44L24 9.5z"/></svg>
                                Lihat Profil Google Scholar
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
            <div class="px-6 py-5 border-b border-gray-100 bg-gray-50/50 flex items-center justify-between">
                <h3 class="font-bold text-gray-800 text-lg flex items-center gap-2">
                    <svg class="w-5 h-5 text-[#002b54]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                    Riwayat Publikasi & Penelitian
                </h3>
            </div>

            <div class="p-0">
                <?php if(empty($publications)): ?>
                    <div class="p-10 text-center">
                        <div class="inline-flex items-center justify-center w-12 h-12 bg-gray-100 rounded-full text-gray-400 mb-3">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        <p class="text-gray-500 text-sm">Belum ada data publikasi yang tersedia.</p>
                    </div>
                <?php else: ?>
                    <div class="divide-y divide-gray-100">
                        <?php foreach($publications as $index => $pub): ?>
                        <div class="p-5 hover:bg-gray-50 transition-colors group">
                            <div class="flex items-start gap-4">
                                <span class="text-xs font-mono font-semibold text-gray-300 w-6 mt-1 text-right shrink-0">
                                    <?= sprintf("%02d", $index + 1) ?>.
                                </span>
                                
                                <div class="flex-1">
                                    <h4 class="text-base font-bold text-[#002b54] mb-1 leading-snug group-hover:text-blue-600 transition-colors">
                                        <?= htmlspecialchars($pub['title']) ?>
                                    </h4>
                                    
                                    <div class="flex flex-wrap items-center gap-y-1 text-sm text-gray-600 mt-1">
                                        <span class="italic text-gray-500 mr-3">
                                            <?= htmlspecialchars($pub['journal_info']) ?>
                                        </span>
                                        
                                        <?php if(!empty($pub['year'])): ?>
                                        <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-gray-100 text-gray-600 mr-3">
                                            Tahun <?= htmlspecialchars($pub['year']) ?>
                                        </span>
                                        <?php endif; ?>

                                        <?php if($pub['citations'] > 0): ?>
                                        <span class="inline-flex items-center gap-1 text-xs text-gray-500">
                                            <svg class="w-3 h-3 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
                                            Sitasi: <?= htmlspecialchars($pub['citations']) ?>
                                        </span>
                                        <?php endif; ?>
                                    </div>
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