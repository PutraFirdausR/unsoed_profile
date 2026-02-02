<?php
// 1. KONEKSI DATABASE
$conn = new mysqli("localhost", "root", "", "unsoed_db");
if ($conn->connect_error) { die("Koneksi Error: " . $conn->connect_error); }

// 2. AMBIL DATA (Diurutkan Nama A-Z)
$sql = "SELECT * FROM guru_besar ORDER BY nama ASC";
$result = $conn->query($sql);

// Fungsi sederhana untuk inisial nama (jika foto kosong)
function getInitials($string = null) {
    if (!$string) return 'GB';
    $words = explode(' ', $string);
    $initials = '';
    foreach ($words as $w) {
        $initials .= strtoupper(substr($w, 0, 1));
    }
    return substr($initials, 0, 2);
}

$page_title = 'Guru Besar';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php'; 
?>

<div class="bg-white py-16 border-b border-gray-200">
    <div class="container mx-auto px-4 max-w-4xl text-center">
        <h2 class="text-2xl font-bold text-gray-800 mb-4 font-serif-custom">Pilar Keilmuan & Integritas</h2>
        <p class="text-gray-600 text-lg leading-relaxed">
            Guru Besar merupakan jabatan akademik tertinggi yang mencerminkan dedikasi mendalam terhadap pengembangan ilmu hukum. 
            Berikut adalah profil para Guru Besar yang menjadi ujung tombak keunggulan akademik Fakultas Hukum Universitas Jenderal Soedirman.
        </p>
    </div>
</div>

<div class="bg-gray-50 py-16 min-h-screen">
    <div class="container mx-auto px-4 max-w-7xl">
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                
                <div class="bg-white rounded-lg overflow-hidden border border-gray-200 shadow-sm hover:shadow-xl transition-all duration-300 group flex flex-col h-full">
                    
                    <div class="h-64 overflow-hidden relative bg-gray-200">
                        <?php if (!empty($row['foto'])): ?>
                            <img src="/unsoed_profile/public/<?= $row['foto'] ?>" 
                                 alt="<?= htmlspecialchars($row['nama']) ?>" 
                                 class="w-full h-full object-cover object-top grayscale group-hover:grayscale-0 transition duration-500 transform group-hover:scale-105"
                                 onerror="this.onerror=null; this.src=''; this.parentElement.innerHTML='<div class=\'w-full h-full flex items-center justify-center bg-[#800000] text-white text-4xl font-bold\'><?= getInitials($row['nama']) ?></div>';">
                        <?php else: ?>
                            <div class="w-full h-full flex items-center justify-center bg-[#800000] text-white text-4xl font-bold">
                                <?= getInitials($row['nama']) ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <div class="p-5 text-center grow flex flex-col">
                        <h3 class="text-lg font-bold text-gray-800 mb-2 leading-snug font-serif-custom group-hover:text-[#800000] transition">
                            <?= htmlspecialchars($row['nama']) ?>
                        </h3>
                        
                        <div class="mb-4">
                            <span class="inline-block px-3 py-1 bg-red-50 text-[#800000] text-[10px] font-bold uppercase tracking-wider rounded border border-red-100">
                                <?= htmlspecialchars($row['jabatan'] ?? 'Guru Besar') ?>
                            </span>
                        </div>
                        
                        <div class="mt-auto pt-4 border-t border-gray-100 w-full">
                            <a href="detail_dosen?id=<?= $row['id'] ?>" 
                               class="inline-flex items-center justify-center w-full px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded hover:bg-[#800000] hover:border-[#800000] transition-colors">
                                Lihat Profil Lengkap
                            </a>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>
            <?php else: ?>
                <div class="col-span-full text-center py-20">
                    <p class="text-gray-500 italic text-lg">Data Guru Besar belum tersedia di database.</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>