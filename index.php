<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ТаунхаусПремиум</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="img/transparter.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>

    <button class="scroll-button-up" id="scrollUp" style="background: transparent;">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#00B0FF" class="bi bi-chevron-up" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
    </svg>
</button>
    <header class="header">
    <div class="header-top container">
        <div class="header-logo">
    <a onclick="window.location.href='company.html'" class="header-link"><img class="logo-img" href="company.html" src="img/81485418.svg" alt="Логотип ТаунхаусПремиум"></a>
</div>
        
        <div class="header-info">
            <div class="header-address">
                <a href="#address-map"><img class="map-icon" src="img/geo-alt-fill (1) 1.png" alt="Иконка карты"></a>
                <p class="address-center">Адрес</p>
                <p class="address">ул. Шиллера, 25А</p>
            </div>
            <div class="header-phone">
                <img class="phone-icon" src="img/telephone-fill 1.png" alt="Иконка телефона">
                <p class="address-center">Телефон</p>
                <p class="address">+7 (963) 293-73-33</p>
            </div>
            <div class="header-clock">
                <img class="clock-icon" src="img/clock-with-white-face_icon-icons.com_72804 (3).png" alt="Иконка часов">
                <p class="address-center">Режим работы</p>
                <p class="address">пн-пт с 9:00 до 19:00</p>
            </div> 
        </div>

        <button class="feedback-toggle-btn" id="feedbackToggleBtn">
        Заказать звонок <span class="icon"></span>
    </button> 
    </div>  
       
    
    <div class="feedback-form-container" id="feedbackFormContainer">
    <div class="feedback-form-header" id="feedbackFormHeader">
        Оставьте свои данные и наш менеджер свяжется с вами
    </div>
    
    <form action="bell.php" method="POST" id="feedback-form" class="feedback-form" autocomplete="off" novalidate>
        <label>
            Имя:
            <input type="text" class="name" name="name" id="name" 
                   placeholder="Только буквы, от 1 до 12 символов" 
                   pattern="[A-Za-zА-Яа-яЁё\s]{1,12}" 
                   title="Только буквы (рус/англ), от 1 до 12 символов"
                   required>
            <div class="hint" id="name-hint"></div>
        </label>

        <label>
            Телефон:
            <input type="tel" class="telefon-name" name="phone" id="phone" 
                   placeholder="+7 (___) ___-__-__" 
                   pattern="\+7\s?[\(]{0,1}\d{3}[\)]{0,1}\s?\d{3}[-]{0,1}\d{2}[-]{0,1}\d{2}" 
                   title="Формат: +7 (XXX) XXX-XX-XX"
                   required>
            <div class="hint" id="phone-hint"></div>
        </label>
    
        <button id="submit-btn" type="submit">Отправить</button>
    </form>
</div>

</header>

        <div class="header-bottom container">
           <a class="header-link" href="">Главная</a>
           <nav class="dropdown-nav">
                <button id="menu-toggle">Меню</button>
                <ul class="menu-list" id="menu-list">
                    <li class="menu-color"><a href="#about">О компании</a></li>
                    <li class="menu-color"><a href="#reviews">Наши преимущества</a></li>
                    <li class="menu-color"><a href="#catalog">Каталог</a></li>
                    <li class="menu-color"><a href="#views">Отзывы клиентов</a></li>
                </ul>
            </nav>
           <a onclick="window.location.href='contacts.html'" class="header-link">Контакты</a>
        </div>

<div class="img-home parallax" style="background-image: url('img/e3f3dc517ec08cf38a70b364f6e29d3abf9f2ff4.jpg');"></div>
        <div class="sale-container">
    <div class="sale-tanhouse">
        <h3 class="sale-tanhouse-p">Продажа таунхаусов</h3>
        <div class="sale-content">
            <p class="sale-p">Мы исполним все ваши мечты!</p>
            <p class="sale-p">Успейте купить по выгодной цене!</p>
            <p class="sale-p">Скидки до <span class="discount">15%</span></p>
            <p class="timer-text">До конца акции осталось:</p>
            <div class="timer" id="countdown">
                    Загрузка...
            </div>
            <button onclick="window.location.href='sales.html'" class="zvonok-podrobnie">Подробнее</button>
            <script src="script.js"></script>
        </div>
    </div>
