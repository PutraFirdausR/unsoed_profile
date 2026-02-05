<?php
// =========================================================================
// 1. KONEKSI & LOAD DATA DARI DATABASE
// =========================================================================

// --- KONFIGURASI DATABASE ---
$host = "localhost";
$user = "root";
$pass = "";
$db   = "unsoed_db"; 

// Buat koneksi
$conn = new mysqli($host, $user, $pass, $db);

// Cek error koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error . " (Pastikan config database benar)");
}

// Fungsi bantu ambil data
function getKerjasama($conn, $kategori) {
    $data = [];
    $kategori = $conn->real_escape_string($kategori);
    $sql = "SELECT * FROM data_kerjasama WHERE kategori = '$kategori' ORDER BY id ASC";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        $no = 1;
        while($row = $result->fetch_assoc()) {
            $data[] = [
                'no'    => $no++, 
                'mitra' => $row['mitra'],
                'level' => $row['level'], // Pastikan kolom level ada di DB
                'judul' => $row['judul'],
                // PERBAIKAN PENTING:
                // Database pakai 'periode', tapi JS Abang mintanya 'waktu'.
                // Jadi kita ubah disini biar match & gak error.
                'waktu' => $row['periode'] 
            ];
        }
    }
    return $data;
}

// Ambil data ke variabel
$researchData  = getKerjasama($conn, 'penelitian');
$communityData = getKerjasama($conn, 'pengabdian');
$educationData = getKerjasama($conn, 'pendidikan');

// Tutup koneksi
$conn->close();

// =========================================================================
// 2. TAMPILAN PAGE (DESAIN TETAP ORIGINAL)
// =========================================================================

$page_title = 'Kerjasama';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php';
?>

