<?php
$base_url = '/UNSOED_PROFILE'; 

$page_title = 'Informasi Berkala';
$page_bg    = $base_url . '/public/assets/img/home.jpg'; 

require __DIR__ . '/../ui/PageHeader.php'; 

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
                'title' => 'Struktur Organisasi', 
                'link'  => $base_url . '/struktur-organisasi', 
                'type'  => 'internal',
                'note'  => 'Lihat Bagan'
            ],
            [
                'title' => 'Profil Dekan', 
                'link'  => $base_url . '/public/assets/img/profil_dosen/Prof.-Dr.-Riris-Ardhanariswari-S.H.-M.H.jpg', 
                'type'  => 'image',
                'note'  => 'Lihat Foto'
            ],
            [
                'title' => 'Profil WD Bidang Akademik', 
                'link'  => $base_url . '/public/assets/img/profil_dosen/Dr.-Aryuni-Yuliantiningsih-S.H.-M.H.jpg', 
                'type'  => 'image',
                'note'  => 'Lihat Foto'
            ],
            [
                'title' => 'Profil WD Bidang Umum & Keuangan', 
                'link'  => $base_url . '/public/assets/img/profil_dosen/Dr.-Rahadi-Wasi-Bintoro-S.H.-M.H.jpg', 
                'type'  => 'image',
                'note'  => 'Lihat Foto'
            ],
            [
                'title' => 'Profil WD Bidang Kemahasiswaan', 
                'link'  => $base_url . '/public/assets/img/profil_dosen/Dr.-Siti-Kunarti-S.H.-M.H.jpg', 
                'type'  => 'image',
                'note'  => 'Lihat Foto'
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
?>

<div class="bg-slate-50 font-sans text-slate-800 min-h-screen  py-16">
    
    <div class="absolute top-0 left-0 w-full h-96 bg-linear-to-b from-blue-50 to-transparent pointer-events-none"></div>

    <div class="container mx-auto px-4 md:px-8 max-w-7xl relative z-10">

        <div class="text-center mb-16 max-w-3xl mx-auto">
            <span class="inline-block py-1.5 px-4 rounded-full bg-yellow-400 text-[#002b54] text-xs font-bold tracking-widest uppercase mb-6 shadow-sm">
                PPID Fakultas Hukum
            </span>
            <h2 class="text-4xl md:text-5xl font-extrabold text-[#002b54] mb-6 leading-tight">
                Informasi Berkala
            </h2>
            <p class="text-slate-600 mb-10 text-lg leading-relaxed font-light">
                Akses transparansi publik, laporan kinerja, dan dokumen resmi fakultas dalam satu pintu.
            </p>

            <div class="relative max-w-lg mx-auto group">
                <input type="text" id="searchInput" 
                    class="block w-full pl-12 pr-6 py-4 bg-white border border-gray-200 rounded-full text-base text-gray-900 placeholder-gray-400 focus:outline-none focus:ring-4 focus:ring-blue-100 focus:border-blue-300 shadow-lg shadow-blue-900/5 transition-all" 
                    placeholder="Penelusuran dokumen (contoh:Profil ,Laporan, Daftar)...">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="cardContainer">
            
            <?php foreach($data_berkala as $data): ?>
            <div class="bg-white rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 card-item flex flex-col h-full border-t-4 border-t-[#002b54] overflow-hidden group">
                
                <div class="p-6 pb-2">
                    <div class="flex items-center gap-4 mb-4">
                        <div class="w-12 h-12 rounded-xl bg-blue-50 text-[#002b54] flex items-center justify-center shrink-0 border border-blue-100 group-hover:bg-[#002b54] group-hover:text-white transition-colors duration-300">
                            <?php 
                            $icon = $data['icon'];
                            if($icon == 'building') echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>';
                            elseif($icon == 'calendar') echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>';
                            elseif($icon == 'chart') echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/></svg>';
                            elseif($icon == 'scale') echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>';
                            elseif($icon == 'shield') echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>';
                            else echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>';
                            ?>
                        </div>
                        <h3 class="text-lg font-bold text-[#002b54] category-title leading-snug"><?= $data['category'] ?></h3>
                    </div>
                    <div class="h-px w-full bg-linear-to-r from-gray-200 to-transparent"></div>
                </div>

                <div class="p-6 pt-2 flex-1 flex flex-col">
                    <ul class="space-y-3">
                        <?php foreach($data['items'] as $item): ?>
                        <li class="item-link">
                            
                            <?php if($item['type'] == 'disabled' || $item['type'] == 'none'): ?>
                                <div class="flex items-center gap-3 p-3 rounded-lg bg-gray-50 border border-transparent text-gray-400 cursor-not-allowed">
                                    <span class="w-2 h-2 rounded-full bg-gray-300 shrink-0"></span>
                                    <div class="flex-1 min-w-0">
                                        <span class="font-medium text-sm item-text block truncate"><?= $item['title'] ?></span>
                                        <span class="text-[10px] uppercase tracking-wide opacity-60 font-semibold">Belum Tersedia</span>
                                    </div>
                                </div>

                            <?php elseif($item['type'] == 'image'): ?>
                                <button onclick="openModal('<?= $item['link'] ?>', '<?= $item['title'] ?>')" class="w-full flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50 hover:border-blue-100 border border-transparent transition-all duration-200 text-left group/btn">
                                    <span class="w-2 h-2 rounded-full bg-green-500 shrink-0 group-hover/btn:scale-125 transition-transform shadow-sm shadow-green-200"></span>
                                    <div class="flex-1 min-w-0">
                                        <span class="font-semibold text-sm text-gray-700 group-hover/btn:text-[#002b54] item-text block"><?= $item['title'] ?></span>
                                        <span class="text-[11px] text-green-600 font-medium flex items-center gap-1 mt-0.5">
                                            <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
                                            Lihat Foto
                                        </span>
                                    </div>
                                </button>

                            <?php else: ?>
                                <a href="<?= $item['link'] ?>" target="<?= ($item['type']=='internal')?'_self':'_blank' ?>" class="flex items-center gap-3 p-3 rounded-lg hover:bg-blue-50 hover:border-blue-100 border border-transparent transition-all duration-200 group/link">
                                    <span class="w-2 h-2 rounded-full bg-blue-600 shrink-0 group-hover/link:scale-125 transition-transform shadow-sm shadow-blue-200"></span>
                                    <div class="flex-1 min-w-0">
                                        <span class="font-semibold text-sm text-gray-700 group-hover/link:text-[#002b54] item-text block"><?= $item['title'] ?></span>
                                        <?php if(isset($item['note'])): ?>
                                            <span class="text-[11px] text-gray-500 block mt-0.5 group-hover/link:text-blue-600"><?= $item['note'] ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <svg class="w-4 h-4 text-gray-300 group-hover/link:text-blue-600 group-hover/link:translate-x-1 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                                    </svg>
                                </a>
                            <?php endif; ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

            </div>
            <?php endforeach; ?>
            
        </div>
        
        <div id="noResults" class="hidden text-center py-20 animate-fade-in-up">
            <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-gray-100 mb-6">
                <svg class="w-10 h-10 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
            </div>
            <h3 class="text-xl font-bold text-gray-800 mb-2">Dokumen tidak ditemukan</h3>
            <p class="text-gray-500">Silakan coba dengan kata kunci lain.</p>
        </div>

    </div>
</div>

<div id="imageModal" class="fixed inset-0 z-9999 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="absolute inset-0 bg-slate-900/90 backdrop-blur-md transition-opacity" onclick="closeModal()"></div>
    
    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center">
            
            <div class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:w-full sm:max-w-xl scale-100">
                <div class="bg-white px-6 py-4 border-b border-gray-100 flex justify-between items-center sticky top-0 z-10">
                    <h3 class="text-lg font-bold text-gray-900" id="modal-title">Pratinjau Gambar</h3>
                    <button onclick="closeModal()" class="text-gray-400 hover:text-red-500 hover:bg-red-50 rounded-full p-1 transition-colors">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
                
                <div class="bg-gray-50 p-6 flex justify-center items-center">
                    <img id="modal-image" src="" alt="Preview" class="max-w-full max-h-[70vh] rounded-lg shadow-sm object-contain">
                    <div id="modal-error" class="hidden text-center">
                        <svg class="w-12 h-12 text-red-300 mx-auto mb-2" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/></svg>
                        <p class="text-red-500 font-medium">Gambar tidak dapat dimuat.</p>
                    </div>
                </div>

                <div class="bg-white px-6 py-4 sm:flex sm:flex-row-reverse">
                    <button type="button" class="inline-flex w-full justify-center rounded-xl bg-[#002b54] px-5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-blue-900 sm:w-auto transition-colors" onclick="closeModal()">
                        Tutup Tampilan
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');
        const cards = document.querySelectorAll('.card-item');
        const noResults = document.getElementById('noResults');

        searchInput.addEventListener('keyup', function(e) {
            const term = e.target.value.toLowerCase();
            let hasVisible = false;

            cards.forEach(card => {
                const category = card.querySelector('.category-title').innerText.toLowerCase();
                const listItems = card.querySelectorAll('.item-link');
                let matchInCard = false;

                if(category.includes(term)) {
                    matchInCard = true;
                    listItems.forEach(li => li.classList.remove('hidden'));
                } else {
                    listItems.forEach(li => {
                        const text = li.querySelector('.item-text').innerText.toLowerCase();
                        if(text.includes(term)) {
                            li.classList.remove('hidden');
                            matchInCard = true;
                        } else {
                            li.classList.add('hidden');
                        }
                    });
                }

                if(matchInCard) {
                    card.classList.remove('hidden');
                    hasVisible = true;
                } else {
                    card.classList.add('hidden');
                }
            });

            if(hasVisible) {
                noResults.classList.add('hidden');
            } else {
                noResults.classList.remove('hidden');
            }
        });
    });

    function openModal(imageSrc, title) {
        const modal = document.getElementById('imageModal');
        const img = document.getElementById('modal-image');
        const titleEl = document.getElementById('modal-title');
        const errorMsg = document.getElementById('modal-error');

        img.style.display = 'block';
        errorMsg.classList.add('hidden');
        
        img.src = imageSrc;
        titleEl.textContent = title;
        
        img.onerror = function() {
            img.style.display = 'none';
            errorMsg.classList.remove('hidden');
        };

        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden'; 
    }

    function closeModal() {
        document.getElementById('imageModal').classList.add('hidden');
        document.getElementById('modal-image').src = '';
        document.body.style.overflow = 'auto';
    }
</script>