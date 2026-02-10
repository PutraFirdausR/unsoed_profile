<div class="flex flex-col items-center justify-center p-4 group">
    
    <div class="text-yellow-500/50 mb-3 group-hover:scale-110 transition-all duration-300">
        <?= $stat['icon'] ?>
    </div>

    <span class="js-stat-counter text-4xl md:text-5xl font-bold text-white mb-2 drop-shadow-md" 
          data-target="<?= $stat['count']; ?>">
        0
    </span>
    
    <span class="text-[10px] md:text-xs font-bold text-gray-300 uppercase tracking-widest group-hover:text-white transition-colors">
        <?= $stat['label']; ?>
    </span>
</div>