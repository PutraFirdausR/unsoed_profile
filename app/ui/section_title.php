<?php
$title = $title ?? 'Judul Section';
$align = $align ?? 'center'; 
$color = $color ?? 'text-[#002b54]';
?>

<div class="text-<?= $align ?> mb-10">
    <h2 class="text-3xl md:text-3xl font-bold <?= $color ?>">
        <?= $title ?>
    </h2>
    <div class="h-1 w-20 bg-yellow-500 mt-2 rounded-full <?= $align === 'center' ? 'mx-auto' : '' ?>"></div>
</div>