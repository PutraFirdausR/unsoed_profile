<?php

$steps = [
    [
        'number' => 1,
        'title'  => 'Pengajuan & Identifikasi',
        'desc'   => 'Pemohon mengajukan permintaan kepada PPID melalui petugas layanan. Petugas melakukan <strong>identifikasi jenis informasi</strong> yang dimohonkan:',
        'content_type' => 'grid_boxes', 
        'boxes' => [
            [
                'title' => 'Langsung Diberikan',
                'color' => 'green',
                'items' => ['Informasi Berkala', 'Informasi Serta Merta']
            ],
            [
                'title' => 'Melengkapi Persyaratan',
                'color' => 'yellow',
                'items' => ['Informasi Tersedia Setiap Saat']
            ]
        ],
        'alert' => [
            'type' => 'red',
            'text' => '<strong>DITOLAK:</strong> Petugas dapat menolak jika informasi yang dimohonkan termasuk kategori <u>Informasi yang Dikecualikan</u>.'
        ]
    ],
    [
        'number' => 2,
        'title'  => 'Administrasi & Verifikasi',
        'desc'   => 'Petugas mengadministrasikan proses permohonan ke dalam formulir yang mencakup data berikut:',
        'content_type' => 'list_columns',
        'list_items' => [
            'Nomor Pendaftaran', 'Nama Pemohon', 'Alamat & No. Telepon (Lampiran FC KTP)',
            'Nama Pengguna Informasi', 'Alamat & No. Telepon Pengguna (Lampiran FC KTP)',
            'Subyek & Keterangan Informasi', 'Tujuan Permintaan Informasi',
            'Format & Cara Pengiriman', 'Tanggal & Tanda Tangan'
        ],
        'extra_info' => [
            ['title' => 'Verifikasi Data', 'text' => 'Petugas <strong>wajib memverifikasi</strong> data pemohon. Tanda bukti permohonan diberikan jika data sesuai.', 'color' => 'slate'],
            ['title' => 'Potensi Penolakan', 'text' => 'Permohonan berhak <strong>ditolak</strong> apabila ditemukan ketidaksesuaian data pemohon.', 'color' => 'red']
        ]
    ],
    [
        'number' => 3,
        'title'  => 'Proses & Waktu Pelayanan',
        'desc'   => 'Setelah berkoordinasi dan mendapat persetujuan PPID, petugas akan memberikan tanggapan:',
        'content_type' => 'status_list',
        'statuses' => [
            ['label' => 'Diterima', 'color' => 'green', 'title' => 'Surat Pemberitahuan Informasi', 'desc' => 'Mencantumkan materi, format (soft/hardcopy), dan biaya (jika ada).', 'time' => '10 Hari', 'time_desc' => 'Waktu Maksimal'],
            ['label' => 'Perpanjangan', 'color' => 'yellow', 'title' => 'Surat Pemberitahuan Perpanjangan', 'desc' => 'Dikirim jika data belum siap atau volume padat.', 'time' => '+7 Hari', 'time_desc' => 'Waktu Tambahan'],
            ['label' => 'Ditolak', 'color' => 'red', 'title' => 'Surat Penolakan', 'desc' => 'Wajib mencantumkan alasan penolakan berdasarkan UU KIP.', 'time' => 'Selesai', 'time_desc' => '']
        ]
    ]
];