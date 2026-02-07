<?php 
$page_title = 'Visi Misi';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php'; 

// Data Arrays untuk kebersihan kode (Simpel)
$misi_items = [
    "Menyelenggarakan pendidikan hukum sesuai standar akademik dengan integritas moral yang baik guna menghasilkan lulusan yang memiliki kompetensi yang tinggi, profesional, dan berdaya saing global.",
    "Menyelenggarakan penelitian dengan roadmap yang konsisten serta berorientasi pada pengembangan ilmu hukum dan bermanfaat bagi masyarakat serta pembangunan nasional.",
    "Menyelenggarakan pengabdian kepada masyarakat berdasarkan kompetensi para dosen dan / atau mahasiswa untuk membantu mengatasi permasalahan yang ada di masyarakat serta mendukung pembangunan nasional.",
    "Mengembangkan kegiatan kerjasama dan membangun jejaring dengan berbagai pihak di tingkat daerah, nasional maupun internasional yang relevan dengan bidang Tri Dharma Perguruan Tinggi.",
    "Menyelenggarakan monitoring dan evaluasi serta menindaklanjuti hasilnya secara konsisten dalam upaya menjaga dan / atau meningkatkan kualitas proses maupun output Tri Dharma Perguruan Tinggi."
];

$tujuan_items = [
    "Meningkatkan kualitas proses pendidikan guna menghasilkan lulusan yang memiliki kompetensi yang tinggi.",
    "Meningkatkan kualitas akademik dan profesionalitas tenaga kependidikan.",
    "Meningkatkan manajemen kinerja internal sesuai dengan perkembangan situasi global.",
    "Meningkatkan relevansi pendidikan dan perkembangan Ilmu Hukum sesuai kebutuhan masyarakat.",
    "Meningkatkan suasana akademik yang kondusif."
];

$sasaran_items = [
    "Meningkatnya relevansi program studi terhadap kebutuhan stakeholders.",
    "Meningkatnya kompetensi dan daya saing lulusan global.",
    "Efisiensi & produktivitas pengelolaan pendidikan.",
    "Suasana akademik yang kondusif.",
    "Sistem informasi manajemen berkualitas.",
    "Sistem monitoring & evaluasi yang akuntabel.",
    "Kualitas pendidik & tenaga kependidikan.",
    "Kualitas & kuantitas penelitian.",
    "Kualitas & kuantitas pengabdian masyarakat.",
    "Revenue generating activities (RGA).",
    "Desiminasi riset nasional & internasional."
];
?>

<div class="bg-gray-50 min-h-screen font-sans text-slate-800 py-16">
    <div class="container mx-auto px-4 md:px-8 max-w-7xl">

        <div class="mb-12">
            <div class="bg-[#002b54] rounded-3xl p-10 md:p-14 text-center relative overflow-hidden shadow-2xl shadow-blue-900/20 group">
                <div class="absolute top-0 right-0 w-64 h-64 bg-blue-500/20 rounded-full blur-3xl -mr-16 -mt-16 group-hover:bg-blue-500/30 transition-all duration-700"></div>
                <div class="absolute bottom-0 left-0 w-40 h-40 bg-yellow-500/20 rounded-full blur-3xl -ml-10 -mb-10 group-hover:bg-yellow-500/30 transition-all duration-700"></div>
                
                <h2 class="text-blue-200 uppercase tracking-[0.2em] text-sm font-bold mb-6">Visi Fakultas</h2>
                <p class="text-2xl md:text-4xl font-semibold text-white leading-relaxed max-w-4xl mx-auto relative z-10">
                    "Pada tahun 2025 menjadi Fakultas Hukum yang <span class="text-yellow-400">unggul</span> di tingkat nasional, berbasis pada <span class="text-yellow-400">nilai moral & kearifan lokal</span> serta berdaya saing <span class="text-yellow-400">global</span>."
                </p>
            </div>
        </div>

        <div class="mb-16">
            <div class="flex items-center gap-4 mb-8">
                <span class="w-10 h-[2px] bg-[#002b54]"></span>
                <h3 class="text-xl font-bold text-[#002b54]">Misi Strategis</h3>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <?php foreach($misi_items as $index => $misi): ?>
                <div class="bg-white p-8 rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 relative overflow-hidden group">
                    <span class="absolute top-0 right-0 bg-gray-50 text-gray-200 text-6xl font-bold -mt-2 -mr-2 opacity-50 group-hover:text-blue-50 transition-colors">
                        <?= $index + 1 ?>
                    </span>
                    <div class="relative z-10">
                        <div class="w-10 h-10 rounded-lg bg-blue-50 text-[#002b54] flex items-center justify-center font-bold mb-4 border border-blue-100 group-hover:bg-[#002b54] group-hover:text-white transition-colors">
                            <?= $index + 1 ?>
                        </div>
                        <p class="text-slate-600 leading-relaxed text-sm md:text-base text-justify">
                            <?= $misi ?>
                        </p>
                    </div>
                    <div class="absolute bottom-0 left-0 h-1 w-0 bg-[#002b54] group-hover:w-full transition-all duration-500"></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
            
            <div class="lg:col-span-4 bg-white rounded-3xl p-8 border border-gray-100 shadow-sm">
                <h3 class="text-xl font-bold text-[#002b54] mb-6 flex items-center gap-3">
                    <svg class="w-6 h-6 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" /></svg>
                    Tujuan
                </h3>
                <ul class="space-y-6">
                    <?php foreach($tujuan_items as $tujuan): ?>
                    <li class="flex items-start gap-3 group">
                        <span class="mt-1.5 w-1.5 h-1.5 bg-gray-300 rounded-full group-hover:bg-yellow-500 group-hover:scale-150 transition-all duration-300 shrink-0"></span>
                        <span class="text-sm text-slate-600 group-hover:text-slate-900 transition-colors text-justify"><?= $tujuan ?></span>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <div class="lg:col-span-8 bg-slate-50 rounded-3xl p-8 border border-slate-200/60">
                <h3 class="text-xl font-bold text-[#002b54] mb-6 flex items-center gap-3">
                    <svg class="w-6 h-6 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    Sasaran & Target
                </h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <?php foreach($sasaran_items as $sasaran): ?>
                    <div class="flex items-center p-3 bg-white rounded-xl border border-white shadow-sm hover:border-blue-200 transition-colors">
                        <svg class="w-4 h-4 text-green-500 mr-3 shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                        <span class="text-sm text-slate-700 font-medium"><?= $sasaran ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>

    </div>
</div>