<?php
// FILE: app/components/alumni_card.php
// Variable $alumni diterima dari loop
?>

<div class="bg-white rounded-lg border border-slate-200 overflow-hidden hover:shadow-lg transition-shadow duration-300 flex flex-col h-full">
    
    <div class="aspect-4/3 w-full bg-slate-100 overflow-hidden relative border-b border-slate-100 group">
        <img src="<?= $alumni['foto'] ?>" 
             alt="<?= htmlspecialchars($alumni['nama']) ?>" 
             class="w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-105"
             onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($alumni['nama']) ?>&background=eff6ff&color=002b54&size=512'">
    </div>

    <div class="p-6 flex flex-col grow">
        <h3 class="text-lg font-bold text-[#002b54] mb-1 leading-snug">
            <?= htmlspecialchars($alumni['nama']) ?>
        </h3>
        
        <p class="text-sm font-semibold text-yellow-600 mb-3 uppercase tracking-wide">
            <?= htmlspecialchars($alumni['jabatan']) ?>
        </p>
        
        <hr class="border-slate-100 mb-3 w-full">

        <p class="text-slate-600 text-sm leading-relaxed grow">
            <?= htmlspecialchars($alumni['deskripsi']) ?>
        </p>
    </div>

</div>