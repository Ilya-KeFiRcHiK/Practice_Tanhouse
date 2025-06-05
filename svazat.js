document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('feedback-form');
            const closeBtn = document.getElementById('closeFeedbackForm');
            const formContainer = document.getElementById('feedbackFormContainer');

            // Закрытие формы
            closeBtn.addEventListener('click', function() {
                formContainer.style.display = 'none';
            });

            // Валидация формы
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                let isValid = true;

                // Валидация заголовка
                const title = document.getElementById('title');
                if (title.value.trim() === '') {
                    showError(title, 'Заголовок обязателен');
                    isValid = false;
                } else {
                    showSuccess(title);
                }

                // Валидация имени
                const name = document.getElementById('name');
                const nameRegex = /^[a-zA-Zа-яА-ЯёЁ\s]{1,12}$/;
                if (!nameRegex.test(name.value.trim())) {
                    showError(name, 'Только буквы, 1-12 символов');
                    isValid = false;
                } else {
                    showSuccess(name);
                }

                // Валидация email
                const email = document.getElementById('email');
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(email.value.trim())) {
                    showError(email, 'Введите корректный email');
                    isValid = false;
                } else {
                    showSuccess(email);
                }

                // Валидация сообщения
                const message = document.getElementById('message');
                if (message.value.trim() === '') {
                    showError(message, 'Сообщение обязательно');
                    isValid = false;
                } else if (message.value.split(/\s+/).length > 255) {
                    showError(message, 'Максимум 255 слов');
                    isValid = false;
                } else {
                    showSuccess(message);
                }

                if (isValid) {
                    // Отправка формы (здесь можно добавить AJAX)
                    form.submit();
                }
            });

            function showError(input, message) {
                const hint = input.nextElementSibling;
                input.classList.add('error');
                input.classList.remove('valid');
                hint.textContent = message;
                hint.style.color = '#ff6b6b';
            }

            function showSuccess(input) {
                const hint = input.nextElementSibling;
                input.classList.add('valid');
                input.classList.remove('error');
                hint.textContent = '';
            }

            // Валидация при вводе
            document.getElementById('name').addEventListener('input', function() {
                const nameRegex = /^[a-zA-Zа-яА-ЯёЁ\s]{0,12}$/;
                if (!nameRegex.test(this.value)) {
                    this.value = this.value.substring(0, this.value.length - 1);
                }
            });

            // Ограничение слов в сообщении
            document.getElementById('message').addEventListener('input', function() {
                const words = this.value.split(/\s+/).filter(word => word.length > 0);
                const hint = this.nextElementSibling;
                
                if (words.length > 255) {
                    hint.textContent = `Превышено максимальное количество слов (${words.length}/255)`;
                    hint.style.color = '#ff6b6b';
                } else {
                    hint.textContent = `Слов: ${words.length}/255`;
                    hint.style.color = '#888';
                }
            });
        });