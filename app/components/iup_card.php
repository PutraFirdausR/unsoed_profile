<?php
// FILE: app/components/iup_card.php
// Variables: $doc (array)
?>

<div class="bg-white rounded-2xl border border-gray-200 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden group flex flex-col h-full">
    
    <div class="bg-[#002b54] p-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-8 -mt-8 blur-2xl"></div>
        
        <div class="flex items-start justify-between">
            <div class="w-14 h-14 bg-yellow-500 rounded-xl flex items-center justify-center text-[#002b54] shadow-lg">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <?= $doc['icon'] ?>
                </svg>
            </div>
            <span class="bg-white/20 text-white text-xs px-3 py-1 rounded-full font-medium backdrop-blur-sm border border-white/10">
                PDF File
            </span>
        </div>
    </div>

    <div class="p-8 grow flex flex-col">
        <h3 class="text-xl font-bold text-[#002b54] mb-1 group-hover:text-blue-700 transition-colors">
            <?= $doc['title'] ?>
        </h3>
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wide mb-4">
            <?= $doc['sub'] ?>
        </p>
        
        <p class="text-gray-600 text-sm leading-relaxed mb-8 border-b border-gray-100 pb-6 grow">
            <?= $doc['desc'] ?>
        </p>

        <a href="<?= base_url('assets/docs/' . $doc['file']) ?>" target="_blank" 
           class="w-full inline-flex items-center justify-center px-6 py-3 bg-[#002b54] text-white font-bold rounded-lg hover:bg-yellow-500 hover:text-yellow-500 transition-all duration-300 gap-2 group/btn shadow-md border border-transparent">
            
            <svg class="w-5 h-5 transition-transform group-hover/btn:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
            </svg>
            
            Lihat Dokumen
        </a>
    </div>
</div>