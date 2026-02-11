<div class="group bg-white rounded-2xl shadow-sm border border-gray-100 hover:shadow-xl hover:-translate-y-1 transition-all duration-300 flex flex-col h-full relative overflow-hidden">
    
    <div class="h-2 w-full bg-[#002b54] group-hover:bg-yellow-500 transition-colors"></div>

    <div class="p-8 flex flex-col grow">
        
        <h3 class="text-xl font-bold text-[#002b54] mb-3 group-hover:text-yellow-600 transition-colors flex items-center gap-2">
            <svg class="w-6 h-6 text-gray-400 group-hover:text-yellow-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
            <?= $item['nama'] ?>
        </h3>
        
        <p class="text-gray-600 text-sm mb-6 leading-relaxed border-b border-gray-100 pb-4">
            <?= $item['desc'] ?>
        </p>

        <div class="mt-auto">
            <h4 class="text-xs font-bold text-gray-400 uppercase tracking-wider mb-3">Fasilitas Tersedia:</h4>
            <ul class="space-y-2">
                <?php foreach ($item['items'] as $fitur): ?>
                <li class="flex items-start text-sm text-gray-700 group/item">
                    <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 shrink-0 group-hover/item:text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                    <span class="text-gray-600 group-hover/item:text-gray-900 transition-colors"><?= $fitur ?></span>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
        
    </div>
</div>