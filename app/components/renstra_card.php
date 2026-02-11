<div class="bg-white rounded-xl shadow-sm border border-gray-200 hover:border-blue-400 hover:shadow-md transition-all duration-300 group overflow-hidden mb-4">
    <div class="flex flex-col md:flex-row items-start md:items-center p-6 gap-6">
        
        <div class="shrink-0">
            <div class="w-16 h-16 bg-red-50 text-red-500 rounded-lg flex items-center justify-center border border-red-100 group-hover:bg-red-100 transition-colors">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
            </div>
        </div>

        <div class="grow">
            <div class="flex items-center gap-3 mb-1">
                <h4 class="text-xl font-bold text-[#002b54] group-hover:text-blue-600 transition-colors">
                    <?= $item['judul'] ?>
                </h4>
                <span class="hidden md:inline-flex items-center px-2.5 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800 border border-blue-200">
                    PDF
                </span>
                <?php if(isset($item['active']) && $item['active']): ?>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded text-xs font-medium bg-green-100 text-green-800 border border-green-200">
                        Aktif
                    </span>
                <?php endif; ?>
            </div>
            
            <div class="flex items-center gap-4 text-sm text-gray-500 mb-2">
                <span class="flex items-center gap-1">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    Periode: <?= $item['tahun'] ?>
                </span>
            </div>

            <p class="text-gray-500 text-sm line-clamp-2 md:line-clamp-1">
                <?= $item['desc'] ?>
            </p>
        </div>

        <div class="w-full md:w-auto shrink-0 mt-4 md:mt-0">
            <a href="<?= $item['link'] ?>" target="_blank" class="flex items-center justify-center gap-2 w-full md:w-auto px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white text-sm font-bold rounded-lg transition-all duration-200 shadow-sm hover:shadow-lg active:scale-95">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                Unduh File
            </a>
        </div>

    </div>
</div>