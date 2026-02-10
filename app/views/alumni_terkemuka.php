<?php

$base_url = '/UNSOED_PROFILE'; 
$page_title = 'Alumni Terkemuka';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php'; 

$data_alumni = [
    [
        "nama" => "Hasyim Asy'ari, S.H., M.Si., Ph.D.",
        "jabatan" => "Ketua KPU RI (2022-2027)",
        "deskripsi" => "Ketua KPU Republik Indonesia periode 2022–2027. Sebelumnya menjabat sebagai Komisioner KPU RI sejak 2016.",
        "foto" => $base_url . "/public/assets/img/profil_dosen/Hasyim Asy'ari, S.H., M.Si., Ph.D.jpg"
    ],
    [
        "nama" => "Dr. Ma'ruf Cahyono, S.H., M.H.",
        "jabatan" => "Sekretaris Jenderal MPR RI",
        "deskripsi" => "Sekretaris Jenderal MPR RI dan Ketua Umum Keluarga Alumni Fakultas Hukum (KAFH) Unsoed.",
        "foto" => $base_url . "/public/assets/img/profil_dosen/Dr. MA'RUF CAHYONO, S.H., M.H.jpg"
    ],
    [
        "nama" => "Tulus Abadi, S.H.",
        "jabatan" => "Ketua Pengurus Harian YLKI",
        "deskripsi" => "Ketua Pengurus Harian Yayasan Lembaga Konsumen Indonesia (YLKI), tokoh perlindungan konsumen nasional.",
        "foto" => $base_url . "/public/assets/img/profil_dosen/Tulus Abadi, S.H.jpg"
    ],
    [
        "nama" => "Dr. Abdul Kholik, S.H., M.Si.",
        "jabatan" => "Anggota DPD RI",
        "deskripsi" => "Anggota DPD RI perwakilan Jawa Tengah dan Ketua Umum Keluarga Alumni Unsoed (KA UNSOED).",
        "foto" => $base_url . "/public/assets/img/profil_dosen/Dr. Abdul Kholik, SH., M.Si.jpg"
    ],
    [
        "nama" => "Agung Widyantoro, S.H., M.Si.",
        "jabatan" => "Anggota DPR RI",
        "deskripsi" => "Anggota DPR RI. Pernah menjabat sebagai Bupati Brebes. Politisi senior Partai Golkar.",
        "foto" => $base_url . "/public/assets/img/profil_dosen/Agung Widyantoro, S.H., M.Si.jpg"
    ],
    [
        "nama" => "Sukmo Yuwono, S.H., M.H.",
        "jabatan" => "Diplomat / Eselon I Kemenlu",
        "deskripsi" => "Pejabat karir di Kementerian Luar Negeri RI dengan berbagai penugasan diplomasi internasional.",
        "foto" => $base_url . "/public/assets/img/profil_dosen/Sukmo Yuwono.jpg"
    ]
];
?>

<div class="bg-slate-50 min-h-screen py-12 font-sans text-slate-800">
    <div class="container mx-auto px-4 max-w-6xl">

        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#002b54] mb-3">Alumni Terkemuka</h2>
            <div class="h-1 w-20 bg-yellow-400 mx-auto rounded-full"></div>
            <p class="text-slate-500 mt-4 max-w-2xl mx-auto">
                Profil lulusan Fakultas Hukum Universitas Jenderal Soedirman yang berkiprah di kancah nasional.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <?php foreach($data_alumni as $alumni): ?>
                
                <div class="bg-white rounded-lg border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    
                    <div class="aspect-4/3 w-full bg-slate-100 overflow-hidden relative border-b border-slate-100">
                        <img src="<?= $alumni['foto'] ?>" 
                             alt="<?= $alumni['nama'] ?>" 
                             class="w-full h-full object-cover object-top"
                             onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($alumni['nama']) ?>&background=eff6ff&color=002b54&size=512'">
                    </div>

                    <div class="p-6">
                        <h3 class="text-lg font-bold text-[#002b54] mb-1 leading-snug">
                            <?= $alumni['nama'] ?>
                        </h3>
                        
                        <p class="text-sm font-semibold text-yellow-600 mb-3 uppercase tracking-wide">
                            <?= $alumni['jabatan'] ?>
                        </p>
                        
                        <hr class="border-slate-100 mb-3">

                        <p class="text-slate-600 text-sm leading-relaxed">
                            <?= $alumni['deskripsi'] ?>
                        </p>
                    </div>

                </div>

            <?php endforeach; ?>
        </div>

        <div class="mt-16 text-center border-t border-slate-200 pt-8">
            <p class="text-slate-500 text-sm mb-4">Apakah Anda bagian dari alumni?</p>
            <a href="https://kafhunsoed.com/" target="_blank" class="inline-block px-6 py-2 bg-[#002b54] text-white text-sm font-semibold rounded hover:bg-blue-900 transition-colors">
                Kunjungi Website Alumni
            </a>
        </div>

    </div>
</div>