<?php
$base_url = '/unsoed_profile'; 
require_once __DIR__ . '/../helpers.php'; 

$data = require __DIR__ . '/../data/kependidikan_data.php';
$grouped_staff = $data['grouped_staff'];
$departments   = $data['departments'];

$page_title = 'Staf Kependidikan';
$page_bg    = $base_url . '/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/page_header.php';
?>

<div class=" min-h-screen font-sans text-[#002b54] py-16">
    
    <div class="pt-16 pb-8 mb-12">
        <div class="container mx-auto px-4 text-center">
            <span class="text-[#002b54] font-bold tracking-[0.2em] uppercase text-xs mb-3 block">
                Sumber Daya Manusia
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold text-[#002b54] mb-6">
                Tenaga Kependidikan
            </h1>
            <div class="w-24 h-1.5 bg-yellow-500 mx-auto rounded-full mb-8"></div>
            
            <p class="text-gray-500 max-w-2xl mx-auto text-lg font-light mb-10">
                Pilih sub bagian di bawah ini untuk melihat daftar staf.
            </p>

            <div class="flex flex-wrap justify-center gap-3 max-w-6xl mx-auto">
                <button onclick="filterStaff('all', this)" 
                        class="filter-btn active px-6 py-2.5 rounded-full text-sm font-bold transition-all duration-300 shadow-sm border
                               bg-[#002b54] text-white border-[#002b54] ring-2 ring-offset-2 ring-[#002b54]/30"
                        data-target="all">
                    Semua Bagian
                </button>

                <?php foreach($departments as $dept): ?>
                <button onclick="filterStaff('<?= md5($dept) ?>', this)" 
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
        
        <?php if(empty($grouped_staff)): ?>
            <div class="text-center py-20 bg-white rounded-xl border border-dashed border-gray-300">
                <svg class="w-16 h-16 text-gray-300 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                <p class="text-gray-500">Data staf belum tersedia saat ini.</p>
            </div>
        <?php else: ?>

            <?php foreach($grouped_staff as $deptName => $staff_list): ?>
                
                <div id="<?= md5($deptName) ?>" class="department-section mb-16 animate-fade-in">
                    
                    <div class="flex items-center gap-4 mb-8">
                        <div class="w-1.5 h-8 bg-yellow-500 rounded-full"></div>
                        <h2 class="text-2xl font-bold text-[#002b54]">
                            <?= htmlspecialchars($deptName) ?>
                        </h2>
                        <div class="h-px bg-gray-200 grow"></div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                        <?php foreach($staff_list as $person): ?>
                            
                            <?php include __DIR__ . '/../components/kependidikan_card.php'; ?>

                        <?php endforeach; ?>
                    </div>
                </div>

            <?php endforeach; ?>

        <?php endif; ?>
    </div>
</div>

<?php include __DIR__ . '/../components/kependidikan_modal.php'; ?>

<script>
function filterStaff(targetId, btnElement) {
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
        el.style.transform = 'translateY(0)';
    });
}

function hideSection(el) {
    el.style.opacity = '0';
    el.style.transform = 'translateY(10px)';
    setTimeout(() => {
        el.style.display = 'none';
    }, 300);
}

function openStaffModal(imageSrc, name, dept) {
    const modal = document.getElementById('staffModal');
    const modalImg = document.getElementById('modalImage');
    const modalName = document.getElementById('modalName');
    const modalDept = document.getElementById('modalDept');

    modalImg.src = imageSrc;
    modalImg.onerror = function() {
        this.src = 'https://ui-avatars.com/api/?name=' + encodeURIComponent(name) + '&background=002b54&color=fff&size=500';
    };

    modalName.textContent = name;
    modalDept.textContent = dept;

    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeStaffModal() {
    const modal = document.getElementById('staffModal');
    modal.classList.add('hidden');
    document.body.style.overflow = 'auto';
}

document.addEventListener('keydown', function(event) {
    if (event.key === "Escape") {
        closeStaffModal();
    }
});
</script>

<style>
    .department-section { 
        transition: opacity 0.3s ease, transform 0.3s ease; 
        transform: translateY(0);
    }
    .bg-pattern {
        background-image: radial-gradient(#e5e7eb 1px, transparent 1px);
        background-size: 20px 20px;
    }
</style>