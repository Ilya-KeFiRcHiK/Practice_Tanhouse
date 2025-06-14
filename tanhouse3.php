<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="img/transparter.png" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                <img class="map-icon" src="img/geo-alt-fill (1) 1.png" alt="Иконка карты">
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
    
    <form action="view.php" method="POST" id="feedback-form" class="feedback-form" autocomplete="off" novalidate>
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

        <div class="header-bottom container">
           <a class="header-link" href="index.html">Главная</a>
           <nav class="dropdown-nav">
                <button id="menu-toggle">Меню</button>
                <ul class="menu-list" id="menu-list">
                    <li class="menu-color"><a href="#about">О компании</a></li>
                    <li class="menu-color"><a href="#reviews">Наши преимущества</a></li>
                    <li class="menu-color"><a href="#catalog">Каталог</a></li>
                    <li class="menu-color"><a href="#message">Отзывы клиентоа</a></li>
                </ul>
            </nav>
           <a class="header-link" href="catalog.html">Каталог</a>
        </div>
        <div class="img-home parallax" style="background-image: url('img/e3f3dc517ec08cf38a70b364f6e29d3abf9f2ff4.jpg');"></div>

      <article class="property-card" itemscope itemtype="http://schema.org/Residence">
<section class="property-card__section" itemprop="additionalProperty">

</section>

<div class="townhouse-container">
  <?php
// functions.php
require_once 'link.php';

function getTownhouses() {
    global $conn;
    
    $sql = "SELECT * FROM tanhouses WHERE id = 3";
    $result = $conn->query($sql);
    
    $townhouses = [];
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $townhouses[] = $row;
        }
    }
    
    return $townhouses;
}
?>

 <main class="container">
        <div class="row g-4 townhouse-container">
            <?php
            $townhouses = getTownhouses();
            
            foreach ($townhouses as $townhouse) {
                echo '
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card h-100">
                        <img src="' . htmlspecialchars($townhouse['photo_path']) . '" class="card-img-top" alt="' . htmlspecialchars($townhouse['name']) . '">
                        <div class="card-body">
                            <h3 class="card-title">' . htmlspecialchars($townhouse['name']) . '</h3>
                            
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="price-badge rounded-pill">' . number_format($townhouse['price'], 0, '', ' ') . ' ₽</span>
                                <span class="badge year-badge rounded-pill">
                                    <i class="bi bi-calendar2-check"></i> ' . htmlspecialchars($townhouse['construction_year']) . '
                                </span>
                            </div>
                            
                            <div class="property-feature">
                                <p><i class="bi bi-geo-alt"></i> ' . htmlspecialchars($townhouse['address']) . '</p>
                            </div>
                            
                            <div class="row g-2 mb-3">
                                <div class="col-6">
                                    <div class="property-feature d-flex align-items-center">
                                        <i class="bi bi-house-door"></i>
                                        <span>' . htmlspecialchars($townhouse['house_area']) . ' м²</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="property-feature d-flex align-items-center">
                                        <i class="bi bi-pin-map"></i>
                                        <span>' . htmlspecialchars($townhouse['land_area']) . ' м²</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="property-feature d-flex align-items-center">
                                        <i class="bi bi-building"></i>
                                        <span>' . htmlspecialchars($townhouse['floors_count']) . ' этажа</span>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="property-feature d-flex align-items-center">
                                        <i class="bi bi-door-open"></i>
                                        <span>' . htmlspecialchars($townhouse['bedrooms_count']) . ' комнаты</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Layout Section -->
                    <div class="property-card__layout mt-3">
                        <h3 class="property-card__subtitle" style="display: flex; justify-content: center;"><i class="bi bi-diagram-3"></i> Планировка</h3>
                        <ul class="property-card__layout-list">
                            <li class="property-card__layout-item">
                                <span class="property-card__layout-floor"><i class="bi bi-1-circle"></i> 1 этаж:</span>
                                <span class="property-card__layout-description">прихожая, гостевой санузел, кухня-столовая с гостиной и выходом на террасу</span>
                            </li>
                            <li class="property-card__layout-item">
                                <span class="property-card__layout-floor"><i class="bi bi-2-circle"></i> 2 этаж:</span>
                                <span class="property-card__layout-description">' . htmlspecialchars($townhouse['bedrooms_count']) . ' спальни, ванная комната</span>
                            </li>
                        </ul>
                    </div>
                </div>';
            }
            ?>

  <section class="property-card__section" itemprop="amenityFeature">
    <h2 class="property-card__section-title">
      <i class="bi bi-stars"></i> Особенности
    </h2>
    <ul class="property-card__specs-list">
      <li class="property-card__specs-item">
        <i class="bi bi-check-circle property-card__specs-icon"></i>
        <span itemprop="description">Газовое автономное отопление</span>  
      </li>
      <li class="property-card__specs-item">
        <i class="bi bi-check-circle property-card__specs-icon"></i>
        <span itemprop="description">Водоснабжение, ливневая канализация</span>
      </li>
      <li class="property-card__specs-item">
        <i class="bi bi-check-circle property-card__specs-icon"></i>
        <span itemprop="description">Система теплого пола</span>
      </li>
      <li class="property-card__specs-item">
        <i class="bi bi-check-circle property-card__specs-icon"></i>
        <span itemprop="description">Монолитная межэтажная лестница</span>
      </li>
      <li class="property-card__specs-item">
        <i class="bi bi-check-circle property-card__specs-icon"></i>
        <span itemprop="description">Внутридомовая разводка всех коммуникаций</span>
      </li>
      <li class="property-card__specs-item">
        <i class="bi bi-check-circle property-card__specs-icon"></i>
        <span itemprop="description">Входная дверь с защитой от взлома</span>
      </li>
      <li class="property-card__specs-item">
        <i class="bi bi-check-circle property-card__specs-icon"></i>
        <span itemprop="description">Тёплые пятикамерные стеклопакеты</span>
      </li>
    </ul>
  </section>

  <section class="property-card__section">
    <h2 class="property-card__section-title">
      <i class="bi bi-building-add"></i> Инфраструктура
    </h2>
    <ul class="property-card__infrastructure-list">
      <li class="property-card__infrastructure-item" itemprop="nearbyAmenities">
        <div class="property-card__infrastructure-details">
          <div><i class="bi bi-mortarboard"></i> Школа №58</div>
          <div><i class="bi bi-mortarboard"></i> Детский сад, Умный малыш</div>
          <div><i class="bi bi-mortarboard"></i> Meerkat, частная школа</div>
          <div><i class="bi bi-mortarboard"></i> Нахимимовское училище</div>
          <div><i class="bi bi-mortarboard"></i> РанХиГС, филиал</div>
          <div><i class="bi bi-mortarboard"></i> Студия детской речи</div>
          <div><i class="bi bi-activity"></i> Спортзал State of Fitness"</div>
          <div><i class="bi bi-tree"></i> Парк Макса Ашмана</div>
          <div><i class="bi bi-shop"></i> Супермаркеты, магазины, кофейни</div>
        </div>
      </li>
    </ul>
  </section>

  <section class="property-card__section">
    <h2 class="property-card__section-title">
      <i class="bi bi-bus-front"></i> Транспортная доступность
    </h2>
    <ul class="property-card__transport-list">
      <li class="property-card__transport-item" itemprop="publicTransportAccess">
        <div class="property-card__transport-details">
          <i class="bi bi-bus"></i> Маршрутка №82, №68
        </div>
      </li>
      <li class="property-card__transport-item" itemprop="publicTransportAccess">
        <div class="property-card__transport-details">
          <i class="bi bi-bus"></i> Автобусы №10, №7, №30
        </div>
      </li>
      <li class="property-card__transport-item" itemprop="publicTransportAccess">
        <div class="property-card__transport-details">
          <i class="bi bi-bus"></i> Выезды к морю и в центр
        </div>
      </li>
    </ul>
  </section>
