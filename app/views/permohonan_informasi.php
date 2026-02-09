<?php
// FILE: app/views/permohonan_informasi.php

// 1. DEFINISI BASE URL
$base_url = '/UNSOED_PROFILE'; 

$page_title = 'Permohonan Informasi Publik';
$page_bg    = $base_url . '/public/assets/img/home.jpg'; 

require __DIR__ . '/../ui/PageHeader.php'; 
?>

<div class="bg-slate-50 font-sans text-slate-800 min-h-screen py-16">
    <div class="container mx-auto px-4 md:px-8 max-w-5xl">

        <div class="text-center mb-16">
            <span class="inline-block py-1.5 px-4 rounded-full bg-blue-100 text-[#002b54] text-xs font-bold tracking-widest uppercase mb-4">
                Standar Operasional Prosedur
            </span>
            <h2 class="text-3xl md:text-4xl font-extrabold text-[#002b54] mb-6">Mekanisme Permohonan Informasi</h2>
            <p class="text-slate-600 text-lg max-w-3xl mx-auto">
                Prosedur pelayanan informasi publik di lingkungan Fakultas Hukum Universitas Jenderal Soedirman sesuai Undang-Undang KIP.
            </p>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden mb-8">
            <div class="bg-[#002b54] p-5 flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-yellow-400 text-[#002b54] flex items-center justify-center font-bold text-xl shadow-md">1</div>
                <h3 class="text-white font-bold text-xl">Pengajuan & Identifikasi</h3>
            </div>
            <div class="p-8">
                <p class="text-slate-700 mb-6 text-lg">
                    Pemohon mengajukan permintaan kepada PPID melalui petugas layanan. Petugas melakukan <strong>identifikasi jenis informasi</strong> yang dimohonkan:
                </p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                    <div class="p-5 bg-green-50 border border-green-200 rounded-xl">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-5 h-5 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                            <h4 class="font-bold text-green-800">Langsung Diberikan</h4>
                        </div>
                        <ul class="list-disc list-inside text-sm text-green-700 ml-1">
                            <li>Informasi Berkala</li>
                            <li>Informasi Serta Merta</li>
                        </ul>
                    </div>

                    <div class="p-5 bg-yellow-50 border border-yellow-200 rounded-xl">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-5 h-5 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" /></svg>
                            <h4 class="font-bold text-yellow-800">Melengkapi Persyaratan</h4>
                        </div>
                        <ul class="list-disc list-inside text-sm text-yellow-700 ml-1">
                            <li>Informasi Tersedia Setiap Saat</li>
                        </ul>
                    </div>
                </div>

                <div class="p-4 bg-red-50 border-l-4 border-red-500 rounded-r-lg">
                    <p class="text-red-700 text-sm font-medium">
                        <strong>DITOLAK:</strong> Petugas dapat menolak jika informasi yang dimohonkan termasuk kategori <u>Informasi yang Dikecualikan</u>.
                    </p>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden mb-8">
            <div class="bg-[#002b54] p-5 flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-yellow-400 text-[#002b54] flex items-center justify-center font-bold text-xl shadow-md">2</div>
                <h3 class="text-white font-bold text-xl">Administrasi & Verifikasi</h3>
            </div>
            <div class="p-8">
                <p class="text-slate-700 mb-6">
                    Petugas mengadministrasikan proses permohonan ke dalam formulir yang mencakup data berikut:
                </p>
                
                <ul class="grid grid-cols-1 md:grid-cols-2 gap-y-3 gap-x-8 text-sm text-slate-600 mb-8 list-disc pl-5">
                    <li>Nomor Pendaftaran</li>
                    <li>Nama Pemohon</li>
                    <li>Alamat & No. Telepon (Lampiran FC KTP)</li>
                    <li>Nama Pengguna Informasi</li>
                    <li>Alamat & No. Telepon Pengguna (Lampiran FC KTP)</li>
                    <li>Subyek & Keterangan Informasi</li>
                    <li>Tujuan Permintaan Informasi</li>
                    <li>Format & Cara Pengiriman</li>
                    <li>Tanggal & Tanda Tangan</li>
                </ul>

                <div class="flex flex-col md:flex-row gap-4 items-center bg-slate-50 p-5 rounded-xl border border-slate-200">
                    <div class="flex-1">
                        <h5 class="font-bold text-slate-800 mb-1">Verifikasi Data</h5>
                        <p class="text-sm text-slate-600">Petugas <strong>wajib memverifikasi</strong> data pemohon. Tanda bukti permohonan diberikan jika data sesuai.</p>
                    </div>
                    <div class="flex-1 border-l-2 border-slate-200 pl-4">
                        <h5 class="font-bold text-red-600 mb-1">Potensi Penolakan</h5>
                        <p class="text-sm text-slate-600">Permohonan berhak <strong>ditolak</strong> apabila ditemukan ketidaksesuaian data pemohon.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow-sm border border-slate-200 overflow-hidden mb-8">
            <div class="bg-[#002b54] p-5 flex items-center gap-4">
                <div class="w-10 h-10 rounded-full bg-yellow-400 text-[#002b54] flex items-center justify-center font-bold text-xl shadow-md">3</div>
                <h3 class="text-white font-bold text-xl">Proses & Waktu Pelayanan</h3>
            </div>
            <div class="p-8">
                <p class="text-slate-700 mb-6">
                    Setelah berkoordinasi dan mendapat persetujuan PPID, petugas akan memberikan tanggapan:
                </p>

                <div class="space-y-4">
                    <div class="flex flex-col md:flex-row gap-4 bg-green-50 p-4 rounded-xl border border-green-100 items-start">
                        <div class="bg-green-100 text-green-700 font-bold px-3 py-1 rounded text-xs uppercase tracking-wide">Diterima</div>
                        <div class="flex-1">
                            <p class="text-sm text-slate-700 font-semibold">Surat Pemberitahuan Informasi</p>
                            <p class="text-sm text-slate-500">Mencantumkan materi, format (soft/hardcopy), dan biaya (jika ada).</p>
                        </div>
                        <div class="text-right">
                            <span class="block text-2xl font-bold text-green-600">10 Hari</span>
                            <span class="text-xs text-slate-400 uppercase">Waktu Maksimal</span>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-4 bg-yellow-50 p-4 rounded-xl border border-yellow-100 items-start">
                        <div class="bg-yellow-100 text-yellow-700 font-bold px-3 py-1 rounded text-xs uppercase tracking-wide">Perpanjangan</div>
                        <div class="flex-1">
                            <p class="text-sm text-slate-700 font-semibold">Surat Pemberitahuan Perpanjangan</p>
                            <p class="text-sm text-slate-500">Dikirim jika data belum siap atau volume padat.</p>
                        </div>
                        <div class="text-right">
                            <span class="block text-2xl font-bold text-yellow-600">+7 Hari</span>
                            <span class="text-xs text-slate-400 uppercase">Waktu Tambahan</span>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row gap-4 bg-red-50 p-4 rounded-xl border border-red-100 items-start">
                        <div class="bg-red-100 text-red-700 font-bold px-3 py-1 rounded text-xs uppercase tracking-wide">Ditolak</div>
                        <div class="flex-1">
                            <p class="text-sm text-slate-700 font-semibold">Surat Penolakan</p>
                            <p class="text-sm text-slate-500">Wajib mencantumkan alasan penolakan berdasarkan UU KIP.</p>
                        </div>
                        <div class="text-right">
                            <span class="block text-xl font-bold text-red-600">Selesai</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-orange-100 p-2 rounded-lg text-orange-600">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"/></svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg">Mekanisme Keberatan</h3>
                </div>
                <ol class="list-decimal list-outside ml-5 space-y-3 text-sm text-slate-600">
                    <li>Jika keberatan dengan penolakan, pemohon mengajukan keberatan kepada <strong>Atasan PPID Universitas Jenderal Soedirman</strong>.</li>
                    <li>Jika masih tidak sesuai, Pemohon dapat mengajukan <strong>Sengketa Informasi</strong> kepada Komisi Informasi Pusat.</li>
                </ol>
            </div>

            <div class="bg-white rounded-2xl shadow-sm border border-slate-200 p-8">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-blue-100 p-2 rounded-lg text-blue-600">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                    </div>
                    <h3 class="font-bold text-slate-800 text-lg">Dokumentasi</h3>
                </div>
                <p class="text-sm text-slate-600 leading-relaxed">
                    Seluruh proses pelayanan, baik melalui media elektronik, lisan, maupun tertulis, <strong>wajib didokumentasikan</strong> dan dilaporkan sebagai bentuk akuntabilitas layanan publik.
                </p>
            </div>
        </div>

        <div class="bg-[#002b54] rounded-3xl p-10 md:p-12 text-center relative overflow-hidden shadow-2xl">
            <div class="absolute top-0 right-0 w-40 h-40 bg-white opacity-5 rounded-full -mr-10 -mt-10"></div>
            <div class="absolute bottom-0 left-0 w-32 h-32 bg-yellow-400 opacity-10 rounded-full -ml-10 -mb-10"></div>

            <div class="relative z-10">
                <h3 class="text-2xl md:text-3xl font-bold text-white mb-4">Siap Mengajukan Permohonan?</h3>
                <p class="text-blue-100 mb-8 max-w-xl mx-auto">
                    Silakan unduh formulir di bawah ini, lengkapi data yang dibutuhkan sesuai prosedur di atas.
                </p>
                
                <a href="#" class="inline-flex items-center gap-3 bg-yellow-400 text-[#002b54] hover:bg-yellow-300 px-8 py-4 rounded-full font-bold transition-all transform hover:-translate-y-1 shadow-lg">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                    </svg>
                    Unduh Formulir Permohonan
                </a>
            </div>
        </div>

    </div>
</div>