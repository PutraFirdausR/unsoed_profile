<?php
$page_title = 'Magister Kenotariatan';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php'; 
require __DIR__ . '/../data/mkn_data.php';

function renderSectionTitle($title) {
    echo '<div class="flex items-center gap-3 mb-6">';
    echo '<div class="w-1.5 h-8 bg-yellow-400 rounded-full"></div>';
    echo '<h2 class="text-2xl md:text-3xl font-bold text-[#8B0000]">' . $title . '</h2>';
    echo '</div>';
}
?>

<div class="bg-gray-50 min-h-screen font-sans text-gray-800 py-16 scroll-smooth">
    <div class="container mx-auto px-4 md:px-8 max-w-7xl">

        <div class="mb-10 border-b border-gray-200 pb-6">
            <h1 class="text-3xl md:text-5xl font-extrabold text-[#8B0000] mb-4">
                Magister Kenotariatan (M.Kn)
            </h1>
            <p class="text-gray-500 text-lg max-w-3xl leading-relaxed">
                Mencetak lulusan ahli hukum kenotariatan yang profesional, bermoral, dan menguasai formulasi akta hukum berbasis kearifan lokal.
            </p>
            <div class="mt-4 inline-block bg-yellow-100 border border-yellow-300 text-yellow-800 text-sm font-bold px-4 py-1.5 rounded-full">
                Terakreditasi "B" BAN-PT
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 md:gap-12 relative">
            
            <aside class="hidden lg:block lg:col-span-1">
                <?php include __DIR__ . '/../components/sidebar_mkn.php'; ?>
            </aside>

            <main class="lg:col-span-3 space-y-16">
                
                <section id="visi-misi" class="scroll-mt-28">
                    <?php renderSectionTitle("Visi & Misi"); ?>
                    
                    <div class="space-y-6">
                        <div class="bg-[#8B0000] text-white rounded-xl p-8 shadow-md relative overflow-hidden">
                            <div class="absolute top-0 right-0 p-4 opacity-10">
                                <svg class="w-32 h-32" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2L1 7l11 5 9-4.09V17h2V7L12 2zm1 14.55C10.61 16.1 8.89 15.65 7.5 15.65c-3.15 0-5.5 2.05-5.5 5.35C2 22.95 4.5 24 7.5 24c3.55 0 6.5-1.9 6.5-5.1 0-2.3-1.6-3.8-3.45-4.55l1.45-2.2c2.75 1.55 4.5 4.05 4.5 6.75h2c0-3.5-2.25-6.55-5.5-8.35l-1 1.6z"/></svg>
                            </div>
                            <h3 class="text-xl font-bold text-yellow-400 mb-2 uppercase tracking-wider">Visi</h3>
                            <p class="text-lg leading-relaxed font-light italic">
                                "<?= $visi ?>"
                            </p>
                        </div>

                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
                            <h3 class="text-xl font-bold text-[#8B0000] mb-4 flex items-center gap-2">
                                <span class="w-2 h-6 bg-[#8B0000] rounded"></span> Misi
                            </h3>
                            <ul class="space-y-3">
                                <?php foreach($misi as $item): ?>
                                <li class="flex items-start gap-3 text-gray-700">
                                    <svg class="w-5 h-5 text-yellow-500 shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <span class="text-justify"><?= $item ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </section>

                <section id="seleksi" class="scroll-mt-28">
                    <?php renderSectionTitle("Informasi Akademik"); ?>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 h-full">
                            <h3 class="font-bold text-[#8B0000] mb-4 text-lg border-b border-gray-100 pb-2">Materi Seleksi</h3>
                            <ul class="space-y-4">
                                <?php foreach($materi_seleksi as $idx => $materi): ?>
                                <li class="flex gap-3">
                                    <div class="shrink-0 w-8 h-8 bg-red-100 text-red-700 rounded-full flex items-center justify-center font-bold text-sm">
                                        <?= $idx + 1 ?>
                                    </div>
                                    <p class="text-gray-700 text-sm mt-1"><?= $materi ?></p>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="bg-[#fdfaf0] rounded-xl shadow-sm border border-yellow-100 p-6 h-full relative overflow-hidden group">
                            <div class="absolute top-0 right-0 w-24 h-24 bg-yellow-200 rounded-bl-full -mr-12 -mt-12 opacity-40 group-hover:scale-110 transition"></div>
                            
                            <h3 class="font-bold text-[#8B0000] mb-5 text-lg border-b border-yellow-200 pb-2 relative z-10">
                                Sistem & Beban Studi
                            </h3>
                            
                            <div class="space-y-5 relative z-10">
                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center shadow-sm text-xl">🎓</div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 text-sm">Gelar Akademik</h4>
                                        <p class="text-sm text-gray-600">Magister Kenotariatan (M.Kn)</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center shadow-sm text-xl">📚</div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 text-sm">Beban Studi</h4>
                                        <p class="text-sm text-gray-600">Total 42 SKS (Wajib + Pilihan)</p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div class="w-10 h-10 rounded-lg bg-white flex items-center justify-center shadow-sm text-xl">⏳</div>
                                    <div>
                                        <h4 class="font-bold text-gray-800 text-sm">Masa Studi</h4>
                                        <p class="text-sm text-gray-600">Ditempuh min. 3 Semester</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>

                <section id="dosen" class="scroll-mt-28">
                    <?php renderSectionTitle("Dosen Pengajar"); ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <?php foreach($dosen_tetap as $idx => $dosen): ?>
                        <div class="flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm border border-gray-100 hover:shadow-md transition group">
                            <div class="w-10 h-10 rounded-full bg-red-50 text-[#8B0000] flex items-center justify-center font-bold text-sm border border-red-100 group-hover:bg-[#8B0000] group-hover:text-white transition">
                                <?= $idx + 1 ?>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-800 text-sm md:text-base group-hover:text-red-700 transition">
                                    <?= $dosen ?>
                                </h4>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </section>

                <section id="struktur" class="scroll-mt-28">
                    <?php renderSectionTitle("Struktur Organisasi"); ?>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        
                        <div class="bg-white rounded-xl shadow border-t-4 border-[#8B0000] p-6 text-center">
                            <div class="w-16 h-16 mx-auto rounded-full bg-gray-200 mb-3 flex items-center justify-center text-2xl">🏛️</div>
                            <h3 class="text-sm font-bold text-gray-800 mb-1">Prof. Dr. Riris Ardhanariswari, S.H., M.H.</h3>
                            <p class="text-xs font-bold text-gray-500 uppercase">Dekan / Penanggung Jawab</p>
                        </div>

                        <div class="bg-white rounded-xl shadow border-t-4 border-yellow-400 p-6 text-center transform md:-translate-y-4">
                            <div class="w-20 h-20 mx-auto rounded-full bg-gray-200 mb-3 flex items-center justify-center text-3xl">👨‍⚖️</div>
                            <h3 class="text-base font-bold text-[#8B0000] mb-1">Prof. Dr. Kartono, S.H., M.H.</h3>
                            <p class="text-xs font-bold text-yellow-600 uppercase">Ketua Program Studi</p>
                        </div>

                        <div class="bg-white rounded-xl shadow border-t-4 border-gray-400 p-6 text-center">
                            <div class="w-16 h-16 mx-auto rounded-full bg-gray-200 mb-3 flex items-center justify-center text-2xl">📝</div>
                            <h3 class="text-sm font-bold text-gray-800 mb-1">Maolana Isaq Purba, S.E.</h3>
                            <p class="text-xs font-bold text-gray-500 uppercase">Staf Administrasi</p>
                        </div>

                    </div>
                </section>

                <section id="sekretariat" class="scroll-mt-28">
                    <?php renderSectionTitle("Sekretariat"); ?>
                    <div class="bg-red-50 rounded-xl p-8 border border-red-100 flex flex-col md:flex-row items-center gap-6">
                        <div class="w-16 h-16 bg-[#8B0000] rounded-full flex items-center justify-center text-white text-2xl shrink-0">
                            📍
                        </div>
                        <div class="flex-1">
                            <h3 class="font-bold text-[#8B0000] text-lg mb-2">Lokasi & Kontak</h3>
                            <p class="text-gray-700 leading-relaxed">
                                <strong>Kompleks Fakultas Hukum Universitas Jenderal Soedirman</strong><br>
                                Graha Adhyaksa (Gedung Justisia 6) Lantai 2<br>
                                Jl. Prof. Dr. HR. Boenyamin 708, Purwokerto
                            </p>
                        </div>
                        <div class="shrink-0">
                            <a href="tel:0281638339" class="px-6 py-3 bg-white border border-[#8B0000] text-[#8B0000] font-bold rounded-lg hover:bg-[#8B0000] hover:text-white transition flex items-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                                (0281) 638339
                            </a>
                        </div>
                    </div>
                </section>
            </main>
        </div>
    </div>
</div>