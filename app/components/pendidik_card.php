<?php

$thumbnail_file = $dosen['image'];
$thumbnail_path = $base_url . "/public/assets/img/profil_dosen/" . $thumbnail_file;

$popup_file = !empty($dosen['image_staf']) ? $dosen['image_staf'] : $dosen['image'];
$popup_path = $base_url . "/public/assets/img/profil_staf/" . $popup_file;

$jsName = htmlspecialchars($dosen['name'], ENT_QUOTES);
?>

<div class="group bg-white rounded-xl border border-gray-200 hover:border-[#002b54] transition-all duration-300 flex flex-col overflow-hidden hover:shadow-xl hover:shadow-blue-900/10 h-full">
    
    <div class="aspect-4/5 w-full overflow-hidden bg-slate-100 relative cursor-zoom-in"
         onclick="openProfileModal('<?= $popup_path ?>', '<?= $thumbnail_path ?>', '<?= $jsName ?>')">
        
        <img src="<?= $thumbnail_path ?>" 
             onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($dosen['name']) ?>&background=002b54&color=fff&size=400'"
             alt="<?= htmlspecialchars($dosen['name']) ?>" 
             class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
        
        <div class="absolute bottom-0 left-0 right-0 h-1.5 bg-yellow-500 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
    </div>

    <div class="p-6 flex flex-col grow text-center">
        <h3 class="text-base font-bold text-[#002b54] mb-2 leading-snug group-hover:text-yellow-600 transition-colors">
            <?= htmlspecialchars($dosen['name']) ?>
        </h3>
        
        <div class="mt-auto pt-2">
            <span class="inline-block text-[10px] text-gray-400 font-bold uppercase tracking-wider bg-gray-50 px-2 py-1 rounded border border-gray-100">
                <?= htmlspecialchars($dosen['department']) ?>
            </span>
        </div>
    </div>
</div>