<?php
// 1. KONEKSI & QUERY DATA
$conn = new mysqli("localhost", "root", "", "unsoed_db");
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

// Ambil data Dosen
$dosen = $conn->query("SELECT * FROM guru_besar WHERE id = $id")->fetch_assoc();

// Ambil Pendidikan (Urut ASC = Dari Sarjana ke S3)
$pendidikan = $conn->query("SELECT * FROM riwayat_pendidikan WHERE id_guru_besar = $id ORDER BY tahun_lulus ASC");

// Ambil Publikasi (Urut DESC = Terbaru diatas)
$publikasi = $conn->query("SELECT * FROM publikasi WHERE id_guru_besar = $id ORDER BY tahun DESC");

// Validasi
if (!$dosen) { echo "<script>window.location='guru_besar'</script>"; exit; }

// Helper Inisial (sama seperti di guru_besar.php untuk konsistensi)
function getInitials($string = null) {
    if (!$string) return 'GB';
    $words = explode(' ', $string);
    $initials = '';
    foreach ($words as $w) { $initials .= strtoupper(substr($w, 0, 1)); }
    return substr($initials, 0, 2);
}

$page_title = 'Detail Guru Besar';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php'; 
?>

<div class="bg-white border-b border-gray-200 sticky top-20 z-30 shadow-sm">
    <div class="container mx-auto px-4 max-w-6xl py-3 flex justify-between items-center">
        <a href="guru_besar" class="text-sm font-bold text-[#800000] hover:underline flex items-center gap-2">
            <span>&larr;</span> Kembali ke Daftar
        </a>
    </div>
</div>

