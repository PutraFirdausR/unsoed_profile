<section class="py-12 bg-white"> 
    <div class="container mx-auto px-4 md:px-8">
        
        <?php 
        $title = 'Program Studi';
        $align = 'center';
        require __DIR__ . '/../ui/section_title.php'; 
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <?php
            $degrees = [
                ['title' => 'Sarjana Hukum',       'code' => '(S1)', 'link' => base_url('prodi-s1')],
                ['title' => 'Magister Hukum',      'code' => '(S2)', 'link' => base_url('magister_hukum')],
                ['title' => 'Magister Kenotariatan','code' => '(S2)', 'link' => base_url('magister-kenotariatans')],
                ['title' => 'Doktor Hukum',        'code' => '(S3)', 'link' => base_url('program-doktor')],
            ];

            foreach ($degrees as $item) {
                $title = $item['title'];
                $code  = $item['code'];
                $link  = $item['link'];
                
                echo "<div>";
                require __DIR__ . '/../ui/card_degree.php';
                echo "</div>";
            }
            ?>
        </div>
    </div>
</section>