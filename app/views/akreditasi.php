<?php
// 1. KONEKSI DATABASE
$conn = new mysqli("localhost", "root", "", "unsoed_db");
if ($conn->connect_error) { die("Koneksi gagal: " . $conn->connect_error); }

// 2. AMBIL DATA UTAMA (PRODI)
$sqlProdi = "SELECT * FROM akreditasi_prodi ORDER BY no_urut ASC";
$resultProdi = $conn->query($sqlProdi);

$prodiData = []; // Array penampung untuk Loop HTML nanti

if ($resultProdi->num_rows > 0) {
    while($row = $resultProdi->fetch_assoc()) {
        $prodiId = $row['id'];
        
        // Ambil File SK berdasarkan Prodi ID
        $sqlFiles = "SELECT * FROM akreditasi_files WHERE prodi_id = $prodiId";
        $resultFiles = $conn->query($sqlFiles);
        $files = [];
        
        while($file = $resultFiles->fetch_assoc()) {
            $files[] = [
                'sk' => $file['sk'],
                'periode' => $file['periode'],
                'link' => $file['link'],
                'btn_label' => $file['btn_label'],
                // Cek jika is_special bernilai 1 (true)
                'is_special' => ($file['is_special'] == 1) ? true : false
            ];
        }

        // Susun data agar formatnya sama persis dengan array manual sebelumnya
        $prodiData[] = [
            'no' => $row['no_urut'],
            'nama' => $row['nama'],
            'info' => $row['info'],
            'strata' => $row['strata'],
            'peringkat' => $row['peringkat'],
            'sub_badge' => $row['sub_badge'],
            'files' => $files // Array files dimasukkan ke sini
        ];
    }
}

// 3. AMBIL DATA ARSIP LAINNYA
$sqlArsip = "SELECT * FROM akreditasi_arsip";
$resultArsip = $conn->query($sqlArsip);
$arsipLain = [];

if ($resultArsip->num_rows > 0) {
    while($row = $resultArsip->fetch_assoc()) {
        $arsipLain[] = [
            'label' => $row['label'],
            'link' => $row['link']
        ];
    }
}

// SETUP HALAMAN
$page_title = 'Akreditasi';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php'; 
?>

