<?php
$img_file = $person['image'];
$display_img = $base_url . "/public/assets/img/profil_kependidikan/" . $img_file;

if(empty($img_file)) {
    $display_img = 'https://ui-avatars.com/api/?name=' . urlencode($person['name']) . '&background=002b54&color=fff&size=400';
}
?>

<div class="group bg-white rounded-lg border border-gray-200 hover:border-[#002b54] transition-all duration-300 p-5 hover:shadow-md cursor-pointer h-full flex flex-col justify-between"
     onclick="openStaffModal('<?= $display_img ?>', '<?= htmlspecialchars($person['name'], ENT_QUOTES) ?>', '<?= htmlspecialchars($person['department'], ENT_QUOTES) ?>')" data-aos="fade-up">
    
    <div>
        <h3 class="text-base font-bold text-[#002b54] leading-snug group-hover:text-blue-700 mb-2">
            <?= htmlspecialchars($person['name']) ?>
        </h3>
        <div class="w-8 h-0.5 bg-yellow-500 opacity-50 mb-2"></div>
        <p class="text-xs text-gray-500 uppercase tracking-wide">
            Staf Kependidikan
        </p>
    </div>

    <div class="mt-4 flex items-center text-xs text-yellow-600 font-semibold opacity-0 group-hover:opacity-100 transition-opacity transform translate-y-2 group-hover:translate-y-0 duration-300">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
        Lihat Profil
    </div>
</div>