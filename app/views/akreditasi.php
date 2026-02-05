<?php
// 1. KONEKSI DATABASE
$conn = new mysqli("localhost", "root", "", "unsoed_db");
if ($conn->connect_error) { die("Koneksi gagal: " . $conn->connect_error); }

// 2. AMBIL DATA UTAMA (PRODI)
$sqlProdi = "SELECT * FROM akreditasi_prodi ORDER BY no_urut ASC";
$resultProdi = $conn->query($sqlProdi);

$prodiData = [];

if ($resultProdi->num_rows > 0) {
    while($row = $resultProdi->fetch_assoc()) {
        $prodiId = $row['id'];
        
        // Ambil File SK
        $sqlFiles = "SELECT * FROM akreditasi_files WHERE prodi_id = $prodiId";
        $resultFiles = $conn->query($sqlFiles);
        $files = [];
        
        while($file = $resultFiles->fetch_assoc()) {
            $files[] = [
                'sk' => $file['sk'],
                'periode' => $file['periode'],
                'link' => $file['link'],
                'btn_label' => $file['btn_label'],
                'is_special' => ($file['is_special'] == 1) ? true : false
            ];
        }

        // Masukkan ke array utama
        $prodiData[] = [
            'nama' => $row['nama'],
            'info' => $row['info'],
            'strata' => $row['strata'],
            'peringkat' => $row['peringkat'],
            'sub_badge' => $row['sub_badge'],
            'files' => $files
        ];
    }
}

// 3. AMBIL DATA ARSIP LAINNYA
$sqlArsip = "SELECT * FROM akreditasi_arsip ORDER BY id ASC";
$resultArsip = $conn->query($sqlArsip);
$arsipLain = [];
while($row = $resultArsip->fetch_assoc()) {
    $arsipLain[] = $row;
}

$page_title = 'Akreditasi';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php';
?>

<div class="container mx-auto px-4 py-12 mb-20 animate-fade-in-up">
    
    <div class="text-center max-w-3xl mx-auto mb-16">
        <h2 class="text-3xl md:text-4xl font-extrabold text-[#002b54] mb-4">Status Akreditasi</h2>
        <div class="h-1.5 w-24 bg-yellow-400 mx-auto rounded-full mb-6"></div>
        <p class="text-gray-600 leading-relaxed text-lg">
            Berikut adalah status akreditasi Program Studi di lingkungan Fakultas Hukum Universitas Jenderal Soedirman.
        </p>
    </div>

    <div class="space-y-12">
        <?php foreach($prodiData as $prodi): ?>
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            
            <div class="bg-linear-to-r from-[#002b54] to-[#004080] p-6 text-white flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <div class="flex items-center gap-4">
                    <div class="w-14 h-14 bg-white/10 backdrop-blur rounded-xl flex items-center justify-center font-bold text-2xl border border-white/20 shadow-inner">
                        <?= $prodi['strata'] ?>
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold tracking-tight"><?= $prodi['nama'] ?></h3>
                        <p class="text-blue-100 text-sm font-medium opacity-90"><?= $prodi['info'] ?></p>
                    </div>
                </div>

                <div class="flex flex-col items-end gap-1">
                    <div class="px-5 py-2 bg-yellow-400 text-[#002b54] text-sm font-bold rounded-full shadow-lg transform hover:scale-105 transition-transform">
                        TERAKREDITASI <?= strtoupper($prodi['peringkat']) ?>
                    </div>
                    <?php if($prodi['sub_badge']): ?>
                    <div class="px-3 py-1 bg-white/20 text-xs font-semibold rounded-md border border-white/30 backdrop-blur-sm">
                        <?= $prodi['sub_badge'] ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="p-6 bg-gray-50">
                <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">
                    <?php foreach($prodi['files'] as $f): ?>
                    
                    <div class="bg-white p-5 rounded-xl border border-gray-200 shadow-sm hover:border-blue-400 hover:shadow-md transition-all group flex flex-col h-full">
                        
                        <div class="mb-3 flex items-start justify-between">
                            <?php if($f['is_special']): ?>
                                <span class="bg-blue-100 text-blue-800 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">International</span>
                            <?php else: ?>
                                <span class="bg-gray-100 text-gray-600 text-[10px] font-bold px-2 py-1 rounded uppercase tracking-wider">Nasional</span>
                            <?php endif; ?>
                            <svg class="w-5 h-5 text-gray-300 group-hover:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                        </div>
                        
                        <div class="space-y-2 mb-4 grow">
                            <p class="text-sm font-bold text-gray-800 wrap-break-word leading-snug">
                                <?= $f['sk'] ?>
                            </p>
                            <p class="text-xs text-gray-500 font-medium flex items-center gap-1">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                <?= $f['periode'] ?>
                            </p>
                        </div>

                        <div class="mt-auto">
                            <?php if($f['link'] && $f['link'] != '#'): ?>
                                <a href="<?= $f['link'] ?>" target="_blank" class="block w-full text-center py-2.5 rounded-lg text-sm font-bold transition-all border-2
                                    <?= $f['is_special'] 
                                        ? 'bg-blue-600 text-white border-blue-600 hover:bg-blue-700 hover:border-blue-700' 
                                        : 'bg-white hover:border-yellow-400 hover:text-[#002b54] hover:bg-yellow-50' 
                                    ?>">
                                    <?= $f['btn_label'] ?>
                                </a>
                            <?php else: ?>
                                <button disabled class="block w-full text-center py-2.5 rounded-lg text-sm font-bold bg-gray-100 text-gray-400 cursor-not-allowed border border-gray-200">
                                    Belum Tersedia
                                </button>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>

    <?php if(!empty($arsipLain)): ?>
    <div class="mt-20 pt-10 border-t border-gray-200">
        <div class="bg-gray-50 rounded-2xl p-8 border border-gray-200">
            <h3 class="text-xl font-bold text-gray-800 mb-6 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" /></svg>
                Arsip Akreditasi Lainnya
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <?php foreach($arsipLain as $arsip): ?>
                <a href="<?= $arsip['link'] ?>" target="_blank" rel="noopener noreferrer" class="flex items-start gap-3 p-4 bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md hover:border-yellow-400 transition-all group h-full">
                    <div class="w-8 h-8 bg-red-50 text-red-500 rounded flex items-center justify-center shrink-0 mt-1">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"></path></svg>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-700 leading-tight group-hover:text-[#002b54]">
                            <?= $arsip['label'] ?>
                        </p>
                    </div>
                    <div class="text-gray-300 group-hover:text-yellow-500 shrink-0 mt-1">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <?php endif; ?>

</div>