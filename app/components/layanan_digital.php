<?php
require_once __DIR__ . '/../config/database.php';

try {
    $stmt = $pdo->query("SELECT * FROM services");
    $services = $stmt->fetchAll();
} catch (PDOException $e) {
    $services = [];
}

function get_service_icon($type) {
    $icons = [
        'desktop' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />',
        'book'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />',
        'globe'   => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />',
        'library' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />',
        'users'   => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />',
        'default' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />'
    ];
    return $icons[$type] ?? $icons['default'];
}
?>

<section class="py-16 bg-red-950 border-b-2 border-white">
    <div class="container mx-auto px-4 md:px-8">
        
        <div class="text-center mb-10">
            <h2 class="text-2xl md:text-3xl font-bold text-white uppercase tracking-wider" data-aos="zoom-in">
                Layanan Digital & Sistem Informasi
            </h2>
            <div class="h-1 w-20 bg-yellow-500 mx-auto mt-3 rounded-full"
                 data-aos="fade-right"
                 data-aos-delay="200">
             </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 xl:grid-cols-5 gap-4"
        data-aos="fade-up">
            
            <?php foreach($services as $svc): ?>
            
            <a href="<?= $svc['link'] ?>" target="_blank" class="group bg-white rounded-xl p-4 flex items-center gap-4 hover:shadow-[0_0_20px_rgba(255,255,255,0.3)] hover:-translate-y-1 transition-all duration-300 border border-transparent hover:border-yellow-400">
                
                <div class="shrink-0 w-12 h-12 rounded-full bg-red-950 text-white flex items-center justify-center group-hover:bg-yellow-500 transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <?= get_service_icon($svc['icon_type']) ?>
                    </svg>
                </div>

                <div class="grow">
                    <h3 class="text-sm font-extrabold text-red-950 uppercase leading-tight group-hover:text-black transition-colors">
                        <?= htmlspecialchars($svc['title']) ?>
                    </h3>
                    </div>

                <div class="text-gray-300 group-hover:text-yellow-500 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                </div>

            </a>
            
            <?php endforeach; ?>

        </div>
    </div>
</section>