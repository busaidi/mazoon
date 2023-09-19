document.addEventListener("DOMContentLoaded", function() {
    const options = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains('anim-fadeFromLeft')) {
                    entry.target.style.animation = 'anim-fadeInFromLeft 1s forwards';
                } else if (entry.target.classList.contains('anim-fadeFromRight')) {
                    entry.target.style.animation = 'anim-fadeInFromRight 1s forwards';
                } else if (entry.target.classList.contains('anim-fadeFromTop')) {
                    entry.target.style.animation = 'anim-fadeInFromTop 1s forwards';
                } else if (entry.target.classList.contains('anim-fadeIn')) {
                    entry.target.style.animation = 'anim-fadeInEffect 1s forwards';
                } else if (entry.target.classList.contains('anim-zoomIn')) {
                    entry.target.style.animation = 'anim-zoomInEffect 1s forwards';
                } else if (entry.target.classList.contains('anim-rotateIn')) {
                    entry.target.style.animation = 'anim-rotateInEffect 1s forwards';
                } else if (entry.target.classList.contains('anim-slideFromBottom')) {
                    entry.target.style.animation = 'anim-slideFromBottomEffect 1s forwards';
                } else if (entry.target.classList.contains('anim-bounceIn')) {
                    entry.target.style.animation = 'anim-bounceInEffect 1s forwards';
                } else if (entry.target.classList.contains('anim-flipIn')) {
                    entry.target.style.animation = 'anim-flipInEffect 1s forwards';
                } else if (entry.target.classList.contains('anim-pulse')) {
                    entry.target.style.animation = 'anim-pulseEffect 1s forwards';
                }
                observer.unobserve(entry.target);
            }
        });
    }, options);

    const animatedElements = '.anim-fadeFromLeft, .anim-fadeFromRight, .anim-fadeFromTop, .anim-fadeIn, .anim-zoomIn, .anim-rotateIn, .anim-slideFromBottom, .anim-bounceIn, .anim-flipIn, .anim-pulse';
    document.querySelectorAll(animatedElements).forEach(element => {
        observer.observe(element);
    });
});
