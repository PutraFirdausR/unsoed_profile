<section class="py-12 bg-white"> 
    <div class="container mx-auto px-4 md:px-8"
    >
        
        <div class="text-center mb-10"
        >
            <h2 class="text-2xl md:text-3xl font-bold text-[#002b54] uppercase tracking-wider" data-aos="zoom-in">
                Program Studi
            </h2>
            <div class="h-1 w-20 bg-yellow-500 mx-auto mt-3 rounded-full" 
                 data-aos="fade-zoom-in"
                 data-aos-easing="ease-in-back"
                 data-aos-delay="100"
                 data-aos-offset="0">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6"
        data-aos="fade-up">
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