</article>

<style>
      :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
            --accent-color: #fd7e14;
        }
        
        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background-color: #f8f9fa;
            color: #212529;
        }
        
        .header-title {
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        .header-subtitle {
            font-weight: 300;
            opacity: 0.9;
        }
        
        .townhouse-container {
            padding: 2rem 0;
        }
        
        .card {
            border: none;
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 2rem;
        }
        
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }
        
        .card-img-top {
            height: 400px;
            width: 800px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .card:hover .card-img-top {
            transform: scale(1.03);
        }
        
        .card-body {
            padding: 1.5rem;
        }
        
        .card-title {
            font-size: 30px;
            margin-bottom: 1rem;
            color: #176297;
        }
        
        .price-badge {
            font-size: 1.1rem;
            padding: 0.5rem 1rem;
            background-color: rgba(13, 110, 253, 0.1);
            color: var(--primary-color);
        }
        
        .year-badge {
            background-color: rgba(25, 135, 84, 0.1);
            color: #198754;
        }
        
        .property-feature {
            margin-bottom: 0.5rem;
        }
        
        .property-feature i {
            width: 24px;
            text-align: center;
            margin-right: 0.5rem;
            color: #127297;
        }

        .catalog-action-button{
            margin-top: -20px;
        }
        
        .property-card__layout {
            background-color: white;
            border-radius: 12px;
            padding: 1.5rem;
            margin-top: 1.5rem;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .property-card__subtitle {
            font-weight:bold;
            margin-bottom: 1.25rem;
            color: #176297;
            display: flex;
            padding: 0px;
            margin-top: -2px;
            align-items: center;
        }
        
        .property-card__subtitle i {
            margin-right: 0.75rem;
            font-size: 1.25rem;
        }
        
        .property-card__layout-list {
            list-style: none;
            padding-left: 0;
        }
        
        .property-card__layout-item {
            padding: 0.75rem 0;
            border-bottom: 1px solid #eee;
            display: flex;
            flex-wrap: wrap;
        }
        
        .property-card__layout-item:last-child {
            border-bottom: none;
        }
        
        .property-card__layout-floor {
            font-weight: 500;
            width: 100px;
            display: flex;
            align-items: center;
            color: var(--secondary-color);
        }
        
        .property-card__layout-floor i {
            margin-right: 0.5rem;
        }
        
        .property-card__layout-description {
            flex: 1;
            min-width: 200px;
        }
        
        .btn-details {
            border-width: 2px;
            font-weight: 500;
            padding: 0.5rem 1.5rem;
        }
        
        .footer {
            background-color: #212529;
            color: white;
            padding: 3rem 0;
            margin-top: 4rem;
        }
</style>

<div class="catalog-actions">
    <button class="catalog-action-button book-viewing" id="feedbackTanhouseBtn">Записаться на просмотр</button>
  </div>

<section id="reviews" class="reviews-section">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="review-card">
          <img src="img/Rectangle 1 (5).svg" alt="Фото таунхауса" class="property-photo">
        </div>
      </div>

      <div class="swiper-slide">
        <div class="review-card">
          <img src="img/living3.svg" alt="Фото таунхауса" class="property-photo">
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="review-card">
          <img src="img/Untitled (4).svg" alt="Фото таунхауса" class="property-photo">
        </div>
      </div>
      
      <div class="swiper-slide">
        <div class="review-card">
          <img src="img/Untitled (8).svg" alt="Фото таунхауса" class="property-photo">
        </div>
      </div>
    </div>
    
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
</section>

  <div class="feedback-form-container" id="feedbackFormContainer">
        <div class="feedback-form-header" id="feedbackFormHeader">
            Напишите нам, и мы свяжемся с вами в удобное для вас время
            <button class="close-btn" id="closeFeedbackForm">×</button>
        </div>
        
        <form action="view.php" method="POST" id="feedback-form" class="feedback-form" autocomplete="off">
        
            <label>
                Имя:
                <input type="text" class="name" name="name" id="name" placeholder="Только буквы, от 1 до 12 символов" required>
                <div class="hint" id="name-hint"></div>
            </label>

            <label>
        Телефон:
        <input type="tel" name="phone" id="phone" placeholder="+7 (___) ___-__-__" required>
        <div class="hint" id="phone-hint"></div>
        </label>
        
            <button class="blue-button" id="submit-btn" type="submit">Отправить</button>
        </form>
    </div>
        </button>
    </div>


<section>
        <script 
            type="text/javascript" 
            charset="utf-8" 
            async 
            src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ada444df6a63e56e8427f115d85c3c42fd681fa56634f1e79d054e72ebf3aa537&width=100%&height=500&lang=ru_RU&scroll=true">
        </script>
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
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="ScrollUp.js"></script>
    <script src="script.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });

    document.addEventListener('DOMContentLoaded', function() {
    // Получаем элементы
    const toggleBtn = document.getElementById('feedbackToggleBtn');
    const formContainer = document.getElementById('feedbackFormContainer');
    const closeBtn = document.getElementById('closeFeedbackForm');
    const formHeader = document.getElementById('feedbackFormHeader');
    
    // Проверяем, что элементы существуют
    if (!toggleBtn || !formContainer || !closeBtn || !formHeader) {
        console.error('One or more elements not found!');
        return;
    }
    
    // Открытие/закрытие формы
    toggleBtn.addEventListener('click', function() {
        formContainer.classList.toggle('visible');
    });
    
    // Закрытие формы по крестику
    closeBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        formContainer.classList.remove('visible');
    });
    
    // Закрытие формы по клику на заголовок
    formHeader.addEventListener('click', function(e) {
        if (e.target === this) { // Проверяем, что кликнули именно на заголовок
            formContainer.classList.remove('visible');
        }
    });
    
    // Валидация поля имени
    const nameInput = document.getElementById('name');
    const nameHint = document.getElementById('name-hint');
    
    if (nameInput && nameHint) {
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
    }
});

document.addEventListener('DOMContentLoaded', function() {
    // Получаем элементы
    const toggleBtn = document.getElementById('feedbackTanhouseBtn');
    const formContainer = document.getElementById('feedbackFormContainer');
    const closeBtn = document.getElementById('closeFeedbackForm');
    const formHeader = document.getElementById('feedbackFormHeader');
    
    // Проверяем, что элементы существуют
    if (!toggleBtn || !formContainer || !closeBtn || !formHeader) {
        console.error('One or more elements not found!');
        return;
    }
    
    // Открытие/закрытие формы
    toggleBtn.addEventListener('click', function() {
        formContainer.classList.toggle('visible');
    });
    
    // Закрытие формы по крестику
    closeBtn.addEventListener('click', function(e) {
        e.stopPropagation();
        formContainer.classList.remove('visible');
    });
    
    // Закрытие формы по клику на заголовок
    formHeader.addEventListener('click', function(e) {
        if (e.target === this) { // Проверяем, что кликнули именно на заголовок
            formContainer.classList.remove('visible');
        }
    });
    
    // Валидация поля имени
    const nameInput = document.getElementById('name');
    const nameHint = document.getElementById('name-hint');
    
    if (nameInput && nameHint) {
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
    }
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
</html>
</body>
</html>