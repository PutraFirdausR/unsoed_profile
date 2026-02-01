document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".js-stat-counter");

    const observerOptions = {
        threshold: 0.5 
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const counter = entry.target;
                const target = parseInt(counter.getAttribute("data-target"));
                
                animateValue(counter, 0, target, 2000);
                
                observer.unobserve(counter); 
            }
        });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));

   
    function animateValue(obj, start, end, duration) {
        let startTimestamp = null;
        const step = (timestamp) => {
            if (!startTimestamp) startTimestamp = timestamp;
            const progress = Math.min((timestamp - startTimestamp) / duration, 1);
            
           
            obj.innerHTML = Math.floor(progress * (end - start) + start);
            
            if (progress < 1) {
                window.requestAnimationFrame(step);
            } else {
                obj.innerHTML = end; 
            }
        };
        window.requestAnimationFrame(step);
    }
});