</div>

    </header>

    <section class="Company parallax" style="background-image: url(img/4da73e45234489.582a187b547f0.jpg);">
        <div class="company-text">
            <h3 id="about" class="comp">О компании</h3>
            <p class="company-text-p">Компания ООО "ТаунхаусПремиум" предлагает комплексное сопровождение при поиске и приобретении недвижимости в Калининграде и Калининградской области. <br>
Таунхаусы - выбор для вашего комфорта.</p>
<button onclick="window.location.href='company.html'" class="header-podrobnie-company-c">Подробнее</button>
        </div>
    </section>

    <section class="preimyczestva container">
    <h2 id="reviews">Наши преимущества</h2>
    <div class="preimyczestva-blocks">
        <div class="block-1">
            <i class="bi bi-calendar-check fs-1"></i>
            <p class="rasrochka">РАССРОЧКА ОТ ЗАСТРОЙЩИКА</p> <br>
            <P class="rasrochka-p">Подберём для вас индивидуальные условия</P>
        </div>
        <div class="block-2">
            <i class="bi bi-cash-coin fs-1"></i>
            <p class="rasrochka">100% ОПЛАТА</p> <br>
            <P class="rasrochka-b">Оплата наличными или перевод на расчётный счёт, указанный в договоре</P>
        </div>
        <div class="block-3">
            <i class="bi bi-house-check fs-1"></i>
            <p class="rasrochka">ИПОТЕКА</p> <br>
            <P class="rasrochka-c">Льготная военная ипотека для сотрудников работающих по контракту</P>
        </div>
        <div class="block-4">
            <i class="bi bi-people fs-1"></i>
            <p class="rasrochka">МАТЕРИНСКИЙ КАПИТАЛ</p> <br>
            <P class="rasrochka-p">Материнский капитал <br> подходит для <br> приобретения наших <br> домов​</P>
        </div>
    </div>
</section>

    <section class="election container">
    <h2 class="election-tanhouse">Почему стоит выбрать нас?</h2>
    <div class="election-blocks">
        <div class="feature-card">
            <div class="icon-circle">
                <i class="bi bi-check-circle"></i>
            </div>
            <p><b style="color: #095a94;">10</b> <br> лет <br> на рынке <br>недвижимости</p>
        </div>
        <div class="feature-card">
            <div class="icon-circle">
                <i class="bi bi-check-circle"></i>
            </div>
            <p><b style="color: #095a94;">45</b> <br> семей <br> успешно приобрели <br>наши таунхаусы</p>
        </div>
        <div class="feature-card">
            <div class="icon-circle">
                <i class="bi bi-check-circle"></i>
            </div>
            <p><b style="color: hsl(205, 89%, 31%);;">100%</b> <br> довольных <br> клиентов <br>своим новым <br>домом</p>
        </div>
    </div>
