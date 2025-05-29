const targetDate = new Date("December 31, 2025 00:00:00").getTime();

  function updateCountdown() {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance < 0) {
      document.getElementById("countdown").innerText = "С Новым 2026 Годом!";
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

    document.addEventListener('DOMContentLoaded', function() {
            const toggleBtn = document.getElementById('feedbackToggleBtn');
            const formContainer = document.getElementById('feedbackFormContainer');
            const closeBtn = document.getElementById('closeFeedbackForm');
            const formHeader = document.getElementById('feedbackFormHeader');
            
            // Открытие/закрытие формы по кнопке
            toggleBtn.addEventListener('click', function() {
                formContainer.classList.toggle('visible');
            });
            
            // Закрытие формы по кнопке ×
            closeBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                formContainer.classList.remove('visible');
            });
            
            // Закрытие формы при клике на заголовок (дополнительная область закрытия)
            formHeader.addEventListener('click', function() {
                formContainer.classList.remove('visible');
            });
            
            // Валидация формы (пример для поля имени)
            const nameInput = document.getElementById('name');
            const nameHint = document.getElementById('name-hint');
            
            nameInput.addEventListener('input', function() {
                const value = this.value;
                if (!/^[a-zA-Zа-яА-ЯёЁ\s]+$/.test(value)) {
                    nameHint.textContent = 'Только буквы разрешены';
                    this.style.borderColor = 'red';
                } else if (value.length > 12) {
                    nameHint.textContent = 'Максимум 12 символов';
                    this.style.borderColor = 'red';
                } else {
                    nameHint.textContent = '';
                    this.style.borderColor = '#ddd';
                }
            });
        });

});