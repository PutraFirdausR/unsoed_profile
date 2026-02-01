const counters = document.querySelectorAll('.counter');
    const statsSection = document.getElementById('stats-section');

    // Cek apakah section statistik ada?
    if (statsSection && counters.length > 0) {
        console.log('Statistik ditemukan, menyiapkan observer...');

        const speed = 200; // Kecepatan animasi

        // Fungsi Animasi
        const runAnimation = () => {
            console.log('Mulai animasi angka...'); // Cek console kalau ini muncul
            counters.forEach(counter => {
                const updateCount = () => {
                    const target = +counter.getAttribute('data-target');
                    const count = +counter.innerText;
                    const inc = target / speed;

                    if (count < target) {
                        counter.innerText = Math.ceil(count + inc);
                        setTimeout(updateCount, 20);
                    } else {
                        counter.innerText = target;
                    }
                };
                updateCount();
            });
        };

        // OBSERVER: "Mata-mata" Scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                // Jika elemen masuk ke layar (Is Intersecting)
                if (entry.isIntersecting) {
                    runAnimation(); // Jalankan animasi
                    observer.unobserve(entry.target); // Stop memantau (biar gak ulang2)
                }
            });
        }, { 
            threshold: 0.1 // CUKUP 10% KELIHATAN LANGSUNG JALAN
        });

        // Mulai pantau section statistik
        observer.observe(statsSection);
    } else {
        console.log('Section statistik tidak ditemukan di halaman ini.');
    }