</section>

    <section class="catalog">
    <h2 id="catalog" class="catalog-title">Каталог</h2>
    
    <div class="property-grid">
    <article class="property-card">
      <div class="property-image-container">
        <img src="img/16e23c2aed0d43fd8d1ae456e01abe4e.webp" 
             alt="Таунхаус в Калининграде" 
             class="property-image"
             width="300"
             height="225"
             loading="lazy">
      </div>
      <div class="property-details">
        <h3 class="property-title">Таунхаус Элит</h3>
        <div class="property-info">
          <div class="property-address">
            <a href="https://yandex.ru/maps/?text=город%20Калининград%2C%20ул.%20Пулемётная%2C%2014" 
   target="_blank" 
   class="btn btn-link text-decoration-none">
  <i class="bi bi-geo-alt-fill"></i></a>
            <span>ул. Пулемётная, 14</span>
          </div>
          <div class="property-area">
            <span>120 м²</span>
          </div>
        </div>
        <p class="property-price">12 985 000 ₽</p>
        <button onclick="window.location.href='tanhouse1.php'" class="property-button">Подробнее</button>
      </div>
    </article>
    
    <article class="property-card">
      <div class="property-image-container">
        <img src="img/4ba17f88f1ee4b4b891837a8fb45b6cf.webp" 
             alt="Таунхаус в Калининграде" 
             class="property-image"
             width="300"
             height="225"
             loading="lazy">
      </div>
      <div class="property-details">
        <h3 class="property-title">Таунхаус Комфорт</h3>
        <div class="property-info">
          <div class="property-address">
            <a href="https://yandex.ru/maps/22/kaliningrad/house/poselkovaya_ulitsa_34g/ZkkYcg5hTkQFQFtufXt0dntkbQ==/?ll=20.491177%2C54.757506&z=20" 
   target="_blank" 
   class="btn btn-link text-decoration-none">
  <i class="bi bi-geo-alt-fill"></i></a>
            <span>ул. Поселковая, 34Г</span>
          </div>
          <div class="property-area">
            <span>135 м²</span>
          </div>
        </div>
        <p class="property-price">12 500 000 ₽</p>
        <button onclick="window.location.href='tanhouse2.php'" class="property-button">Подробнее</button>
      </div>
    </article>
    
    <article class="property-card">
      <div class="property-image-container">
        <img src="img/b2bbe4e.webp" 
             alt="Премиальный таунхаус в Калининграде" 
             class="property-image"
             width="300"
             height="225"
             loading="lazy">
      </div>
      <div class="property-details">
        <h3 class="property-title">Таунхаус Акцент</h3>
        <div class="property-info">
          <div class="property-address">
            <a href="https://yandex.ru/maps/22/kaliningrad/house/buketnaya_ulitsa_32/ZkkYcwJlSEYDQFtufXtyeX1qZw==/?ll=20.555133%2C54.738193&z=17" 
   target="_blank" 
   class="btn btn-link text-decoration-none">
  <i class="bi bi-geo-alt-fill"></i></a>
            <span>ул. Букетная, 32</span>
          </div>
          <div class="property-area">
            <span>137 м²</span>
          </div>
        </div>
        <p class="property-price">22 000 000 ₽</p>
        <button onclick="window.location.href='tanhouse3.php'" class="property-button">Подробнее</button>
      </div>
    </article>

    <article class="property-card">
      <div class="property-image-container">
        <img src="img/dbad321.webp" 
             alt="Премиальный таунхаус в Калининграде" 
             class="property-image"
             width="300"
             height="225"
             loading="lazy">
      </div>
      <div class="property-details">
        <h3 class="property-title">Таунхаус Чистый</h3>
        <div class="property-info">
          <div class="property-address">
            <a href="https://yandex.ru/maps/22/kaliningrad/house/polevoy_pereulok_6/ZkkYcwNpSkUEQFtufXtzdHVkYw==/?ll=20.549354%2C54.725976&z=18" 
   target="_blank" 
   class="btn btn-link text-decoration-none">
  <i class="bi bi-geo-alt-fill"></i> </a>
            <span>ул. Полевой переулок, 6</span>
          </div>
          <div class="property-area">
            <span>120 м²</span>
          </div>
        </div>
        <p class="property-price">21 000 000 ₽</p>
        <button onclick="window.location.href='tanhouse4.php'" class="property-button">Подробнее</button>
      </div>
    </article>
</div>
    
    
<div class="catalog-actions" style="display: flex; flex-direction: column; gap: 16px;">
    <button onclick="window.location.href='catalog.html'" class="catalog-show-all">Посмотреть всё</button>
    
    <div class="catalog-cta" style="display: flex; flex-direction: column; gap: 8px;">
        <h2 class="cta-title" style="margin: 0;">Хотите купить дом у нас?</h2>
        <p class="zayavka-text">Подбираем идеальное жильё от бюджетных вариантов
до премиум-класса. <br>
Наши квалифицированные специалисты всегда в <br> курсе актуального наличия и стоимости.</p>
<button class="catalog-show-all" id="zayavka-show-all">Оставить заявку</button>
    </div>
</div>