<div class="bg-gray-50 min-h-screen py-10">
    <div class="container mx-auto px-4 max-w-6xl">
        <div class="flex flex-col md:flex-row gap-8 items-start">
            
            <div class="w-full md:w-1/3 lg:w-1/4">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 sticky top-36">
                    
                    <div class="flex justify-center mb-6">
                        <div class="w-48 h-60 overflow-hidden rounded-lg shadow-md border border-gray-200 bg-gray-100 relative group">
                            <?php if (!empty($dosen['foto'])): ?>
                                <img src="/unsoed_profile/public/<?= $dosen['foto'] ?>" 
                                     class="w-full h-full object-cover object-top transition duration-500 group-hover:scale-105"
                                     onerror="this.onerror=null; this.src=''; this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center bg-[#800000] text-white text-5xl font-bold\'><?= getInitials($dosen['nama']) ?></div>';">
                            <?php else: ?>
                                <div class="w-full h-full flex items-center justify-center bg-[#800000] text-white text-5xl font-bold">
                                    <?= getInitials($dosen['nama']) ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="text-center mb-6">
                        <div class="bg-red-50 text-[#800000] text-xs font-bold px-3 py-2 rounded border border-red-100 uppercase tracking-wide leading-relaxed mb-3">
                            <?= htmlspecialchars($dosen['jabatan'] ?? 'Guru Besar') ?>
                        </div>
                        <div class="text-xs font-semibold text-gray-500 flex items-center justify-center gap-1">
                            <span>🏢</span> <?= htmlspecialchars($dosen['unit_kerja'] ?? 'Fakultas Hukum UNSOED') ?>
                        </div>
                    </div>

                    <?php if(!empty($dosen['link_scholar']) && $dosen['link_scholar'] != '#'): ?>
                    <a href="<?= htmlspecialchars($dosen['link_scholar']) ?>" target="_blank" 
                       class="block w-full py-2.5 mb-6 bg-white border-2 border-blue-600 text-blue-600 font-bold text-center rounded hover:bg-blue-600 hover:text-white transition duration-300 text-sm shadow-sm hover:shadow-md">
                        <span class="mr-1">🎓</span> Google Scholar
                    </a>
                    <?php endif; ?>

                    <div class="border-t border-gray-100 pt-5 space-y-4 text-left">
                        <div>
                            <p class="text-[10px] text-gray-400 uppercase font-bold tracking-wider mb-1">NIP</p>
                            <p class="text-sm font-mono text-gray-700 bg-gray-50 p-1 rounded"><?= $dosen['nip'] ?></p>
                        </div>
                        <div>
                            <p class="text-[10px] text-gray-400 uppercase font-bold tracking-wider mb-1">Email</p>
                            <a href="mailto:<?= $dosen['email'] ?>" class="text-sm text-[#800000] font-medium break-all hover:underline">
                                <?= $dosen['email'] ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-2/3 lg:w-3/4">
                
                <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200 mb-8 border-l-4">
                    <h1 class="text-2xl md:text-3xl font-serif-custom font-bold text-gray-800 mb-2 leading-tight">
                        <?= htmlspecialchars($dosen['nama']) ?>
                    </h1>
                    <p class="text-lg text-gray-600 font-medium">
                        <?= htmlspecialchars($dosen['gelar_profesor']) ?>
                    </p>
                </div>

                <div class="space-y-8">
                    
                    <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-800 mb-6 border-b pb-3 flex items-center gap-3">
                            <span class="bg-[#800000] text-white w-8 h-8 flex items-center justify-center rounded text-sm">🎓</span>
                            Riwayat Pendidikan
                        </h3>
                        
                        <div class="space-y-0">
                            <?php 
                            $edu_count = 0;
                            while($edu = $pendidikan->fetch_assoc()): 
                                $edu_count++;
                            ?>
                            <div class="flex gap-4 pb-8 last:pb-0 border-l-2 border-gray-200 ml-3 pl-8 relative group">
                                
                                <div>
                                    <h4 class="text-lg font-bold text-gray-800"><?= $edu['institusi'] ?></h4>
                                    <div class="text-gray-600 mb-2"><?= $edu['jurusan'] ?? '' ?></div>
                                    <span class="inline-block bg-gray-100 text-gray-600 text-xs px-2 py-1 rounded font-bold border border-gray-200">
                                        <?= $edu['jenjang'] ?> &bull; Lulus <?= $edu['tahun_lulus'] ?>
                                    </span>
                                </div>
                            </div>
                            <?php endwhile; ?>

                            <?php if($edu_count == 0): ?>
                                <p class="text-gray-500 italic pl-4">Data pendidikan belum tersedia.</p>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="bg-white p-8 rounded-lg shadow-sm border border-gray-200">
                        <div class="flex justify-between items-center mb-6 border-b pb-3">
                            <h3 class="text-xl font-bold text-gray-800 flex items-center gap-3">
                                <span class="bg-yellow-500 text-white w-8 h-8 flex items-center justify-center rounded text-sm">📚</span>
                                Publikasi Ilmiah
                            </h3>
                            <span class="text-xs font-semibold bg-blue-50 text-blue-700 px-2 py-1 rounded border border-blue-100">
                                Terindeks Scholar
                            </span>
                        </div>
                        
                        <div class="max-h-200 overflow-y-auto custom-scroll pr-2">
                            <ul class="space-y-3">
                                <?php 
                                $pub_count = 0;
                                while($pub = $publikasi->fetch_assoc()): 
                                    $pub_count++;
                                ?>
                                <li class="p-4 rounded-lg bg-white border border-gray-100 hover:border-[#800000] hover:shadow-md transition-all group flex gap-4 items-start">
                                    <div class="text-gray-200 font-black text-2xl leading-none select-none group-hover:text-red-100 transition">
                                        <?= str_pad($pub_count, 2, '0', STR_PAD_LEFT) ?>
                                    </div>
                                    <div class="flex-1">
                                        <a href="<?= htmlspecialchars($dosen['link_scholar']) ?>" target="_blank" class="text-[15px] font-semibold text-gray-800 leading-relaxed group-hover:text-[#800000] transition font-serif-custom block">
                                            "<?= $pub['judul'] ?>"
                                        </a>
                                        <div class="flex flex-wrap items-center gap-3 text-xs text-gray-500 mt-2">
                                            <span class="bg-gray-100 px-2 py-0.5 rounded border border-gray-200 font-medium">
                                                <?= $pub['jenis'] ?>
                                            </span>
                                            <span class="flex items-center gap-1">
                                                🗓️ <?= $pub['tahun'] ?>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <?php endwhile; ?>
                            </ul>

                            <?php if($pub_count == 0): ?>
                                <div class="text-center py-10 bg-gray-50 rounded border border-dashed border-gray-300">
                                    <p class="text-gray-500 italic">Belum ada data publikasi.</p>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>