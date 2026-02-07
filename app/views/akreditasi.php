<?php
// FILE: app/views/akreditasi.php

$page_title = 'Akreditasi & Sertifikasi';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php'; 

// ==============================================================================
// DATA CENTER: AKREDITASI UTAMA (S1, S2, S3)
// ==============================================================================
$akreditasiData = [
    'S1' => [
        'title' => 'Sarjana (S1)',
        'desc'  => 'Program Studi Ilmu Hukum & Kelas Internasional',
        'items' => [
            [
                'label'     => 'INTERNASIONAL',
                'sub'       => 'FIBAA',
                'prodi'     => 'Intl. Undergraduate Program (LLB)',
                'sk'        => 'Foundation for Intl. Business Administration Accreditation',
                'date'      => 'Berlaku s.d. 19 Sep 2028',
                'file'      => 'FIBBA.pdf',
                'theme'     => 'gold' 
            ],
            [
                'label'     => 'NASIONAL',
                'sub'       => 'Peringkat A',
                'prodi'     => 'Ilmu Hukum',
                'sk'        => '6626/SK/BAN-PT/Ak-PPJ/S/X/2020 ',
                'date'      => 'Berlaku s.d. 20 Sep 2025',
                'file'      => 'No. 6626.pdf',
                'theme'     => 'blue' 
            ],
            [
                'label'     => 'NASIONAL',
                'sub'       => 'Peringkat A',
                'prodi'     => 'Ilmu Hukum',
                'sk'        => '7886/SK/BAN-PT/Ak.Ppj/S/X/2025',
                'date'      => '21 Sep 2025 - 21 Sep 2030',
                'file'      => 'No. 7886.pdf',
                'theme'     => 'blue'
            ],
            [
                'label'     => 'NASIONAL',
                'sub'       => 'Peringkat A',
                'prodi'     => 'Ilmu Hukum',
                'sk'        => '8473/SK/BAN-PT/Ak.KP/S/XII/2025',
                'date'      => '2 Des 2025 – 21 Sep 2030',
                'file'      => 'No. 8473.pdf',
                'theme'     => 'blue'
            ],
        ]
    ],
    'S2' => [
        'title' => 'Magister (S2)',
        'desc'  => 'Program Magister Hukum & Kenotariatan',
        'items' => [
            [
                'label'     => 'Nasional',
                'sub'       => 'Unggul',
                'prodi'     => 'Magister Hukum',
                'sk'        => 'BAN-PT No. 685/SK/BAN-PT/Ak.Ppj/M/III/2023',
                'date'      => 'Berlaku s.d. 7 Mar 2028',
                'file'      => 'No. 685.pdf',
                'theme'     => 'blue'
            ],
            [
                'label'     => 'Nasional',
                'sub'       => 'Unggul',
                'prodi'     => 'Magister Kenotariatan',
                'sk'        => 'BAN-PT No. 4051/SK/BAN-PT/Ak/M/V/202',
                'date'      => 'Berlaku s.d. 07 Mei 2029',
                'file'      => 'No. 4051.pdf',
                'theme'     => 'blue'
            ],
            [
                'label'     => 'Nasional',
                'sub'       => 'SK',
                'prodi'     => 'Magister Kenotariatan',
                'sk'        => 'SK Akreditasi',
                'date'      => '-',
                'file'      => 'SK Akreditasi.pdf',
                'theme'     => 'blue'
            ]
        ]
    ],
    'S3' => [
        'title' => 'Doktor (S3)',
        'desc'  => 'Program Studi Doktor Ilmu Hukum',
        'items' => [
            [
                'label'     => 'Nasional',
                'sub'       => 'Baik Sekali',
                'prodi'     => 'Doktor Ilmu Hukum',
                'sk'        => 'No. 1320/SK/BAN-PT/Akred/D/III/2022',
                'date'      => 'Berlaku s.d. 1 Mar 2027',
                'file'      => 'No. 1320.pdf',
                'theme'     => 'blue'
            ],
            [
                'label'     => 'Nasional',
                'sub'       => 'UNGGUL',
                'prodi'     => 'Doktor Ilmu Hukum',
                'sk'        => 'No. 7100/SK/BAN-PT/Ak/D/VIII/2025',
                'date'      => '5 Agus 2025 – 5 Agus 2030',
                'file'      => 'No. 7100.pdf',
                'theme'     => 'blue'
            ]
        ]
    ]
];

// ==============================================================================
// DATA CENTER: ARSIP (Data Arsip Dipisah di Sini)
// ==============================================================================
$arsipData = [
    [
        'title' => 'Arsip Akreditasi 2000 - 2005',
        'file'  => '2000 – 2005.pdf'
    ],
    [
        'title' => 'Arsip Akreditasi 2006 – 2011 ',
        'file'  => '2006 – 2011 .pdf'
    ],
    [
        'title' => 'Arsip Akreditasi 2010 – 2015',
        'file'  => '2010 – 2015.pdf'
    ],
    [
        'title' => 'Arsip Akreditasi  2015 – 2020',
        'file'  => '2015 – 2020.pdf'
    ],
    [
        'title' => 'Arsip Akreditasi MIH 2016 - 2021 ',
        'file'  => '2016 – 2021.pdf'
    ],
    [
        'title' => 'Arsip Akreditasi 19 September 2020',
        'file'  => '19 September 2020.pdf'
    ],
    [
        'title' => 'Arsip Akreditasi 21 September 2025 – 21 September 2030',
        'file'  => '21 September 2025 – 21 September 2030.pdf'
    ],
    [
        'title' => 'Arsip Akreditasi 2 Desember 2025 – 21 September 2030',
        'file'  => '2 Desember 2025 – 21 September 2030.pdf'
    ],
];
?>