<section id="feedback" class="feedback-section">
            <form action="feedback.php" method="POST" id="feedback-form" class="feedback-form" autocomplete="off">
                <label>
                Заголовок:
                <input type="text" id="title" name="heading" placeholder="Введите заголовок" required>
                <div class="hint" id="title-hint"></div>
            </label>
            <label>
                Имя:
                <input type="text" class="name" name="name" id="name" placeholder="Только буквы, от 1 до 12 символов" required>
                <div class="hint" id="name-hint"></div>
            </label>
        
            <label>
                Email:
                <input type="text" id="email" name="email" placeholder="example@mail.com" required>
                <div class="hint" id="email-hint"></div>
            </label>
        
            <label>
                Сообщение:
                <textarea id="message" name="message" placeholder="Макс. 255 слов, предлоги и союзы учитываются" required></textarea>
                <div class="hint" id="message-hint"></div>
            </label>
        
            <button id="submit-btn" type="submit">Отправить</button>
            </form>
          </section>

<h2 id="views">Отзывы клиентов</h2>
    <section class="reviews-section">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="review-card">
          <img src="img/6ed89b37c942b597b9887b19c73da8a8.jpg" alt="Алексей Смирнов" class="review-avatar">
          <div class="review-content-wrapper">
            <h3 class="review-author">Алексей Смирнов</h3>
            <div class="review-content">
              <p>5 лет назад решили переехать в комфортабельное жильё. Знакомые посоветовали обратиться в компанию ТаунхаусПремиум. В компании работают квалифицированные специалисты, которые быстро помогли подобрать нам подходящее по нашим требованиям таунхаус. Удивили и цены, гибкая система рассрочки. Всем советуем, не пожалеете!</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="review-card">
          <img src="img/2051fff4c0c5cd31ac0f1393ea87f637.jpg" alt="Сергей Анохин" class="review-avatar">
          <div class="review-content-wrapper">
            <h3 class="review-author">Сергей Анохин</h3>
            <div class="review-content">
              <p>Обратился в компанию за консультацией по ипотеке. Менеджер подробно объяснил все нюансы, помог собрать документы. В итоге одобрили максимальную сумму на выгодных условиях. Теперь выбираем дом мечты для нашей семьи!</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="review-card">
          <img src="img/avatar-3.png" alt="Ольга Петрова" class="review-avatar">
          <div class="review-content-wrapper">
            <h3 class="review-author">Ольга Петрова</h3>
            <div class="review-content">
              <p>Купили таунхаус через эту компанию год назад. Все этапы от выбора до заселения прошли гладко. Отдельное спасибо за помощь с ремонтом - порекомендовали проверенных подрядчиков. Живём с удовольствием, соседи замечательные!</p>
            </div>
          </div>
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="review-card">
          <img src="img/avatar-4.png" alt="Наталья Лаврова" class="review-avatar">
          <div class="review-content-wrapper">
            <h3 class="review-author">Наталья Лаврова</h3>
            <div class="review-content">
              <p>Работали с несколькими агентствами, но только здесь получили действительно профессиональный подход. Учитывали все наши пожелания, даже самые нестандартные. В итоге нашли идеальный вариант - просторный таунхаус с террасой и садом.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>
</section>

<section id="address-map" class="address">
    <script id="address" class="map" type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ada444df6a63e56e8427f115d85c3c42fd681fa56634f1e79d054e72ebf3aa537&amp;width=1905&amp;height=720&amp;lang=ru_RU&amp;scroll=true"></script>
</section>

<div class="footer-contacts">
    
        <div class="contact-icon">
            <img src="img/geo-alt-fill (1).svg" alt="Адрес" width="24" height="24">
        </div>
        <div class="contact-details">
            <h3 class="contact-title">Адрес</h3>
            <p class="contact-text">ул. Шиллера, 25А</p>
        </div>
        <div class="contact-icon">
            <img src="img/telephone-fill.svg" alt="Телефон" width="24" height="24">
        </div>
        <div class="contact-details">
            <h3 class="contact-title">Телефон</h3>
            <a href="tel:+79632937333" class="contact-text">+7 (963) 293-73-33</a>
        </div>
    

    
        <div class="contact-icon">
            <img src="img/clock-with-white-face_icon-icons.com_72804 (1).png" alt="Режим работы" width="24" height="24">
        </div>
        <div class="contact-details">
            <h3 class="contact-title">Режим работы</h3>
            <p class="contact-text">пн-пт с 9:00 до 19:00</p>
        </div>
    </div>


