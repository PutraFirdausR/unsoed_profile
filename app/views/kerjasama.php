<?php
// FILE: app/views/kerjasama.php

// 1. Load Logic Database
require __DIR__ . '/../data/kerjasama_data.php';

$page_title = 'Kerjasama';
$page_bg    = '/unsoed_profile/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php';
?>

<div class="bg-gray-50 font-sans text-gray-800 w-full min-h-screen ">

    <div class="container mx-auto px-4 md:px-6 lg:px-8 max-w-7xl relative z-20 py-16 space-y-12">

        <div class="w-full">
            <h2 class="text-3xl font-bold text-[#002b54] mb-6 border-b-2 border-yellow-400 pb-3 inline-block">Komitmen Kerjasama Fakultas Hukum UNSOED</h2>
            <div class="text-slate-600 text-lg leading-relaxed space-y-4 text-justify">
                <p>
                    Dalam rangka mendukung visi dan misi dari <strong>Fakultas Hukum UNSOED</strong>, maka diperlukan peningkatan kualitas pendidikan, penelitian, maupun pengabdian kepada masyarakat. Untuk mendukung hal tersebut diperlukan sebuah komitmen untuk memperluas jaringan dan komunikasi kepada berbagai macam lembaga yang ada di Indonesia.
                </p>
                <p>
                    Hal tersebut diwujudkan dengan membuka kesempatan melakukan perjanjian kerjasama dengan instansi lain. Baik itu perguruan tinggi, lembaga pemerintahan, sektor swasta, maupun organisasi non pemerintah. Semakin banyaknya kerjasama dengan berbagai sektor akan semakin memperkaya wawasan akademik, memperkuat kompetensi profesional, serta memberikan kontribusi nyata dalam pengembangan kebijakan hukum dan keadilan di Indonesia.
                </p>
                <p class="font-bold text-[#002b54] pt-2">
                    Berikut adalah daftar kerjasama yang telah terjalin:
                </p>
            </div>
        </div>

        <?php 
            $title = 'Penelitian & Riset';
            $description = 'Daftar kolaborasi riset akademik dan pengembangan hukum.';
            $iconColor = 'blue';
            $iconPath = '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>';
            $searchId = 'searchResearch';
            $tableBodyId = 'tableBodyResearch';
            $infoId = 'infoResearch';
            $prevBtnId = 'prevResearch';
            $nextBtnId = 'nextResearch';
            $pdfLink = '/unsoed_profile/public/assets/docs/KerjasamaBidangPenelitian.pdf';
            
            include __DIR__ . '/../components/kerjasama_table.php'; 
        ?>

        <?php 
            $title = 'Pengabdian Masyarakat';
            $description = 'Implementasi Tri Dharma perguruan tinggi kepada publik.';
            $iconColor = 'teal';
            $iconPath = '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" /></svg>';
            $searchId = 'searchCommunity';
            $tableBodyId = 'tableBodyCommunity';
            $infoId = 'infoCommunity';
            $prevBtnId = 'prevCommunity';
            $nextBtnId = 'nextCommunity';
            $pdfLink = '/unsoed_profile/public/assets/docs/KerjasamaBidangPengabdian.pdf';
            
            include __DIR__ . '/../components/kerjasama_table.php'; 
        ?>

        <?php 
            $title = 'Bidang Pendidikan';
            $description = 'Kerjasama pengembangan kurikulum dan pertukaran akademik.';
            $iconColor = 'indigo';
            $iconPath = '<svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" /></svg>';
            $searchId = 'searchEducation';
            $tableBodyId = 'tableBodyEducation';
            $infoId = 'infoEducation';
            $prevBtnId = 'prevEducation';
            $nextBtnId = 'nextEducation';
            // PDF Link dihapus karena di kode asli tidak ada
            $pdfLink = null; 
            
            include __DIR__ . '/../components/kerjasama_table.php'; 
        ?>

    </div>
</div>

<script>
    window.UNSOED_DATA = {
        research: <?php echo json_encode($researchData); ?>,
        community: <?php echo json_encode($communityData); ?>,
        education: <?php echo json_encode($educationData); ?>
    };
</script>

<script src="/unsoed_profile/public/assets/js/kerjasama.js"></script>