<style>
    .custom-scroll::-webkit-scrollbar { width: 6px; }
    .custom-scroll::-webkit-scrollbar-track { background: #f1f1f1; }
    .custom-scroll::-webkit-scrollbar-thumb { background: #cbd5e1; border-radius: 10px; }
    .custom-scroll::-webkit-scrollbar-thumb:hover { background: #94a3b8; }
    
    .glass-card {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
</style>

<div class="bg-gray-50 min-h-screen font-sans text-gray-800 py-16">
    <div class="text-center mb-12">
                <span class="text-yellow-600 font-bold tracking-widest uppercase text-sm">OFFICIAL DOCUMENTATION</span>
                <h2 class="text-3xl font-bold text-[#002b54] mt-2 mb-4">Pusat Akreditasi</h2>
                <div class="w-20 h-1.5 bg-yellow-400 mx-auto rounded-full mb-6"></div>
                <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
                    Transparansi dan penjaminan mutu Fakultas Hukum Universitas Jenderal Soedirman.
                </p>
    </div>

    <div class="container mx-auto max-w-7xl px-4 md:px-6 -mt-20 relative z-20">

        <?php foreach ($akreditasiData as $key => $section): ?>
            
            <div class="mb-16">
                <div class="flex items-end gap-4 mb-8 pl-2 border-l-4 border-yellow-500">
                    <div>
                        <h2 class="text-3xl font-bold text-[#002b54] leading-none"><?= $section['title'] ?></h2>
                        <p class="text-gray-500 mt-2 text-sm uppercase tracking-wide"><?= $section['desc'] ?></p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-6">
                    <?php foreach ($section['items'] as $item): 
                        $theme = $item['theme'];
                        $colors = [
                            'emerald' => ['bg' => 'bg-emerald-50', 'text' => 'text-emerald-700', 'border' => 'border-emerald-500', 'btn' => 'hover:bg-emerald-600'],
                            'gold'    => ['bg' => 'bg-yellow-50',   'text' => 'text-yellow-700',  'border' => 'border-yellow-500',  'btn' => 'hover:bg-yellow-600'],
                            'blue'    => ['bg' => 'bg-blue-50',     'text' => 'text-blue-700',    'border' => 'border-blue-500',    'btn' => 'hover:bg-blue-600'],
                            'slate'   => ['bg' => 'bg-gray-50',     'text' => 'text-gray-600',    'border' => 'border-gray-400',    'btn' => 'hover:bg-gray-600'],
                        ];
                        $c = $colors[$theme];
                    ?>
                        <div class="group relative bg-white rounded-2xl shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border border-gray-100 overflow-hidden flex flex-col h-full">
                            
                            <div class="h-1.5 w-full <?= $c['bg'] ?> <?= $c['border'] ?> border-t-4"></div>

                            <div class="p-6 flex flex-col h-full">
                                <div class="flex justify-between items-start mb-4">
                                    <span class="px-3 py-1 rounded-md text-[10px] font-black uppercase tracking-wider <?= $c['bg'] ?> <?= $c['text'] ?>">
                                        <?= $item['label'] ?>
                                    </span>
                                    <?php if($theme == 'gold'): ?>
                                        <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>    
                                    <?php elseif($theme == 'emerald'): ?>
                                        <svg class="w-6 h-6 text-emerald-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    <?php else: ?>
                                        <svg class="w-6 h-6 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 2H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                                    <?php endif; ?>
                                </div>

                                <div class="mb-4">
                                    <h3 class="text-2xl font-bold text-gray-800 mb-1"><?= $item['sub'] ?></h3>
                                    <p class="text-sm font-medium text-gray-500"><?= $item['prodi'] ?></p>
                                </div>

                                <div class="space-y-3 mb-6 grow">
                                    <div class="bg-gray-50 p-3 rounded-lg border border-gray-100 group-hover:border-gray-200 transition-colors">
                                        <p class="text-[10px] text-gray-400 uppercase font-bold mb-1">Nomor SK</p>
                                        <p class="text-xs font-mono text-gray-600 wrap-break-word leading-tight">
                                            <?= $item['sk'] ?>
                                        </p>
                                    </div>
                                    <div class="flex items-center gap-2 text-xs text-gray-500">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                        <?= $item['date'] ?>
                                    </div>
                                </div>

                                <a href="/unsoed_profile/public/assets/akreditasi/<?= $item['file'] ?>" target="_blank"
                                   class="w-full mt-auto inline-flex items-center justify-center gap-2 py-3 rounded-xl bg-[#002b54] text-white text-sm font-bold shadow-lg shadow-blue-900/10 transition-all duration-300 <?= $c['btn'] ?> group-hover:shadow-xl">
                                    <span>Lihat Sertifikat</span>
                                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </a>

                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php endforeach; ?>

        <div class="mt-20 border-t border-gray-200 pt-10">
            <h3 class="text-xl font-bold text-gray-400 mb-6 flex items-center gap-2">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                Arsip & Dokumen Lama
            </h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php foreach ($arsipData as $arsip): ?>
                <a href="/unsoed_profile/public/assets/akreditasi/<?= $arsip['file'] ?>" target="_blank" class="flex items-center justify-between p-4 bg-white border border-gray-200 rounded-lg text-gray-500 hover:text-[#002b54] hover:border-[#002b54] transition cursor-pointer">
                    <span class="text-sm font-medium"><?= $arsip['title'] ?></span>
                    <span class="text-xs bg-gray-100 px-2 py-1 rounded">PDF</span>
                </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>