<footer class="main-footer">
    <div class="footer-container">
        <div class="footer-left">
            <p class="copyright">© 2025 Все права защищены</p>
        </div>
        <div class="footer-right">
            <p class="company-info">ООО "ТаунхаусПремиум"</p>
            <p class="legal-info">ИНН: 1234567890 | ОГРН: 1234567890123</p>
        </div>
    </div>
</footer>

<footer class="main-footer">
    <div class="footer-container container">

        <div class="footer-social">
            <a href="https://chat.whatsapp.com/FykP4lHlTL67JI23oEiik0" class="social-link" aria-label="WhatsApp">
                <img src="img/whatsapp.png" alt="WhatsApp">
            </a>
            <a href="https://t.me/+3aRsxDu8VURhNzhi" class="social-link" aria-label="Telegram">
                <img src="img/telegram 1.png" alt="Telegram">
            </a>
        </div>
    </div>
</footer>
</body>
<script src="ScrollUp.js"></script>
<script src="script.js"></script>
<script src="timer.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="svazat.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    document.querySelector("#menu-toggle").addEventListener("click", function(e){
    const menuList = document.querySelector(".menu-list");
    if (menuList.classList.contains('show')) {
        menuList.classList.remove("show");
    } else {
        menuList.classList.add("show");
    }
});



  
    document.addEventListener('DOMContentLoaded', () => {
    const formContainer = document.getElementById('feedbackFormContainer');
    if (!formContainer) return console.error('Form container not found!');

    document.getElementById('feedbackToggleBtn')?.addEventListener('click', () => 
        formContainer.classList.toggle('visible')
    );

    const formzayavka = document.getElementById('feedback');
    if (!formzayavka) return console.error('Form zayavka not found!');

    document.getElementById('zayavka-show-all')?.addEventListener('click', () => 
        formzayavka.classList.toggle('visible')
    );
    
    document.getElementById('closeFeedbackForm')?.addEventListener('click', (e) => {
        e.stopPropagation();
        formContainer.classList.remove('visible');
    });
    
    document.getElementById('feedbackFormHeader')?.addEventListener('click', (e) => 
        e.target === e.currentTarget && formContainer.classList.remove('visible')
    );
    
    const nameInput = document.getElementById('name');
    const nameHint = document.getElementById('name-hint');
    nameInput?.addEventListener('input', () => {
        const value = nameInput.value;
        const isValid = /^[a-zA-Zа-яА-ЯёЁ\s]+$/.test(value) && value.length <= 12;
        nameHint.textContent = isValid ? '' : 
            !/^[a-zA-Zа-яА-ЯёЁ\s]+$/.test(value) ? 'Только буквы разрешены' : 'Максимум 12 символов';
        nameInput.style.borderColor = isValid ? '#ddd' : 'red';
    });
});

const title = document.getElementById('title');
const nameInput = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');
const btn = document.getElementById('submit-btn');

const titleHint = document.getElementById('title-hint');
const nameHint = document.getElementById('name-hint');
const emailHint = document.getElementById('email-hint');
const messageHint = document.getElementById('message-hint');

const maxWords = 255;

[title, nameInput, email, message].forEach(input => {
input.addEventListener('paste', e => e.preventDefault());
input.addEventListener('contextmenu', e => e.preventDefault());
});