<div class="bg-gray-50 font-sans text-gray-800 w-full min-h-screen ">

    <div class="container mx-auto px-4 md:px-6 lg:px-8 max-w-7xl relative z-20 py-16 space-y-12">

        <div class="w-full">
            <h2 class="text-3xl font-bold text-[#002b54] mb-6 border-b-2 border-yellow-400 pb-3 inline-block">Komitmen Kerjasama Fakultas Hukum UNSOED</h2>
            <div class="text-slate-600 text-lg leading-relaxed space-y-4 text-justify">
                <p>
                    Dalam rangka mendukung visi dan misi dari <strong>Fakultas Hukum UNSOED</strong>, maka diperlukan peningkatan kualitas pendidikan, penelitian, maupun pengabdian kepada masyarakat. Untuk mendukung hal tersebut diperlukan sebuah komitmen untuk memperluas jaringan dan komunikasi kepada berbagai macam lembaga yang ada di Indonesia.
                </p>
                <p>
                    Hal tersebut diwujudkan dengan membuka kesempatan melakukan perjanjian kerjasama dengan instansi lain. Baik itu perguruan tinggi, lembaga pemerintahan, sektor swasta, maupun organisasi non pemerintah. Semakin banyaknya kerjasama dengan berbagai sektor akan semakin memperkaya wawasan akademik, memperkuat kompetensi profesional, serta memberikan kontribusi nyata dalam pengembangan kebijakan hukum dan keadilan di Indonesia.
                </p>
                <p class="font-bold text-[#002b54] pt-2">
                    Berikut adalah daftar kerjasama yang telah terjalin:
                </p>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/60 border border-white overflow-hidden">
            <div class="px-8 py-10 border-b border-gray-100 bg-white">
                <div class="flex flex-col xl:flex-row justify-between items-start xl:items-center gap-8">
                    <div class="flex items-center gap-5">
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 flex items-center justify-center text-blue-600 shadow-sm shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-slate-800 tracking-tight">Penelitian & Riset</h2>
                            <p class="text-slate-500 text-base mt-2">Daftar kolaborasi riset akademik dan pengembangan hukum.</p>
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 w-full xl:w-auto mt-4 xl:mt-0">
                        <div class="relative group w-full sm:w-80">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-blue-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                            </div>
                            <input type="text" id="searchResearch" class="block w-full h-12 pl-12 pr-4 bg-gray-50 border border-gray-300 rounded-xl leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200 text-sm font-medium shadow-sm" placeholder="Cari judul atau mitra...">
                        </div>
                        <a href="https://fh.unsoed.ac.id/wp-content/uploads/2020/09/Kerjasama-FH-dalam-Bidang-Penelitian.pdf" target="_blank" class="h-12 inline-flex items-center justify-center px-6 border border-transparent text-sm font-bold rounded-xl text-white bg-blue-600 hover:bg-blue-700 hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-blue-500/30 transition-all duration-200 shadow-lg shadow-blue-600/20 whitespace-nowrap">
                            <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                            Unduh PDF
                        </a>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-50/80 border-b border-gray-200">
                        <tr>
                            <th class="px-8 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider text-center w-20">No</th>
                            <th class="px-6 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider w-1/3">Mitra Kerjasama</th>
                            <th class="px-6 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider w-32">Level</th>
                            <th class="px-6 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider">Judul Kerjasama</th>
                            <th class="px-8 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider w-1/5 text-right">Periode</th>
                        </tr>
                    </thead>
                    <tbody id="tableBodyResearch" class="bg-white divide-y divide-gray-100"></tbody>
                </table>
            </div>

            <div class="bg-white px-8 py-6 border-t border-gray-100 flex items-center justify-between">
                <span class="text-sm font-medium text-gray-500" id="infoResearch">Loading...</span>
                <div class="flex gap-3">
                    <button id="prevResearch" class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-bold text-gray-600 transition-all shadow-sm">Previous</button>
                    <button id="nextResearch" class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-bold text-gray-600 transition-all shadow-sm">Next</button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/60 border border-white overflow-hidden">
            <div class="px-8 py-10 border-b border-gray-100 bg-white">
                <div class="flex flex-col xl:flex-row justify-between items-start xl:items-center gap-8">
                    <div class="flex items-center gap-5">
                        <div class="w-14 h-14 rounded-2xl bg-teal-50 flex items-center justify-center text-teal-600 shadow-sm shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-slate-800 tracking-tight">Pengabdian Masyarakat</h2>
                            <p class="text-slate-500 text-base mt-2">Implementasi Tri Dharma perguruan tinggi kepada publik.</p>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 w-full xl:w-auto mt-4 xl:mt-0">
                        <div class="relative group w-full sm:w-80">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-teal-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                            </div>
                            <input type="text" id="searchCommunity" class="block w-full h-12 pl-12 pr-4 bg-gray-50 border border-gray-300 rounded-xl leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:bg-white focus:ring-2 focus:ring-teal-500 focus:border-transparent transition-all duration-200 text-sm font-medium shadow-sm" placeholder="Cari judul atau mitra...">
                        </div>
                        <a href="https://fh.unsoed.ac.id/wp-content/uploads/2020/09/Kerjasama-FH-dalam-Bidang-Pengabdian-Masyarakat.pdf" target="_blank" class="h-12 inline-flex items-center justify-center px-6 border border-transparent text-sm font-bold rounded-xl text-white bg-teal-600 hover:bg-teal-700 hover:-translate-y-0.5 focus:outline-none focus:ring-4 focus:ring-teal-500/30 transition-all duration-200 shadow-lg shadow-teal-600/20 whitespace-nowrap">
                            <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                            Unduh PDF
                        </a>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-50/80 border-b border-gray-200">
                        <tr>
                            <th class="px-8 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider text-center w-20">No</th>
                            <th class="px-6 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider w-1/3">Mitra Kerjasama</th>
                            <th class="px-6 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider w-32">Level</th>
                            <th class="px-6 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider">Judul Kerjasama</th>
                            <th class="px-8 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider w-1/5 text-right">Periode</th>
                        </tr>
                    </thead>
                    <tbody id="tableBodyCommunity" class="bg-white divide-y divide-gray-100"></tbody>
                </table>
            </div>

            <div class="bg-white px-8 py-6 border-t border-gray-100 flex items-center justify-between">
                <span class="text-sm font-medium text-gray-500" id="infoCommunity">Loading...</span>
                <div class="flex gap-3">
                    <button id="prevCommunity" class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-bold text-gray-600 transition-all shadow-sm">Previous</button>
                    <button id="nextCommunity" class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-bold text-gray-600 transition-all shadow-sm">Next</button>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-3xl shadow-xl shadow-gray-200/60 border border-white overflow-hidden">
            <div class="px-8 py-10 border-b border-gray-100 bg-white">
                <div class="flex flex-col xl:flex-row justify-between items-start xl:items-center gap-8">
                    <div class="flex items-center gap-5">
                        <div class="w-14 h-14 rounded-2xl bg-indigo-50 flex items-center justify-center text-indigo-600 shadow-sm shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                            </svg>
                        </div>
                        <div>
                            <h2 class="text-3xl font-bold text-slate-800 tracking-tight">Bidang Pendidikan</h2>
                            <p class="text-slate-500 text-base mt-2">Kerjasama pengembangan kurikulum dan pertukaran akademik.</p>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 w-full xl:w-auto mt-4 xl:mt-0">
                         <div class="relative group w-full sm:w-80">
                            <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                                <svg class="h-5 w-5 text-gray-400 group-focus-within:text-indigo-600 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                            </div>
                            <input type="text" id="searchEducation" class="block w-full h-12 pl-12 pr-4 bg-gray-50 border border-gray-300 rounded-xl leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:bg-white focus:ring-2 focus:ring-indigo-500 focus:border-transparent transition-all duration-200 text-sm font-medium shadow-sm" placeholder="Cari judul atau mitra...">
                        </div>
                    </div>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-left border-collapse">
                    <thead class="bg-gray-50/80 border-b border-gray-200">
                        <tr>
                            <th class="px-8 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider text-center w-20">No</th>
                            <th class="px-6 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider w-1/3">Mitra Kerjasama</th>
                            <th class="px-6 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider w-32">Level</th>
                            <th class="px-6 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider">Judul Kerjasama</th>
                            <th class="px-8 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider w-1/5 text-right">Periode</th>
                        </tr>
                    </thead>
                    <tbody id="tableBodyEducation" class="bg-white divide-y divide-gray-100"></tbody>
                </table>
            </div>

            <div class="bg-white px-8 py-6 border-t border-gray-100 flex items-center justify-between">
                <span class="text-sm font-medium text-gray-500" id="infoEducation">Loading...</span>
                <div class="flex gap-3">
                    <button id="prevEducation" class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-bold text-gray-600 transition-all shadow-sm">Previous</button>
                    <button id="nextEducation" class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-bold text-gray-600 transition-all shadow-sm">Next</button>
                </div>
            </div>
        </div>

    </div>
</div>

<script>
    // Data sekarang dinamis dari PHP Database
    window.UNSOED_DATA = {
        research: <?php echo json_encode($researchData); ?>,
        community: <?php echo json_encode($communityData); ?>,
        education: <?php echo json_encode($educationData); ?>
    };
</script>

<script src="/unsoed_profile/public/assets/js/kerjasama.js"></script>