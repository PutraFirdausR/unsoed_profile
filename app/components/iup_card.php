<div class="bg-white rounded-2xl border border-gray-200 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-1 overflow-hidden group flex flex-col h-full" 
     data-aos="fade-up" 
     data-aos-delay="<?= $aos_delay ?? 0 ?>">
    
    <div class="bg-red-950 p-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-24 h-24 bg-white/10 rounded-full -mr-8 -mt-8 blur-2xl"></div>
        
        <div class="flex items-start justify-between">
            <div class="w-14 h-14 bg-yellow-500 rounded-xl flex items-center justify-center text-red-950 shadow-lg">
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
        <h3 class="text-xl font-bold text-red-950 mb-1 group-hover:text-red-700 transition-colors">
            <?= $doc['title'] ?>
        </h3>
        <p class="text-xs font-bold text-gray-400 uppercase tracking-wide mb-4">
            <?= $doc['sub'] ?>
        </p>
        
        <p class="text-gray-600 text-sm leading-relaxed mb-8 border-b border-gray-100 pb-6 grow">
            <?= $doc['desc'] ?>
        </p>

        <a href="<?= base_url('assets/docs/' . $doc['file']) ?>" target="_blank" 
           class="w-full inline-flex items-center justify-center px-6 py-3 bg-red-950 text-white font-bold rounded-lg hover:bg-black transition-all duration-300 gap-2 group/btn shadow-md border border-transparent">
            
            <svg class="w-5 h-5 transition-transform group-hover/btn:scale-110" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4"/>
            </svg>
            <span>Download Sekarang</span>
        </a>
    </div>
</div>