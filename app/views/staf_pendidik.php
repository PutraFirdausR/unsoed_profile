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

<div class="bg-slate-50 min-h-screen font-sans text-[#002b54] py-16">
    
    <div class="bg-white pt-16 pb-8 mb-12">
        <div class="container mx-auto px-4 text-center">
            <span class="text-[#002b54] font-bold tracking-[0.2em] uppercase text-xs mb-3 block">
                Sumber Daya Manusia
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-[#002b54] mb-6">
                Staf Pendidik
            </h1>
            <div class="w-24 h-1.5 bg-yellow-500 mx-auto rounded-full mb-8"></div>
            
            <p class="text-gray-500 max-w-2xl mx-auto text-lg font-light mb-10">
                Pilih kategori bagian di bawah ini untuk menyaring daftar dosen.
            </p>

            <div class="flex flex-wrap justify-center gap-3 max-w-5xl mx-auto">
                <button onclick="filterLecturers('all', this)" 
                        class="filter-btn active px-6 py-2.5 rounded-full text-sm font-bold transition-all duration-300 shadow-sm border
                               bg-[#002b54] text-white border-[#002b54] ring-2 ring-offset-2 ring-[#002b54]/30"
                        data-target="all">
                    Semua Bagian
                </button>

                <?php foreach($departments as $dept): ?>
                <button onclick="filterLecturers('<?= md5($dept) ?>', this)" 
                        class="filter-btn px-6 py-2.5 rounded-full text-sm font-bold transition-all duration-300 shadow-sm border
                               bg-white text-gray-500 border-gray-200 hover:border-[#002b54] hover:text-yellow-400"
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
                
                <div id="<?= md5($deptName) ?>" class="department-section mb-16 animate-fade-in">
                    
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-1.5 h-8 bg-yellow-500 rounded-full"></div>
                        <h2 class="text-2xl font-bold text-[#002b54]">
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
    const allButtons = document.querySelectorAll('.filter-btn');
    allButtons.forEach(btn => {
        btn.classList.remove('bg-[#002b54]', 'text-white', 'ring-2', 'ring-offset-2', 'ring-[#002b54]/30');
        btn.classList.add('bg-white', 'text-gray-500', 'border-gray-200');
    });

    if (btnElement) {
        btnElement.classList.remove('bg-white', 'text-gray-500', 'border-gray-200');
        btnElement.classList.add('bg-[#002b54]', 'text-white', 'border-[#002b54]', 'ring-2', 'ring-offset-2', 'ring-[#002b54]/30');
    }

    const sections = document.querySelectorAll('.department-section');
    sections.forEach(sec => {
        if (targetId === 'all') {
            showSection(sec);
        } else {
            if (sec.id === targetId) {
                showSection(sec);
            } else {
                hideSection(sec);
            }
        }
    });
}

function showSection(el) {
    el.style.display = 'block';
    requestAnimationFrame(() => {
        el.style.opacity = '1';
    });
}

function hideSection(el) {
    el.style.opacity = '0';
    setTimeout(() => {
        el.style.display = 'none';
    }, 300);
}

function openProfileModal(primarySrc, backupSrc, name) {
    const modal = document.getElementById('profileModal');
    const modalImg = document.getElementById('modalImage');
    const modalName = document.getElementById('modalName');

    modalImg.src = primarySrc;
    modalName.textContent = name;

    modalImg.onerror = function() {
        if (this.src !== backupSrc) {
            console.log('Gambar resolusi tinggi tidak ditemukan, menggunakan thumbnail...');
            this.src = backupSrc;
        } else {
            this.src = 'https://ui-avatars.com/api/?name=' + encodeURIComponent(name) + '&background=002b54&color=fff&size=500';
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

<style>
    .department-section { transition: opacity 0.3s ease-in-out; }
</style>