function validate() {
    let valid = true;
    if (title.value.trim().length === 0) {
        title.className = 'invalid';
        titleHint.textContent = 'Поле обязательно';
        titleHint.style.color = 'red';
        valid = false;
    } else {
        title.className = 'valid';
        titleHint.textContent = 'Ок';
        titleHint.style.color = 'green';
    }

    const nameValue = nameInput.value.trim();
    const nameRegex = /^[а-яА-ЯёЁa-zA-Z]{1,12}$/;

    if (!nameRegex.test(nameValue)) {
        nameInput.className = 'invalid';
        nameHint.textContent = `Недопустимые символы или длина. Осталось ${12 - nameValue.length} символов.`;
        nameHint.style.color = 'red';
        valid = false;
    } else {
        nameInput.className = 'valid';
        nameHint.textContent = 'Имя корректно';
        nameHint.style.color = 'green';
    }

    if (!email.value.includes('@')) {
        email.className = 'invalid';
        emailHint.textContent = 'Неверный email (отсутствует @)';
        emailHint.style.color = 'red';
        valid = false;
    } else {
        email.className = 'valid';
        emailHint.textContent = 'Email корректен';
        emailHint.style.color = 'green';
    }

    const wordCount = message.value.trim().split(/\s+/).filter(Boolean).length;
    if (wordCount === 0) {
        message.className = 'invalid';
        messageHint.textContent = 'Введите сообщение';
        messageHint.style.color = 'red';
        valid = false;
    } else if (wordCount > maxWords) {
        message.className = 'invalid';
        messageHint.textContent = `Слишком много слов: ${wordCount}/${maxWords}`;
        messageHint.style.color = 'red';
        valid = false;
    } else {
        message.className = 'valid';
        messageHint.textContent = `Слов: ${wordCount}/${maxWords}`;
        messageHint.style.color = 'green';
    }

    btn.disabled = !valid;
}

[title, nameInput, email, message].forEach(input => {
    input.addEventListener('input', validate);
});

