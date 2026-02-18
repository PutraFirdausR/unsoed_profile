<?php
$colors = [
    'red'   => [
        'bg'   => 'bg-red-50', 
        'text' => 'text-red-900', 
        'btn'  => 'bg-red-950 hover:bg-red-900 focus:ring-red-900/30 shadow-red-950/20', 
        'ring' => 'focus:ring-red-900',
        'pag_hover' => 'hover:bg-red-950 hover:text-white hover:border-red-950'
    ],
];

// Kita paksa semua iconColor menggunakan skema 'red' yang baru
$c = $colors['red'];
?>

<div class="bg-white rounded-3xl shadow-xl shadow-gray-200/60 border border-white overflow-hidden mb-12" data-aos="zoom-in">
    
    <div class="px-8 py-10 border-b border-gray-100 bg-white">
        <div class="flex flex-col xl:flex-row justify-between items-start xl:items-center gap-8">
            <div class="flex items-center gap-5" data-aos="zoom-in-right">
                <div class="w-14 h-14 rounded-2xl <?= $c['bg'] ?> flex items-center justify-center <?= $c['text'] ?> shadow-sm shrink-0">
                    <?= $iconPath ?>
                </div>
                <div>
                    <h2 class="text-3xl font-bold text-red-950 tracking-tight"><?= $title ?></h2>
                    <p class="text-slate-500 text-base mt-2"><?= $description ?></p>
                </div>
            </div>

            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4 w-full xl:w-auto mt-4 xl:mt-0" data-aos="zoom-in-left">
                <div class="relative group w-full sm:w-80" >
                    <div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400 group-focus-within:text-red-900 transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                    </div>
                    <input type="text" id="<?= $searchId ?>" class="block w-full h-12 pl-12 pr-4 bg-gray-50 border border-gray-300 rounded-xl leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:bg-white focus:ring-2 <?= $c['ring'] ?> focus:border-transparent transition-all duration-200 text-sm font-medium shadow-sm" placeholder="Cari judul atau mitra...">
                </div>
                
                <?php if(isset($pdfLink) && $pdfLink): ?>
                <a href="<?= $pdfLink ?>" target="_blank" class="h-12 inline-flex items-center justify-center px-6 border border-transparent text-sm font-bold rounded-xl text-white <?= $c['btn'] ?> hover:-translate-y-0.5 focus:outline-none focus:ring-4 transition-all duration-200 shadow-lg whitespace-nowrap" data-aos="zoom-in-left">
                    <svg class="mr-2 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" /></svg>
                    Unduh PDF
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="overflow-x-auto">
        <table class="w-full text-left border-collapse">
            <thead class="bg-gray-50/80 border-b border-gray-200">
                <tr>
                    <th class="px-8 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider text-center w-20">No</th>
                    <th class="px-6 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider w-1/3">Mitra Kerjasama</th>
                    <th class="px-6 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider w-32">Level</th>
                    <th class="px-6 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider">Judul Kerjasama</th>
                    <th class="px-8 py-5 text-xs font-bold text-gray-500 uppercase tracking-wider w-1/5 text-right">Periode</th>
                </tr>
            </thead>
            <tbody id="<?= $tableBodyId ?>" class="bg-white divide-y divide-gray-100"></tbody>
        </table>
    </div>

    <div class="bg-white px-8 py-6 border-t border-gray-100 flex items-center justify-between">
        <span class="text-sm font-medium text-gray-500" id="<?= $infoId ?>">Loading...</span>
        
        <div class="flex gap-3">
            <button id="<?= $prevBtnId ?>" 
                    class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-bold text-gray-600 transition-all duration-200 shadow-sm 
                           <?= $c['pag_hover'] ?> 
                           disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-white disabled:hover:text-gray-600 disabled:hover:border-gray-300">
                Previous
            </button>
            
            <button id="<?= $nextBtnId ?>" 
                    class="px-5 py-2.5 border border-gray-300 rounded-lg text-sm font-bold text-gray-600 transition-all duration-200 shadow-sm 
                           <?= $c['pag_hover'] ?> 
                           disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:bg-white disabled:hover:text-gray-600 disabled:hover:border-gray-300">
                Next
            </button>
        </div>
    </div>
</div>