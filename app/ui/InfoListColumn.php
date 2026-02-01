<?php
$isLast = $isLast ?? false;
?>

<div class="bg-gray-50 p-8 <?= !$isLast ? 'border-r border-gray-200' : '' ?>">
    <h2 class="text-2xl font-bold text-[#002b54] mb-6 flex items-center gap-2">
        <span class="w-1 h-8 bg-yellow-500 rounded-full block"></span>
        <?= $title ?>
    </h2>
    
    <?php if(empty($data)): ?>
        <p class="text-gray-400 italic text-sm">Belum ada data tersedia.</p>
    <?php else: ?>
        <div class="space-y-6">
            <?php foreach($data as $item): ?>
            <article class="group cursor-pointer">
                <div class="flex items-center gap-2 mb-1">
                    <?php if(isset($item['is_announcement']) && $item['is_announcement']): ?>
                        <span class="w-2 h-2 rounded-full bg-red-500 animate-pulse"></span>
                    <?php endif; ?>
                    
                    <p class="text-xs font-bold <?= (isset($item['is_announcement']) && $item['is_announcement']) ? 'text-gray-500' : 'text-yellow-600 uppercase tracking-wider' ?>">
                        <?= tgl_indo($item['date']) ?>
                    </p>
                </div>

                <h3 class="text-base font-bold text-gray-800 group-hover:text-[#002b54] transition-colors leading-snug">
                    <a href="<?= $linkBase . $item['id'] ?>">
                        <?= e($item['title']) ?>
                    </a>
                </h3>
                
                <div class="h-px w-full bg-gray-200 mt-4 group-last:hidden"></div>
            </article>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    
    <a href="<?= $viewAllLink ?>" class="inline-flex items-center mt-6 text-[#002b54] text-sm font-bold hover:translate-x-1 transition-transform">
        <?= $viewAllText ?> 
        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
    </a>
</div>