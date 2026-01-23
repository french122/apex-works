// Parallax Foreground Effect
// Only PNG (remove bg) moves, background and text are static

document.addEventListener('DOMContentLoaded', function() {
    const fg = document.querySelector('.parallax-foreground');
    if (!fg) return;

    // Parallax config
    const speed = 0.35; // lower = slower parallax
    let ticking = false;

    function onScroll() {
        if (!ticking) {
            window.requestAnimationFrame(() => {
                const section = fg.closest('.parallax-section');
                if (!section) return;
                const rect = section.getBoundingClientRect();
                const windowHeight = window.innerHeight;
                // Only animate if in viewport
                if (rect.bottom > 0 && rect.top < windowHeight) {
                    // How far section is in viewport (0 = top, 1 = bottom)
                    const progress = (windowHeight - rect.top) / (windowHeight + rect.height);
                    // Parallax translateY
                    const translateY = (rect.top * speed);
                    fg.style.transform = `translateY(${translateY}px)`;
                }
                ticking = false;
            });
            ticking = true;
        }
    }

    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll);
    onScroll(); // initial
});