<?php 
$page_title = 'Struktur Organisasi';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php'; 
?>

<section class="py-16 bg-white font-sans border-t border-gray-200">
    <div class="container mx-auto px-6 md:px-12">

        <div class="text-center mb-16">
            <span class="text-yellow-600 font-bold tracking-widest uppercase text-base">Fakultas Hukum UNSOED</span>
            <h2 class="text-3xl md:text-4xl font-bold text-[#002b54] mt-3">Periode Berjalan</h2>
        </div>

        <div class="mb-20">
            <h3 class="text-2xl font-bold text-[#002b54] mb-8 border-l-8 border-yellow-400 pl-6 flex items-center">
                Pimpinan Fakultas
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white p-8 rounded-2xl shadow-md border-t-8 border-[#002b54] hover:shadow-2xl hover:-translate-y-2 transition-all group">
                    <div class="w-12 h-12 bg-yellow-100 rounded-full flex items-center justify-center text-yellow-600 mb-6 group-hover:bg-[#002b54] group-hover:text-yellow-400 transition-colors">
                        <span class="font-bold text-xl">D</span>
                    </div>
                    <span class="block text-sm font-bold text-yellow-600 uppercase tracking-widest mb-2">Dekan</span>
                    <h4 class="text-xl font-bold text-gray-800 leading-snug">Prof. Dr. Riris Ardhanariswari, S.H., M.H.</h4>
                </div>

                <?php
                $wakil_dekan = [
                    ['I', 'Dr. Aryuni Yuliantiningsih, S.H., M.H.'],
                    ['II', 'Dr. Rahadi Wasi Bintoro, S.H., M.H.'],
                    ['III', 'Dr. Siti Kunarti, S.H., M.Hum.']
                ];
                foreach($wakil_dekan as $wd): 
                ?>
                <div class="bg-white p-8 rounded-2xl shadow-sm border border-gray-100 hover:border-yellow-400 hover:shadow-xl hover:-translate-y-2 transition-all">
                    <span class="block text-sm font-bold text-gray-400 uppercase tracking-widest mb-2">Wakil Dekan <?= $wd[0] ?></span>
                    <h4 class="text-xl font-bold text-gray-800 leading-snug"><?= $wd[1] ?></h4>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-20">
            
            <div class="lg:col-span-2 bg-white p-10 rounded-2xl shadow-sm border border-gray-100">
                <h3 class="text-2xl font-bold text-[#002b54] mb-8 flex items-center gap-3">
                    Anggota Senat
                </h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                    <div class="space-y-6">
                        <div class="bg-blue-50 p-6 rounded-xl border-l-4 border-[#002b54]">
                            <span class="block text-sm text-blue-800 uppercase font-bold mb-1">Ketua</span>
                            <span class="font-bold text-xl text-[#002b54]">Prof. Dr. Ade Maman Suherman, S.H., M.Sc.</span>
                        </div>
                        <div class="bg-blue-50 p-6 rounded-xl border-l-4 border-[#002b54]">
                            <span class="block text-sm text-blue-800 uppercase font-bold mb-1">Sekretaris</span>
                            <span class="font-bold text-xl text-[#002b54]">Sri Hartini, S.H., M.H.</span>
                        </div>
                    </div>
                    <div>
                        <span class="block text-sm text-gray-400 uppercase font-bold mb-4 border-b pb-2">Anggota Lainnya</span>
                        <ul class="text-base text-gray-700 space-y-3">
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-yellow-500 rounded-full"></span> Prof. Tri Lisiani Prihatinah, Ph.D.</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-yellow-500 rounded-full"></span> Dr. Dwi Hapsari R., S.H., M.H.</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-yellow-500 rounded-full"></span> Dr. Siti Kunarti, S.H., M.Hum.</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-yellow-500 rounded-full"></span> Manunggal K.W., Ph.D.</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-yellow-500 rounded-full"></span> Agus Mardiyanto, S.H., M.H.</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-yellow-500 rounded-full"></span> Drs. Noor Asyik, M.Ag.</li>
                            <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 bg-yellow-500 rounded-full"></span> Nayla Alawiya, S.H., M.H.</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bg-[#002b54] text-white p-10 rounded-2xl shadow-xl relative overflow-hidden flex flex-col justify-center">
                <div class="absolute top-0 right-0 -mr-16 -mt-16 w-48 h-48 bg-yellow-400 rounded-full opacity-20 blur-3xl"></div>
                <h3 class="text-2xl font-bold text-yellow-400 mb-8 border-b border-white/20 pb-4 z-10">Pimpinan Administrasi</h3>
                <ul class="space-y-8 z-10">
                    <li>
                        <span class="block text-sm text-blue-200 uppercase tracking-wider mb-1 font-semibold">Kepala Bagian Umum</span>
                        <span class="font-bold text-xl">Suparno, S.E.</span>
                    </li>
                    <li>
                        <span class="block text-sm text-blue-200 uppercase tracking-wider mb-1 font-semibold">Ketua Tim Akademik</span>
                        <span class="font-bold text-xl">Sumitro Budi Rahardjo, S.S.</span>
                    </li>
                    <li>
                        <span class="block text-sm text-blue-200 uppercase tracking-wider mb-1 font-semibold">Ketua Tim Keuangan</span>
                        <span class="font-bold text-xl">Achmad Noor S.Sos.</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mb-20">
            <h3 class="text-2xl font-bold text-[#002b54] mb-10 text-center uppercase tracking-wide">
                Bagian - Bagian
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <?php 
                $bagian = [
                    ["Dasar-dasar Ilmu Hukum", "Drs. Noor Asyik, M.Ag.", "Handityo Basworo, S.H.,M.H"],
                    ["Hukum Keperdataan", "Agus Mardianto, S.H., M.H.", "Nur Wakhid, S.H., M.H."],
                    ["Hukum Pidana", "Dr. Dwi Hapsari R., S.H., M.H.", "Rani Hendriana, S.H., M.H."],
                    ["Hukum Tata Negara", "Manunggal K.W., Ph.D.", "Tenang Haryanto, S.H.,M.H"],
                    ["Hukum Admin. Negara", "Dr. Siti Kunarti, S.H., M.Hum.", "Dr. Sri Wahyu H., S.H., M.H."],
                    ["Hukum & Masyarakat", "Nayla Alawiya, S.H.,M.H", "Alef Musyahadah R., S.H., M.H."],
                    ["Hukum Acara", "Dr. Rahadi Wasi B., S.H., M.H.", "Dessi Perdani Y.P.S., S.H., M.H."],
                    ["Hukum Internasional", "Wismaningsih, S.H., M.H.", "Dr. Aryuni Yuliantiningsih, S.H., M.H."]
                ];
                foreach($bagian as $bag): 
                ?>
                <div class="bg-white p-6 rounded-xl border border-gray-200 hover:border-[#002b54] hover:shadow-xl transition-all group h-full flex flex-col">
                    <div class="mb-6">
                        <div class="w-10 h-1.5 bg-yellow-400 mb-3 group-hover:w-full transition-all duration-500 rounded-full"></div>
                        <h4 class="font-bold text-[#002b54] text-lg leading-tight"><?= $bag[0] ?></h4>
                    </div>
                    <div class="mt-auto space-y-4 bg-gray-50 p-4 rounded-lg">
                        <div>
                            <span class="block text-gray-400 uppercase text-xs font-bold mb-1">Ketua</span>
                            <span class="font-bold text-gray-800 text-sm block"><?= $bag[1] ?></span>
                        </div>
                        <div>
                            <span class="block text-gray-400 uppercase text-xs font-bold mb-1">Sekretaris</span>
                            <span class="font-bold text-gray-800 text-sm block"><?= $bag[2] ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div>
            <h3 class="text-2xl font-bold text-[#002b54] mb-10 text-center uppercase tracking-wide">
                Pusat Kajian
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php 
                $kajian = [
                    ["Hukum Humaniter Internasional & HAM", "-", "-"],
                    ["Hukum dan Kemitraan Daerah (PKHKD)", "Prof. Dr. Muhammad Fauzan", "Prof. Dr. Riris Ardhanariswari"],
                    ["Konstitusi (PKK)", "-", "Sri Hartini, S.H., M.H."],
                    ["Hukum Binis & Perlindungan UKM", "Pramono Suko Legowo", "Prof. Dr. Sulistyandari"],
                    ["Anti Korupsi & Pencucian Uang", "Prof. Dr. Hibnu Nugroho", "Dr. Rahadi Wasi Bintoro"]
                ];
                foreach($kajian as $kj): 
                ?>
                <div class="bg-white p-8 rounded-xl border-l-8 border-gray-300 hover:border-yellow-400 shadow-sm hover:shadow-lg transition-all">
                    <h4 class="font-bold text-gray-800 text-lg mb-6 flex items-center min-h-12"><?= $kj[0] ?></h4>
                    <div class="grid grid-cols-2 gap-4 border-t border-gray-100 pt-4">
                        <div>
                            <span class="block text-gray-400 uppercase font-bold text-xs mb-1">Ketua</span>
                            <span class="text-[#002b54] font-semibold text-sm"><?= $kj[1] ?: '-' ?></span>
                        </div>
                        <div>
                            <span class="block text-gray-400 uppercase font-bold text-xs mb-1">Sekretaris</span>
                            <span class="text-[#002b54] font-semibold text-sm"><?= $kj[2] ?: '-' ?></span>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</section>