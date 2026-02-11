<?php

$theme = $item['theme'] ?? 'slate';
$colors = [
    'emerald' => ['bg' => 'bg-emerald-50', 'text' => 'text-emerald-700', 'border' => 'border-emerald-500', 'btn' => 'hover:bg-emerald-600'],
    'gold'    => ['bg' => 'bg-yellow-50',   'text' => 'text-yellow-700',  'border' => 'border-yellow-500',  'btn' => 'hover:bg-yellow-600'],
    'blue'    => ['bg' => 'bg-blue-50',     'text' => 'text-blue-700',    'border' => 'border-blue-500',    'btn' => 'hover:bg-blue-600'],
    'slate'   => ['bg' => 'bg-gray-50',     'text' => 'text-gray-600',    'border' => 'border-gray-400',    'btn' => 'hover:bg-gray-600'],
];
$c = $colors[$theme] ?? $colors['slate'];
?>

<div class="group relative bg-white rounded-2xl shadow-sm hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 border border-gray-100 overflow-hidden flex flex-col h-full card-animation">
    
    <div class="h-1.5 w-full <?= $c['bg'] ?> <?= $c['border'] ?> border-t-4"></div>

    <div class="p-6 flex flex-col h-full">
        <div class="flex justify-between items-start mb-4">
            <span class="px-3 py-1 rounded-md text-[10px] font-black uppercase tracking-wider <?= $c['bg'] ?> <?= $c['text'] ?>">
                <?= $item['label'] ?>
            </span>
            <?php if($theme == 'gold'): ?>
                <svg class="w-6 h-6 text-yellow-500" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>    
            <?php else: ?>
                <svg class="w-6 h-6 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
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