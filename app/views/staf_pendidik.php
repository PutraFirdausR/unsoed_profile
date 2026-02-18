<?php
$base_url = '/unsoed_profile'; 
require_once __DIR__ . '/../helpers.php'; 

$data = require __DIR__ . '/../data/pendidik_data.php';
$grouped_lecturers = $data['grouped_lecturers'];
$departments       = $data['departments'];

$page_title = 'Staf Pendidik';
$page_bg    = $base_url . '/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php';
?>

<div class=" min-h-screen font-sans text-red-950 py-16">
    
    <div class="  pb-8 mb-12" data-aos="zoom-in" data-aos-duration="800">
        <div class="container mx-auto px-4 text-center">
            <span class="text-red-950 font-bold tracking-[0.2em] uppercase text-xs mb-3 block" data-aos="fade-down" data-aos-delay="200">
                Sumber Daya Manusia
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-red-950 mb-6">
                Staf Pendidik
            </h1>
            <div class="w-24 h-1.5 bg-yellow-500 mx-auto rounded-full mb-8" data-aos="zoom-in-right" data-aos-delay="400"></div>
            
            <p class="text-gray-500 max-w-2xl mx-auto text-lg font-light mb-10" data-aos="fade-up" data-aos-delay="500">
                Pilih kategori bagian di bawah ini untuk menyaring daftar dosen.
            </p>

            <div class="flex flex-wrap justify-center gap-3 max-w-5xl mx-auto" data-aos="fade-up" data-aos-delay="600">
                <button onclick="filterLecturers('all', this)" 
                        class="filter-btn active px-6 py-2.5 rounded-full text-sm font-bold transition-all duration-300 shadow-sm border
                               bg-red-950 text-white border-red-950 ring-2 ring-offset-2 ring-red-900/30"
                        data-target="all">
                    Semua Bagian
                </button>

                <?php foreach($departments as $dept): ?>
                <button onclick="filterLecturers('<?= md5($dept) ?>', this)" 
                        class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold transition-all duration-300 shadow-sm border
                               bg-white text-gray-500 border-gray-200 hover:border-red-950 hover:text-yellow-600"
                        data-target="<?= md5($dept) ?>">
                    <?= htmlspecialchars($dept) ?>
                </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 md:px-8 min-h-125">
        <?php if(empty($grouped_lecturers)): ?>
            <div class="text-center py-20 bg-white rounded-xl border border-dashed border-gray-300">
                <p class="text-gray-400">Data belum tersedia.</p>
            </div>
        <?php else: ?>

            <?php foreach($grouped_lecturers as $deptName => $lecturers): ?>
                <div id="<?= md5($deptName) ?>" class="department-section mb-16">
                    
                    <div class="flex items-center gap-4 mb-8" data-aos="fade-right">
                        <div class="w-1.5 h-8 bg-yellow-500 rounded-full"></div>
                        <h2 class="text-2xl font-bold text-red-950">
                            <?= htmlspecialchars($deptName) ?>
                        </h2>
                        <div class="h-px bg-gray-200 grow"></div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                        <?php foreach($lecturers as $dosen): ?>
                            <?php include __DIR__ . '/../components/pendidik_card.php'; ?>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</div>

<?php include __DIR__ . '/../components/pendidik_modal.php'; ?>

<script>
function filterLecturers(targetId, btnElement) {
    // Reset Button Styles
    const allButtons = document.querySelectorAll('.filter-btn');
    allButtons.forEach(btn => {
        btn.classList.remove('bg-red-950', 'text-white', 'ring-2', 'ring-offset-2', 'ring-red-900/30', 'border-red-950');
        btn.classList.add('bg-white', 'text-gray-500', 'border-gray-200');
    });

    // Set Active Button
    if (btnElement) {
        btnElement.classList.remove('bg-white', 'text-gray-500', 'border-gray-200');
        btnElement.classList.add('bg-red-950', 'text-white', 'border-red-950', 'ring-2', 'ring-offset-2', 'ring-red-900/30');
    }

    // Filter Sections
    const sections = document.querySelectorAll('.department-section');
    sections.forEach(sec => {
        if (targetId === 'all') {
            sec.style.display = 'block';
        } else {
            sec.style.display = (sec.id === targetId) ? 'block' : 'none';
        }
    });

    // Refresh AOS agar elemen yang muncul kembali teranimasi
    setTimeout(() => {
        if (typeof AOS !== 'undefined') {
            AOS.refresh();
        }
    }, 100);
}

function openProfileModal(primarySrc, backupSrc, name) {
    const modal = document.getElementById('profileModal');
    const modalImg = document.getElementById('modalImage');
    const modalName = document.getElementById('modalName');

    modalImg.src = primarySrc;
    modalName.textContent = name;

    modalImg.onerror = function() {
        if (this.src !== backupSrc) {
            this.src = backupSrc;
        } else {
            this.src = 'https://ui-avatars.com/api/?name=' + encodeURIComponent(name) + '&background=450a0a&color=fff&size=500';
        }
    };

    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeProfileModal() {
    const modal = document.getElementById('profileModal');
    modal.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

document.addEventListener('keydown', function(event) {
    if (event.key === "Escape") {
        closeProfileModal();
    }
});
</script>