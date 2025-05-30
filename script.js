const targetDate = new Date("august 31, 2025 00:00:00").getTime();

  function updateCountdown() {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
      document.getElementById("countdown").innerText = "Акция закончилась";
      return;
    }

    const days = Math.floor(distance / (1000 * 60 * 60 * 24));
    const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((distance % (1000 * 60)) / 1000);

    document.getElementById("countdown").innerText =
      `${days} дн. ${hours} ч. ${minutes} мин. ${seconds} сек.`;
  }

  updateCountdown();
  setInterval(updateCountdown, 1000);

document.addEventListener('DOMContentLoaded', function() {
    const scrollButton = document.getElementById('scrollDown');
    let isScrolling = false;
    let scrollAnimation;
    const scrollSpeed = 15;

    function smoothScroll() {
        if (!isScrolling) return;

        const currentScroll = window.pageYOffset;

        const maxScroll = document.documentElement.scrollHeight - window.innerHeight;

        if (currentScroll < maxScroll) {

            window.scrollBy(0, scrollSpeed);
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

    
});

