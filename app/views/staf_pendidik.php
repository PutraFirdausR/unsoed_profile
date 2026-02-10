<?php
// FILE: app/views/staf_pendidik.php
require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../helpers.php';

// Konfigurasi Path Project
$base_url = '/unsoed_profile'; 

// Ambil data dosen
try {
    // Select semua kolom termasuk image_staf
    $stmt = $pdo->query("SELECT * FROM lecturers ORDER BY department ASC, name ASC");
    $all_lecturers = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // 1. Kelompokkan data
    $grouped_lecturers = [];
    foreach ($all_lecturers as $dosen) {
        $grouped_lecturers[$dosen['department']][] = $dosen;
    }

    // 2. LOGIKA CUSTOM SORT: Pindahkan 'Dosen Baru CPNS 2025' ke paling bawah
    $special_key = 'Dosen Baru CPNS 2025';
    if (array_key_exists($special_key, $grouped_lecturers)) {
        $temp_data = $grouped_lecturers[$special_key];
        unset($grouped_lecturers[$special_key]);
        $grouped_lecturers[$special_key] = $temp_data;
    }

    $departments = array_keys($grouped_lecturers);

} catch (PDOException $e) {
    $grouped_lecturers = [];
    $departments = [];
}

$page_title = 'Staf Pendidik';
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
                               bg-white text-gray-500 border-gray-200 hover:border-[#002b54] "
                        data-target="<?= md5($dept) ?>">
                    <?= htmlspecialchars($dept) ?>
                </button>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 md:px-8 py-12 min-h-150">
        
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
                        <?php foreach($lecturers as $dosen): 
                            // --- LOGIKA PATH GAMBAR ---
                            
                            // 1. Thumbnail (KARTU) -> Folder 'profil_dosen' (Dari kolom image)
                            $thumbnail_file = $dosen['image'];
                            $thumbnail_path = $base_url . "/public/assets/img/profil_dosen/" . $thumbnail_file;

                            // 2. Popup (MODAL) -> Folder 'profil_staf' (Dari kolom image_staf)
                            // Jika image_staf kosong, fallback pakai image
                            $popup_file = !empty($dosen['image_staf']) ? $dosen['image_staf'] : $dosen['image'];
                            $popup_path = $base_url . "/public/assets/img/profil_staf/" . $popup_file;
                        ?>
                        
                        <div class="group bg-white rounded-xl border border-gray-200 hover:border-[#002b54] transition-all duration-300 flex flex-col overflow-hidden hover:shadow-xl hover:shadow-blue-900/10 h-full">
                            
                            <div class="aspect-4/5 w-full overflow-hidden bg-slate-100 relative cursor-zoom-in"
                                 onclick="openProfileModal('<?= $popup_path ?>', '<?= $thumbnail_path ?>', '<?= htmlspecialchars($dosen['name']) ?>')">
                                
                                <img src="<?= $thumbnail_path ?>" 
                                     onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($dosen['name']) ?>&background=002b54&color=fff&size=400'"
                                     alt="<?= htmlspecialchars($dosen['name']) ?>" 
                                     class="w-full h-full object-cover object-top group-hover:scale-105 transition-transform duration-700">
                                
                                <div class="absolute bottom-0 left-0 right-0 h-1.5 bg-yellow-500 transform translate-y-full group-hover:translate-y-0 transition-transform duration-300"></div>
                            </div>

                            <div class="p-6 flex flex-col grow text-center">
                                <h3 class="text-base font-bold text-[#002b54] mb-2 leading-snug group-hover:text-yellow-600 transition-colors">
                                    <?= htmlspecialchars($dosen['name']) ?>
                                </h3>
                                
                                <div class="mt-auto pt-2">
                                    <span class="inline-block text-[10px] text-gray-400 font-bold uppercase tracking-wider bg-gray-50 px-2 py-1 rounded border border-gray-100">
                                        <?= htmlspecialchars($dosen['department']) ?>
                                    </span>
                                </div>
                            </div>
                        </div>

                        <?php endforeach; ?>
                    </div>
                </div>

            <?php endforeach; ?>

        <?php endif; ?>
        
    </div>
    
  
</div>

<div id="profileModal" class="fixed inset-0 z-9999idden bg-black/90 backdrop-blur-sm flex items-center justify-center p-4 transition-opacity duration-300 opacity-0" onclick="closeProfileModal()">
    <div class="relative w-full max-w-lg md:max-w-2xl flex flex-col items-center animate-zoom-in" onclick="event.stopPropagation()">
        
        <button onclick="closeProfileModal()" class="absolute -top-12 right-0 md:-right-12 text-white/70 hover:text-yellow-400 transition-colors p-2">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>

        <div class="bg-white p-2 rounded-lg shadow-2xl w-full">
            <img id="modalImage" src="" alt="Profile View" class="w-full h-auto max-h-[75vh] object-contain rounded bg-slate-100">
        </div>

        <h3 id="modalName" class="text-white text-xl md:text-2xl font-bold mt-4 text-center tracking-wide"></h3>
    </div>
</div>

<script>
function filterLecturers(targetId, btnElement) {
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

// LOGIKA POPUP IMAGE
function openProfileModal(primarySrc, backupSrc, name) {
    const modal = document.getElementById('profileModal');
    const modalImg = document.getElementById('modalImage');
    const modalName = document.getElementById('modalName');

    // 1. Coba load dari folder profil_staf (primarySrc)
    modalImg.src = primarySrc;
    
    // 2. Jika gagal, load dari folder profil_dosen (backupSrc)
    modalImg.onerror = function() {
        if (this.src !== backupSrc) {
            console.log('Gambar staf tidak ditemukan, mencoba gambar dosen...');
            this.src = backupSrc;
        } else {
            // 3. Jika masih gagal, pakai Avatar
            this.src = 'https://ui-avatars.com/api/?name=' + encodeURIComponent(name) + '&background=002b54&color=fff&size=500';
        }
    };

    modalName.textContent = name;

    modal.classList.remove('hidden');
    void modal.offsetWidth;
    modal.classList.remove('opacity-0');
    document.body.style.overflow = 'hidden';
}

function closeProfileModal() {
    const modal = document.getElementById('profileModal');
    modal.classList.add('opacity-0');
    setTimeout(() => {
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }, 300);
}

document.addEventListener('keydown', function(event) {
    if (event.key === "Escape") {
        closeProfileModal();
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