<div class="bg-gray-50 font-sans text-gray-800 w-full min-h-screen">
    
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4 md:px-8 max-w-7xl">
            
            <div class="mb-10 text-center max-w-3xl mx-auto">
                <h2 class="text-3xl font-bold text-[#002b54] mb-4">Status Akreditasi Nasional & Internasional</h2>
                <p class="text-gray-600">Data terkini status akreditasi Program Studi di Fakultas Hukum UNSOED.</p>
            </div>

            <div class="bg-white rounded-xl shadow-lg border border-gray-200 overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-250">
                        <thead class="bg-[#002b54] text-white">
                            <tr>
                                <th class="p-5 font-bold text-sm uppercase tracking-wider w-12 text-center border-r border-[#004080]">No</th>
                                <th class="p-5 font-bold text-sm uppercase tracking-wider w-1/5 border-r border-[#004080]">Program Studi</th>
                                <th class="p-5 font-bold text-sm uppercase tracking-wider w-24 border-r border-[#004080]">Strata</th>
                                <th class="p-5 font-bold text-sm uppercase tracking-wider w-1/4 border-r border-[#004080]">Nomor SK</th>
                                <th class="p-5 font-bold text-sm uppercase tracking-wider w-1/5 border-r border-[#004080]">Masa Berlaku</th>
                                <th class="p-5 font-bold text-sm uppercase tracking-wider text-center border-r border-[#004080]">Peringkat</th>
                                <th class="p-5 font-bold text-sm uppercase tracking-wider text-center w-40">Lihat File</th>
                            </tr>
                        </thead>

                        <tbody class="text-gray-700 text-sm align-top">
                            <?php foreach ($prodiData as $data): ?>
                            <tr class="border-b border-gray-100 hover:bg-blue-50 transition-colors odd:bg-white even:bg-gray-50 group">
                                
                                <td class="p-5 text-center font-bold text-gray-400 align-middle"><?= $data['no'] ?></td>
                                
                                <td class="p-5 align-middle">
                                    <span class="block font-bold text-[#002b54] text-lg"><?= $data['nama'] ?></span>
                                    <?php if($data['info']): ?>
                                        <span class="text-xs text-gray-500 font-medium"><?= $data['info'] ?></span>
                                    <?php endif; ?>
                                </td>
                                
                                <td class="p-5 font-medium align-middle"><?= $data['strata'] ?></td>

                                <td class="p-5 align-middle">
                                    <div class="space-y-3">
                                        <?php foreach ($data['files'] as $file): ?>
                                            <div class="flex items-center min-h-8">
                                                <span class="font-mono text-xs <?= isset($file['is_special']) && $file['is_special'] ? 'font-bold text-[#002b54]' : 'text-gray-600' ?>">
                                                    <?= $file['sk'] ?>
                                                </span>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </td>

                                <td class="p-5 align-middle">
                                    <div class="space-y-3">
                                        <?php foreach ($data['files'] as $file): ?>
                                            <div class="flex items-center min-h-8">
                                                <span class="text-xs whitespace-nowrap <?= isset($file['is_special']) && $file['is_special'] ? 'font-bold text-[#002b54]' : 'text-gray-500' ?>">
                                                    <?= $file['periode'] ?>
                                                </span>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </td>

                                <td class="p-5 text-center align-middle">
                                    <div class="flex flex-col items-center justify-center gap-1">
                                        <span class="inline-block bg-green-100 text-green-800 px-3 py-1 rounded-full font-bold text-xs border border-green-200 whitespace-nowrap">
                                            <?= $data['peringkat'] ?>
                                        </span>
                                        <?php if($data['sub_badge']): ?>
                                            <span class="block text-[10px] bg-blue-50 text-blue-800 px-2 py-0.5 rounded border border-blue-100 font-semibold whitespace-nowrap">
                                                <?= $data['sub_badge'] ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                </td>

                                <td class="p-5 align-middle">
                                    <div class="space-y-3 w-full">
                                        <?php foreach ($data['files'] as $file): ?>
                                            <div class="flex items-center justify-center min-h-8">
                                                <?php 
                                                    $btnColor = (isset($file['is_special']) && $file['is_special']) 
                                                        ? 'bg-[#004080] hover:bg-[#002b54] border-[#003366]' 
                                                        : 'bg-yellow-500 hover:bg-yellow-600 border-yellow-600';
                                                ?>
                                                <a href="<?= $file['link'] ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-2 text-[10px] font-bold text-white <?= $btnColor ?> px-3 py-1.5 rounded shadow-sm border-b-2 hover:shadow-md transition-all w-full justify-center transform active:scale-95">
                                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" /></svg>
                                                    <?= $file['btn_label'] ?>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </td>

                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <section class="py-12 bg-gray-100 border-t border-gray-200">
        <div class="container mx-auto px-4 md:px-8 max-w-7xl">
            <h3 class="text-xl font-bold text-[#002b54] mb-6 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" /></svg>
                Arsip Akreditasi Lainnya
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <?php foreach($arsipLain as $arsip): ?>
                <a href="<?= $arsip['link'] ?>" target="_blank" rel="noopener noreferrer" class="flex items-center gap-3 p-4 bg-white rounded-lg shadow-sm border border-gray-200 hover:shadow-md hover:border-yellow-400 transition-all group">
                    <div class="w-8 h-8 bg-red-50 text-red-500 rounded flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"/></svg>
                    </div>
                    <div class="overflow-hidden">
                        <p class="text-xs font-bold text-gray-700 group-hover:text-[#002b54] truncate"><?= $arsip['label'] ?></p>
                        <span class="text-[10px] text-gray-400">Lihat Dokumen</span>
                    </div>
                </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</div>