<?php
$link  = $link ?? '#';
$title = $title ?? 'Judul';
$code  = $code ?? '';
?>

<a href="<?= $link; ?>" class="block h-full bg-white rounded-xl p-8 border border-gray-200 shadow-lg relative overflow-hidden group transition-transform hover:-translate-y-1">
    
    <div class="absolute top-0 left-0 w-full h-1 bg-yellow-500"></div>

    <div class="flex flex-col items-center text-center mt-2">
        <div class="mb-5 flex items-center justify-center w-16 h-16 rounded-full bg-blue-50 text-[#002b54] border border-blue-100 shadow-sm">
            <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 3L1 9l11 6 9-4.91V17h2V9M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82z"/>
            </svg>
        </div>
        
        <h3 class="text-xl font-bold text-gray-800 mb-2 group-hover:text-[#002b54] transition-colors">
            <?= $title; ?>
        </h3>
        
        <span class="inline-block bg-gray-100 text-[#002b54] text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-gray-200">
            <?= $code; ?>
        </span>
    </div>
</a>