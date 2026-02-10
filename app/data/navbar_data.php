<?php
// FILE: app/data/navbar_data.php

$menus = [
    'Profil' => [
        ['text' => 'Tentang Kami', 'url' => base_url('tentang-kami')],
        ['text' => 'Visi Misi', 'url' => base_url('visi-misi')],
        ['text' => 'Struktur Organisasi', 'url' => base_url('struktur-organisasi')],
        ['text' => 'Akreditasi', 'url' => base_url('akreditasi')],
        ['text' => 'Fasilitas', 'url' => base_url('fasilitas')],
        ['text' => 'Kerjasama', 'url' => base_url('kerjasama')],
        ['text' => 'Renstra', 'url' => base_url('renstra')],
    ],
    'Program Studi' => [
        ['text' => 'Program Doktor', 'url' => base_url('program-doktor')],
        ['text' => 'Kenotariatan', 'url' => base_url('magister-kenotariatan')],
        ['text' => 'Magister Hukum', 'url' => '#'],
    ],
    'SDM' => [
        ['text' => 'Guru Besar', 'url' => base_url('guru-besar')],
        ['text' => 'Staf Pendidik', 'url' => base_url('staf-pendidik')],
        ['text' => 'Staf Kependidikan', 'url' => base_url('staf-kependidikan')],
    ],
    'Layanan' => [
        ['text' => 'Kurikulum IUP', 'url' => base_url('layanan-kurikulum-iup')],
        ['text' => 'Magang', 'url' =>  base_url('magang')],
    ],
    'PPID' => [
        ['text' => 'Informasi Berkala', 'url' => base_url('informasi-berkala')],
        ['text' => 'Informasi Setiap Saat', 'url' => base_url('informasi-setiap-saat')],
        ['text' => 'Regulasi KIP', 'url' => '#'],
        ['text' => 'Permohonan Informasi', 'url' => base_url('permohonan-informasi')],
    ],
    'Alumni' => [
        ['text' => 'Keluarga Alumni', 'url' => 'https://kafhunsoed.com/'],
        ['text' => 'Register Alumni', 'url' => 'https://docs.google.com/forms/d/e/1FAIpQLSfymbQK6gJEWW9C6T5nnsxC5NcM-STp6RskBdvnxQmDxOR6nQ/viewform?pli=1'],
        ['text' => 'Alumni Terkemuka', 'url' => base_url('alumni')],
    ]
];