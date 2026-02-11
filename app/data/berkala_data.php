<?php
$base_url = '/UNSOED_PROFILE'; 

$data_berkala = [
    [
        'category' => '1. Informasi Profil Fakultas',
        'icon'     => 'building',
        'items'    => [
            [
                'title' => 'Alamat Lengkap (Google Maps)', 
                'link'  => 'https://www.google.com/maps/place/Fakultas+Hukum+Universitas+Jenderal+Soedirman/@-7.404615,109.247353,16z/data=!4m6!3m5!1s0x2e655efb2b367917:0x2622fc4ad800553c!8m2!3d-7.4049556!4d109.2473211!16s%2Fg%2F11nx3qrltf?hl=id&entry=ttu&g_ep=EgoyMDI0MDkyMi4wIKXMDSoASAFQAw%3D%3D', 
                'type'  => 'external',
                'note'  => 'Peta Lokasi'
            ],
            [
                'title' => 'LHKPN Dekan', 
                'link'  => $base_url . '/public/assets/docs/KekayaanDekan.pdf', 
                'type'  => 'pdf',
                'note'  => 'Unduh PDF'
            ],
            ['title' => 'LHKPN WD Bidang Akademik', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'LHKPN WD Bidang Umum', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'LHKPN WD Bidang Kemahasiswaan', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ],
    [
        'category' => '2. Program & Kegiatan',
        'icon'     => 'calendar',
        'items'    => [
            ['title' => 'Perjanjian Kinerja Dekan', 'link' => 'https://drive.google.com/file/d/10ifVphEgyJ8hOmKtgVBMNGDS1n491psU/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Rencana Strategis (Renstra)', 'link' => 'https://drive.google.com/file/d/1ubB174yi4xOcO3cIMcrFzvXHX8K1ybfU/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Rencana Kerja & Anggaran (RKA)', 'link' => 'https://drive.google.com/file/d/1iYq7SLCZpf2XwOvnTRILzWxht8sT0mvk/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Daftar Isian Pelaksanaan Anggaran (DIPA)', 'link' => 'https://drive.google.com/file/d/1-oo7cxbsvpkj8JtX4sKy42n7B75IAstl/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Ringkasan Program (Perencanaan)', 'link' => 'https://perencanaan.unsoed.ac.id/ver2024/index.php', 'type' => 'external', 'note' => 'Portal Perencanaan'],
            ['title' => 'Laporan Kegiatan Berjalan', 'link' => 'https://elfina.unsoed.ac.id/site/report', 'type' => 'external', 'note' => 'Portal Elfina'],
            ['title' => 'Laporan Kegiatan Selesai', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Penerimaan Pegawai', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Realisasi Kegiatan & Capaian', 'link' => 'https://elfina.unsoed.ac.id/site/report', 'type' => 'external', 'note' => 'Portal Elfina'],
        ]
    ],
    [
        'category' => '3. Laporan & Keuangan',
        'icon'     => 'chart',
        'items'    => [
            ['title' => 'Laporan Tahunan Dekan', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Laporan Akuntabilitas (LAKIP)', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Laporan Audit Internal', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Laporan Keuangan Teraudit', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Realisasi Penerimaan UKT', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Informasi Keuangan Lainnya', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Realisasi Keuangan Real Time', 'link' => 'https://elfina.unsoed.ac.id/site/report', 'type' => 'external', 'note' => 'Portal Elfina'],
            ['title' => 'Ringkasan Akses Informasi Publik', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ],
    [
        'category' => '4. Peraturan & Pengaduan',
        'icon'     => 'scale',
        'items'    => [
            ['title' => 'Daftar Rancangan Peraturan', 'link' => '#', 'type' => 'disabled', 'note' => 'Dalam Proses'],
            ['title' => 'Daftar Peraturan Disahkan', 'link' => '#', 'type' => 'disabled', 'note' => 'Telah Tetap'],
            ['title' => 'Tata Cara Pengaduan', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Sistem Pengaduan (Sidamas)', 'link' => 'https://sidamas.unsoed.ac.id/', 'type' => 'external', 'note' => 'Portal Sidamas'],
        ]
    ],
    [
        'category' => '5. Barang Jasa & Darurat',
        'icon'     => 'shield',
        'items'    => [
            ['title' => 'Sistem Rencana Umum Pengadaan (SIRUP)', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Layanan Pengadaan Elektronik (LPSE)', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Dokumen Pengadaan Barang & Jasa', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'SOP Penanggulangan Kebakaran', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'SOP Bantuan Bencana', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'SOP Gempa Bumi', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'SOP Alur Evakuasi', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ]
];