[title, nameInput, email, message].forEach(input => {
    input.addEventListener('keydown', e => {
        if ((e.ctrlKey || e.metaKey) && e.key.toLowerCase() === 'v') {
            e.preventDefault();
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('callback-form');
    const nameInput = document.getElementById('name');
    const phoneInput = document.getElementById('phone');
    const submitBtn = document.getElementById('submit-btn');
    const messageEl = document.getElementById('form-message');
    
    // Валидация имени
    function validateName() {
        const value = nameInput.value.trim();
        const regex = /^[а-яА-ЯёЁa-zA-Z]{1,12}$/;
        
        if (!value) {
            return { valid: false, message: 'Поле обязательно' };
        }
        
        if (!regex.test(value)) {
            const remaining = 12 - value.length;
            return { 
                valid: false, 
                message: remaining > 0 
                    ? `Осталось ${remaining} символов` 
                    : 'Максимум 12 символов'
            };
        }
        
        return { valid: true, message: 'Корректно' };
    }
    
    // Валидация телефона
    function validatePhone() {
        const value = phoneInput.value.trim();
        const regex = /^\+7\s?[\(]?\d{3}[\)]?\s?\d{3}[-]?\d{2}[-]?\d{2}$/;
        
        if (!value) {
            return { valid: false, message: 'Поле обязательно' };
        }
        
        if (!regex.test(value)) {
            return { valid: false, message: 'Формат: +7 (XXX) XXX-XX-XX' };
        }
        
        return { valid: true, message: 'Корректно' };
    }
    
    // Общая валидация формы
    function validateForm() {
        const nameValid = validateName();
        const phoneValid = validatePhone();
        
        // Обновляем подсказки
        document.getElementById('name-hint').textContent = nameValid.message;
        document.getElementById('name-hint').style.color = nameValid.valid ? 'green' : 'red';
        
        document.getElementById('phone-hint').textContent = phoneValid.message;
        document.getElementById('phone-hint').style.color = phoneValid.valid ? 'green' : 'red';
        
        // Активируем/деактивируем кнопку
        submitBtn.disabled = !(nameValid.valid && phoneValid.valid);
        
        return nameValid.valid && phoneValid.valid;
    }
    
    // Маска для телефона
    phoneInput.addEventListener('input', function(e) {
        let value = this.value.replace(/\D/g, '');
        if (value.length > 0) {
            value = '+7' + value.substring(1);
        }
        this.value = value;
        validateForm();
    });
    
    // Валидация при вводе
    nameInput.addEventListener('input', validateForm);
    phoneInput.addEventListener('input', validateForm);
    
    // Обработка отправки формы
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (!validateForm()) return;
        
        // Показываем загрузку
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Отправка...';
        submitBtn.disabled = true;
        
        // Собираем данные
        const formData = {
            name: nameInput.value.trim(),
            phone: phoneInput.value.trim()
        };
        
        // Отправляем на сервер (замените URL на ваш)
        fetch('callback.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showMessage('success', 'Спасибо! Мы скоро вам перезвоним.');
                form.reset();
            } else {
                showMessage('error', data.message || 'Ошибка отправки');
            }
        })
        .catch(error => {
            showMessage('error', 'Ошибка соединения');
            console.error('Error:', error);
        })
        .finally(() => {
            submitBtn.textContent = originalText;
            validateForm();
        });
    });
    
    function showMessage(type, text) {
        messageEl.textContent = text;
        messageEl.className = `form-message ${type}`;
        messageEl.style.display = 'block';
        
        // Скрываем сообщение через 5 секунд
        setTimeout(() => {
            messageEl.style.display = 'none';
        }, 5000);
    }
    
    // Первичная валидация
    validateForm();
});

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('callback-form');
    const nameInput = document.getElementById('name');
    const phoneInput = document.getElementById('phone');
    const submitBtn = document.getElementById('submit-btn');
    const messageEl = document.getElementById('form-message');
    
    // Валидация имени
    function validateName() {
        const value = nameInput.value.trim();
        const regex = /^[а-яА-ЯёЁa-zA-Z]{1,12}$/;
        
        if (!value) {
            return { valid: false, message: 'Поле обязательно' };
        }
        
        if (!regex.test(value)) {
            const remaining = 12 - value.length;
            return { 
                valid: false, 
                message: remaining > 0 
                    ? `Осталось ${remaining} символов` 
                    : 'Максимум 12 символов'
            };
        }
        
        return { valid: true, message: 'Корректно' };
    }
    
    // Валидация телефона
    function validatePhone() {
        const value = phoneInput.value.trim();
        const regex = /^\+7\s?[\(]?\d{3}[\)]?\s?\d{3}[-]?\d{2}[-]?\d{2}$/;
        
        if (!value) {
            return { valid: false, message: 'Поле обязательно' };
        }
        
        if (!regex.test(value)) {
            return { valid: false, message: 'Формат: +7 (XXX) XXX-XX-XX' };
        }
        
        return { valid: true, message: 'Корректно' };
    }
    
    // Общая валидация формы
    function validateForm() {
        const nameValid = validateName();
        const phoneValid = validatePhone();
        
        // Обновляем подсказки
        document.getElementById('name-hint').textContent = nameValid.message;
        document.getElementById('name-hint').style.color = nameValid.valid ? 'green' : 'red';
        
        document.getElementById('phone-hint').textContent = phoneValid.message;
        document.getElementById('phone-hint').style.color = phoneValid.valid ? 'green' : 'red';
        
        // Активируем/деактивируем кнопку
        submitBtn.disabled = !(nameValid.valid && phoneValid.valid);
        
        return nameValid.valid && phoneValid.valid;
    }
    
    // Маска для телефона
    phoneInput.addEventListener('input', function(e) {
        let value = this.value.replace(/\D/g, '');
        if (value.length > 0) {
            value = '+7' + value.substring(1);
        }
        this.value = value;
        validateForm();
    });
    
    // Валидация при вводе
    nameInput.addEventListener('input', validateForm);
    phoneInput.addEventListener('input', validateForm);
    
    // Обработка отправки формы
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        if (!validateForm()) return;
        
        // Показываем загрузку
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Отправка...';
        submitBtn.disabled = true;
        
        // Собираем данные
        const formData = {
            name: nameInput.value.trim(),
            phone: phoneInput.value.trim()
        };
        
        // Отправляем на сервер (замените URL на ваш)
        fetch('callback.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                showMessage('success', 'Спасибо! Мы скоро вам перезвоним.');
                form.reset();
            } else {
                showMessage('error', data.message || 'Ошибка отправки');
            }
        })
        .catch(error => {
            showMessage('error', 'Ошибка соединения');
            console.error('Error:', error);
        })
        .finally(() => {
            submitBtn.textContent = originalText;
            validateForm();
        });
    });
    
    function showMessage(type, text) {
        messageEl.textContent = text;
        messageEl.className = `form-message ${type}`;
        messageEl.style.display = 'block';
        
        // Скрываем сообщение через 5 секунд
        setTimeout(() => {
            messageEl.style.display = 'none';
        }, 5000);
    }
    
    // Первичная валидация
    validateForm();
});

</script>




