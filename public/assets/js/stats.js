// FILE: public/assets/js/stats.js

document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".js-stat-counter");
    
    // Opsi untuk IntersectionObserver (Mulai animasi saat elemen terlihat 50%)
    const observerOptions = {
        threshold: 0.5 
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = +counter.getAttribute("data-target"); // Ambil angka target
                const duration = 2000; // Durasi animasi dalam ms (2 detik)
                const increment = target / (duration / 16); // Hitung step per frame (60fps)

                let current = 0;

                const updateCounter = () => {
                    current += increment;
                    if (current < target) {
                        counter.innerText = Math.ceil(current);
                        requestAnimationFrame(updateCounter);
                    } else {
                        counter.innerText = target; // Pastikan angka akhir tepat
                    }
                };

                updateCounter();
                observer.unobserve(counter); // Stop observe setelah animasi jalan
            }
        });
    }, observerOptions);

    counters.forEach(counter => {
        observer.observe(counter);
    });
});