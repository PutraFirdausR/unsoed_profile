<?php
$stats = [
    [
        'count' => 417,  
        'label' => 'Lulusan 2024',
        'icon'  => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path></svg>'
    ],
    [
        'count' => 328,  
        'label' => 'Prodi S1',
        'icon'  => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>'
    ],
    [
        'count' => 80,   
        'label' => 'Prodi S2',
        'icon'  => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>'
    ],
    [
        'count' => 9,    
        'label' => 'Prodi S3',
        'icon'  => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>'
    ],
    [
        'count' => 1611, 
        'label' => 'Mahasiswa Total',
        'icon'  => '<svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>'
    ],
];
?>

<section class="py-12">
    <div class="container mx-auto px-4 md:px-8">
        
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-[#002b54] mb-2">FH UNSOED Dalam Angka</h2>
            <p class="text-gray-500 text-sm font-medium">Data Statistik Tahun Akademik 2024/2025</p>
            <div class="h-1 w-20 bg-yellow-500 mt-2 rounded-full <?= $align === 'center' ? 'mx-auto' : '' ?>"></div>
        </div>

        <div class="relative bg-[#002b54] rounded-3xl overflow-hidden shadow-2xl transform hover:scale-[1.01] transition-transform duration-500">
            
            <div class="absolute top-0 right-0 -mt-10 -mr-10 w-40 h-40 bg-yellow-500 rounded-full opacity-20 blur-2xl"></div>
            <div class="absolute bottom-0 left-0 -mb-10 -ml-10 w-40 h-40 bg-blue-400 rounded-full opacity-20 blur-2xl"></div>

            <div class="relative z-10 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 divide-x text-yellow-400 text-center py-12">
                
                <?php foreach ($stats as $stat): ?>
                    <div class="flex flex-col items-center justify-center p-4 group">
                        
                        <div class="text-yellow-500/50 mb-3  group-hover:scale-110 transition-all duration-300">
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
                <?php endforeach; ?>

            </div>
        </div>

    </div>
</section>