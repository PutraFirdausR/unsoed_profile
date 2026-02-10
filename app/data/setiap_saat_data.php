<?php
// FILE: app/data/setiap_saat_data.php

$base_url = '/UNSOED_PROFILE'; 

$data_setiap_saat = [
    [
        'category' => '1. Profil & Kelembagaan',
        'icon'     => 'building',
        'items'    => [
            ['title' => 'Alamat Lengkap (Google Maps)', 'link' => 'https://www.google.com/maps/place/Fakultas+Hukum+Universitas+Jenderal+Soedirman/@-7.404956,109.247321,15z/data=!4m6!3m5!1s0x2e655efb2b367917:0x2622fc4ad800553c!8m2!3d-7.4049556!4d109.2473211!16s%2Fg%2F11nx3qrltf?hl=id&entry=ttu', 'type' => 'external', 'note' => 'Peta Lokasi'],
            ['title' => 'Profil Laboratorium', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Profil Pimpinan (3 Level ke Bawah)', 'link' => $base_url . '/public/assets/docs/Profil-Pimpinan-Fakultas-3-tingkat-kebawah.pdf', 'type' => 'pdf', 'note' => 'Unduh PDF'],
            ['title' => 'Rencana Strategis (Renstra)', 'link' => $base_url . '/public/assets/docs/Renstra.pdf', 'type' => 'pdf', 'note' => 'Unduh PDF'],
            ['title' => 'Daftar Nama / Alamat Kantor Pejabat', 'link' => 'https://drive.google.com/file/d/1Ls1KIQs5G1EDUFAqnfDDKmDu8K5I7L9R/view', 'type' => 'external', 'note' => 'Google Drive'],
        ]
    ],
    [
        'category' => '2. Akademik & Penerimaan',
        'icon'     => 'calendar',
        'items'    => [
            ['title' => 'Daya Tampung Per Prodi', 'link' => 'https://drive.google.com/file/d/15frllogMLOhNXSHkR3YmqIIYf57UOxq2/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Biaya Pendidikan (UKT) Sarjana', 'link' => 'https://admisi.unsoed.ac.id/program-sarjana-biaya-pendidikan/', 'type' => 'external', 'note' => 'Admisi Unsoed'],
            ['title' => 'Biaya Pendidikan (UKT) Pascasarjana', 'link' => 'https://admisi.unsoed.ac.id/program-pascasarjana-biaya-pendidikan/', 'type' => 'external', 'note' => 'Admisi Unsoed'],
            ['title' => 'Jadwal Penerimaan Mahasiswa Baru', 'link' => 'https://admisi.unsoed.ac.id/', 'type' => 'external', 'note' => 'Admisi Unsoed'],
            ['title' => 'Pedoman Akademik Mahasiswa', 'link' => 'https://fh.unsoed.ac.id/wp-content/uploads/2024/09/Untitled.pdf', 'type' => 'pdf', 'note' => 'Unduh PDF'],
            ['title' => 'Jadwal Perkuliahan', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Jadwal Ujian', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Petunjuk Praktikum', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Perubahan Jadwal Kuliah/Ujian', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ],
    [
        'category' => '3. SOP & Alur Layanan Akademik',
        'icon'     => 'scale',
        'items'    => [
            ['title' => 'Alur Pengisian KRS', 'link' => 'https://drive.google.com/file/d/148EAsiaums6pU5AEeIS5nF0A3vaCNPXt/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Magang / Kerja Praktik', 'link' => 'https://drive.google.com/file/d/1MmAE92m5fXNYubhIcbsOIlNhd29ghTDL/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Kuliah Kerja Lapangan (PPL)', 'link' => 'https://drive.google.com/file/d/15UcjuH8vcC-EeBzjtR8Nt5e77S0vK-qM/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Jadwal KKL / KP', 'link' => 'https://drive.google.com/file/d/161LS3Z2FgqBRfP6iC7Zb_vhvstltTZTa/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Proses Skripsi', 'link' => 'https://drive.google.com/file/d/145bgYGC6Vun07Q87zP3r63wAOXIYw9J2/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Proses Yudisium', 'link' => 'https://drive.google.com/file/d/1XxmYwwtEIgRZMTcoJRRhY7cioJyh0rMr/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Pelepasan Calon Wisuda', 'link' => 'https://drive.google.com/file/d/1dfaBM5DAl1z853twk8wEaTJ_pPV34sbl/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Pedoman Penulisan Tugas Akhir', 'link' => 'https://drive.google.com/file/d/1wbM1H0bmx0nPXZ3Fqf7wtXcieW1Sjr8S/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Cuti & Aktif Kembali', 'link' => 'https://drive.google.com/file/d/1DoBn4PXlybtdmGOzfbLh7p_AN2X09KMS/view', 'type' => 'external', 'note' => 'Google Drive'],
        ]
    ],
    [
        'category' => '4. Kemahasiswaan & Alumni',
        'icon'     => 'shield',
        'items'    => [
            ['title' => 'Profil UKM', 'link' => 'https://docs.google.com/spreadsheets/d/1IjmVoIhzP8JhvY1Mla6NBGMUojCG3lEd/edit?usp=sharing&ouid=104248458895643129437&rtpof=true&sd=true', 'type' => 'external', 'note' => 'Google Sheets'],
            ['title' => 'SOP Layanan Kemahasiswaan', 'link' => 'https://drive.google.com/file/d/1Qf7pkp9HJ5WZ01fQDyehjaP2efex67Qf/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Daftar Prestasi Penalaran', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Daftar Prestasi Khusus', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Daftar Nama UKM', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Panduan Kegiatan UKM', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ],
    [
        'category' => '5. Perpustakaan (PII)',
        'icon'     => 'book',
        'items'    => [
            ['title' => 'Alur Peminjaman Buku/Jurnal', 'link' => 'https://drive.google.com/file/d/19DifIoXKFePceDkt6fMqmwnWKQW2FL5E/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Daftar Koleksi Perpustakaan', 'link' => 'https://drive.google.com/file/d/1mj8xkORhc3bn2afqEuHFgOz6iRcx9OTD/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Katalog Buku', 'link' => 'https://drive.google.com/file/d/1mj8xkORhc3bn2afqEuHFgOz6iRcx9OTD/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Panduan Pengguna PII', 'link' => 'https://drive.google.com/file/d/1PYvQBUaf1ub6Qnmya7F2sBVmBfzp48nv/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Jadwal Pelayanan PII', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Alur Permohonan Bebas PII', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ],
    [
        'category' => '6. Umum, Keuangan & Fasilitas',
        'icon'     => 'chart',
        'items'    => [
            ['title' => 'Pedoman Peminjaman Fasilitas', 'link' => 'https://drive.google.com/file/d/1MQTqRQWJdmwDf1pd5gMlGSfk6n131etL/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Tarif Layanan Fasilitas', 'link' => 'https://drive.google.com/file/d/1MQTqRQWJdmwDf1pd5gMlGSfk6n131etL/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Daftar Inventaris Barang Ruang', 'link' => 'https://drive.google.com/file/d/1NAlXO5uBGN5wxgfGvAWc2gyIywWwXozQ/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Permintaan Barang Persediaan', 'link' => 'https://drive.google.com/file/d/19eK0darNpjMmed7VPqvgAf59FQKQchNN/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'SOP Surat Masuk & Keluar', 'link' => 'https://drive.google.com/file/d/19eK0darNpjMmed7VPqvgAf59FQKQchNN/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'SOP Layanan Umum & BMN', 'link' => 'https://drive.google.com/file/d/19eK0darNpjMmed7VPqvgAf59FQKQchNN/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Alur Pengelolaan Kearsipan', 'link' => 'https://docs.google.com/spreadsheets/d/1YM-z6PQuzW4PiL4Td9WTeJXVc4rdedOt/edit?usp=sharing&ouid=104248458895643129437&rtpof=true&sd=true', 'type' => 'external', 'note' => 'Google Sheets'],
            ['title' => 'Alur Peminjaman Fasilitas', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ],
    [
        'category' => '7. Publikasi & Lainnya',
        'icon'     => 'book',
        'items'    => [
            ['title' => 'Ringkasan Isi Informasi', 'link' => 'https://drive.google.com/file/d/1BNh10R6Xg8TCFPxNaLlWRyp8wZuH2yJW/view', 'type' => 'external', 'note' => 'Google Drive'],
            ['title' => 'Majalah/Jurnal 2024', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Booklet/Leaflet 2024', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Pengumuman Upacara', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Daftar Dosen Berprestasi', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
            ['title' => 'Daftar Tendik Berprestasi', 'link' => '#', 'type' => 'disabled', 'note' => 'Belum tersedia'],
        ]
    ]
];