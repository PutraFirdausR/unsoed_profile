<?php
?>
<div class="relative group h-full flex items-center">
    <button class="flex items-center text-white font-medium hover:text-yellow-600 transition px-1 cursor-pointer">
        <span><?php echo $label; ?></span>
        <svg class="w-4 h-4 ml-1 transform group-hover:rotate-180 transition duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
        </svg>
    </button>
    
    <div class="absolute left-0 top-full pt-4 w-56 hidden group-hover:block z-50">
        <div class="bg-white shadow-xl text-sm overflow-hidden border-t-4 border-yellow-500 rounded-b-md">
            <?php foreach ($items as $item): ?>
                <a href="<?php echo $item['url']; ?>" class="block px-4 py-3 text-gray-500 hover:bg-yellow-50 border-b border-gray-100 hover:text-yellow-600 transition duration-200">
                    <?php echo $item['text']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>