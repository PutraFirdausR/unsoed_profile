<section class="py-12 bg-white"> 
    <div class="container mx-auto px-4 md:px-8">
        
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-[#002b54]">Program Studi</h2>
            <div class="w-20 h-1 bg-yellow-500 mx-auto mt-2"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">

            <?php
            $degrees = [
                [
                    'title' => 'Sarjana Hukum',
                    'code'  => '(S1)',
                    'link'  => '#' 
                ],
                [
                    'title' => 'Magister Hukum',
                    'code'  => '(S2)',
                    'link'  => '#' 
                ],
                [
                    'title' => 'Magister Kenotariatan',
                    'code'  => '(S2)',
                    'link'  => '#' 
                ],
                [
                    'title' => 'Doktor Hukum',
                    'code'  => '(S3)',
                    'link'  => '#' 
                ],
            ];

            foreach ($degrees as $item) {
                $title = $item['title'];
                $code  = $item['code'];
                $link  = $item['link'];

               include __DIR__ . '/../ui/CardDegree.php';
            }
            ?>

        </div>
    </div>
</section>