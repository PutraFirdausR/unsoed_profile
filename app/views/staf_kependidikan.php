<?php
// FILE: app/views/staf_kependidikan.php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

// Konfigurasi Path Project
$base_url = '/unsoed_profile'; 

// Ambil data staf dari database
try {
    $stmt = $pdo->query("SELECT * FROM staff ORDER BY department ASC, name ASC");
    $all_staff = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Kelompokkan data per bagian
    $grouped_staff = [];
    foreach ($all_staff as $staf) {
        $grouped_staff[$staf['department']][] = $staf;
    }

    $departments = array_keys($grouped_staff);

} catch (PDOException $e) {
    $grouped_staff = [];
    $departments = [];
}

$page_title = 'Staf Kependidikan';
$page_bg    = $base_url . '/public/assets/img/home.jpg'; 
require __DIR__ . '/../ui/PageHeader.php';
?>

<div class="bg-slate-50 min-h-screen font-sans text-[#002b54] py-16">
    
    <div class="bg-white pt-16 pb-8 border-b border-gray-100">
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
                               bg-white text-gray-500 border-gray-200 hover:border-[#002b54] "
                        data-target="<?= md5($dept) ?>">
                    <?= htmlspecialchars($dept) ?>
                </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 md:px-8 py-12 min-h-150">
        
        <?php if(empty($grouped_staff)): ?>
            <div class="text-center py-20 bg-white rounded-xl border border-dashed border-gray-300">
                <p class="text-gray-400">Data belum tersedia.</p>
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

                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4">
                        <?php foreach($staff_list as $person): 
                            // Setup Path Gambar
                            $img_file = $person['image'];
                            $popup_path = $base_url . "/public/assets/img/profil_kependidikan/" . $img_file;
                            
                            // Avatar Fallback
                            if(empty($img_file)) {
                                $popup_path = 'https://ui-avatars.com/api/?name=' . urlencode($person['name']) . '&background=002b54&color=fff&size=400';
                            }
                        ?>
                        
                        <div class="group bg-white rounded-lg border border-gray-200 hover:border-[#002b54] transition-all duration-300 p-5 hover:shadow-md cursor-pointer h-full flex flex-col justify-between"
                             onclick="openStaffModal('<?= $popup_path ?>', '<?= htmlspecialchars($person['name']) ?>', '<?= htmlspecialchars($person['department']) ?>')">
                            
                            <div>
                                <h3 class="text-base font-bold text-[#002b54] leading-snug group-hover:text-blue-700 mb-2">
                                    <?= htmlspecialchars($person['name']) ?>
                                </h3>
                                <div class="w-8 h-0.5 bg-yellow-500 opacity-50 mb-2"></div>
                                <p class="text-xs text-gray-500 uppercase tracking-wide">
                                    Staf Kependidikan
                                </p>
                            </div>

                            <div class="mt-4 flex items-center text-xs text-yellow-600 font-semibold opacity-0 group-hover:opacity-100 transition-opacity transform translate-y-2 group-hover:translate-y-0 duration-300">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                Lihat Profil
                            </div>
                        </div>

                        <?php endforeach; ?>
                    </div>
                </div>

            <?php endforeach; ?>

        <?php endif; ?>
        
    </div>
    
    
</div>

<div id="staffModal" class="relative z-9999 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
  
  <div class="fixed inset-0 bg-black/90 transition-opacity backdrop-blur-sm"></div>

  <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
    <div class="flex min-h-full items-start justify-center p-4 text-center sm:p-0 py-10" onclick="closeStaffModal()">
      
      <div class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-2xl" onclick="event.stopPropagation()">
        
        <div class="bg-gray-50 px-4 py-3 flex justify-between items-center border-b border-gray-100">
            <h3 class="text-sm font-bold text-[#002b54] uppercase tracking-wider">Detail Data</h3>
            <button type="button" class="rounded-md bg-white text-gray-400 hover:text-red-500 focus:outline-none ring-1 ring-gray-200 p-1" onclick="closeStaffModal()">
              <span class="sr-only">Close</span>
              <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
        </div>

        <div class="bg-white p-1 md:p-4 flex justify-center">
            <img id="modalImage" src="" alt="Staff Profile" 
                 class="w-auto h-auto max-h-[75vh] max-w-full object-contain rounded border border-gray-100 shadow-sm">
        </div>
        
        <div class="bg-gray-50 px-4 py-3 sm:px-6 border-t border-gray-100 text-center">
             <p id="modalName" class="text-base font-bold text-[#002b54]"></p>
             <p id="modalDept" class="text-xs text-gray-500"></p>
        </div>

      </div>
    </div>
  </div>
</div>

<script>
// Logic Filter
function filterStaff(targetId, btnElement) {
    const allButtons = document.querySelectorAll('.filter-btn');
    allButtons.forEach(btn => {
        btn.classList.remove('bg-[#002b54]', 'text-white', 'border-[#002b54]', 'ring-2', 'ring-offset-2', 'ring-[#002b54]/30');
        btn.classList.add('bg-white', 'text-gray-500', 'border-gray-200');
    });

    if (btnElement) {
        btnElement.classList.remove('bg-white', 'text-gray-500', 'border-gray-200');
        btnElement.classList.add('bg-[#002b54]', 'text-white', 'border-[#002b54]', 'ring-2', 'ring-offset-2', 'ring-[#002b54]/30');
    }

    const sections = document.querySelectorAll('.department-section');
    sections.forEach(sec => {
        if (targetId === 'all') {
            sec.style.display = 'block';
            setTimeout(() => sec.style.opacity = '1', 50);
        } else {
            if (sec.id === targetId) {
                sec.style.display = 'block';
                setTimeout(() => sec.style.opacity = '1', 50);
            } else {
                sec.style.opacity = '0';
                setTimeout(() => sec.style.display = 'none', 300); 
            }
        }
    });
}

// Logic Popup
function openStaffModal(imageSrc, name, dept) {
    const modal = document.getElementById('staffModal');
    const modalImg = document.getElementById('modalImage');
    const modalName = document.getElementById('modalName');
    const modalDept = document.getElementById('modalDept');

    modalImg.src = imageSrc;
    // Error handling
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

const style = document.createElement('style');
style.textContent = `
    .department-section { transition: opacity 0.3s ease-in-out; }
    @keyframes zoomIn {
        from { transform: scale(0.95); opacity: 0; }
        to { transform: scale(1); opacity: 1; }
    }
    .animate-zoom-in { animation: zoomIn 0.3s ease-out forwards; }
`;
document.head.appendChild(style);
</script>