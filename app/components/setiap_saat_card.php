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
                elseif($icon == 'book') echo '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/></svg>';
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