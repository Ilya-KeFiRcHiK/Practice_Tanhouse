document.addEventListener('DOMContentLoaded', function() {
    const scrollButton = document.getElementById('scrollUp');
    let isScrolling = false;
    let scrollAnimation;
    const scrollSpeed = 15;

    function smoothScroll() {
        if (!isScrolling) return;

        const currentScroll = window.pageYOffset;

        if (currentScroll > 0) {
            window.scrollBy(0, -scrollSpeed);
            scrollAnimation = requestAnimationFrame(smoothScroll);
        } else {
            stopScrolling();
        }
    }

    function stopScrolling() {
        isScrolling = false;
        cancelAnimationFrame(scrollAnimation);
    }

    scrollButton.addEventListener('click', function() {
        if (!isScrolling) {
            isScrolling = true;
            smoothScroll();
        }
    });

    document.addEventListener('click', function(event) {
        if (event.target !== scrollButton && !scrollButton.contains(event.target)) {
            stopScrolling();
        }
    });

    document.addEventListener('wheel', function() {
        stopScrolling();
    });
});
