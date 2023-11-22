<?php
    if (session_id() == '') {
        session_start();
    }
?>
<html>
    <head>
        <title>
            Золотая середина
        </title>
        <link href="styles/div.css" rel="stylesheet" />
        <link href="styles/text.css" rel="stylesheet" />
        <link href="styles/table.css" rel="stylesheet" />
        <link href="styles/menu.css" rel="stylesheet"/>
        <link href="styles/carousel.css" rel="stylesheet"/>
    </head>
    <body>
    <?php include("includes/header.php"); ?>
        <div class="standartDiv">
            <div class="leftMenu">
                <a href="index.php">Главная<br></a>
                <a href="shorttours.php">Одноневные туры<br></a>
                <a href="longtours.php">Многодневные туры<br></a>
                <a href="contacts.php">Контакты<br></a>
                <a href="howtobuy.php">Как купить<br></a>
            </div>
            <div class="textDiv">
                <p>
                    <h1>Автобусные экскурсии и туры</h1>
                    <h3>
                        Вы зашли на сайт официального туроператора по России «Золотая Середина». Здесь Вы можете записаться на автобусные экскурсии из Москвы и разных городов Подмосковья или заказать необходимый тур для своей группы на автобусе или поезде. Наш опыт организации экскурсий более 10 лет! Наличие проверенных экскурсоводов в Москве, Казани, Санкт-Петербурге, Пскове, Дивеево, Селигере и других исторических городах
                    </h3>
                    
                    <div class="slideshow-container">

                        <!-- Full-width images with number and caption text -->
                        <div class="mySlides fade">
                            <div class="numbertext">1 / 3</div>
                            <img src="https://tourpics.hb.ru-msk.vkcs.cloud/kareliya.jpg" class="carouselPicture">
                            <div class="text">Карелия</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">2 / 3</div>
                            <img src="https://tourpics.hb.ru-msk.vkcs.cloud/dagestan.jpg" style="width:100%">
                            <div class="text">Дагестан</div>
                        </div>

                        <div class="mySlides fade">
                            <div class="numbertext">3 / 3</div>
                            <img src="https://tourpics.hb.ru-msk.vkcs.cloud/mirskiyzamok.jpg" style="width:100%">
                            <div class="text">Мирский замок</div>
                        </div>

                        <!-- Next and previous buttons -->
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
                        <br>

                        <!-- The dots/circles -->
                        <div style="text-align:center">
                        <span class="dot" onclick="currentSlide(1)"></span>
                        <span class="dot" onclick="currentSlide(2)"></span>
                        <span class="dot" onclick="currentSlide(3)"></span>
                    </div>
                    <script src="carousel.js"></script>
                    
                    
                    <h3>
                        Вы можете быть уверены, что мы подберем для Вас лучший вариант транспорта, экскурсионной программы тура, питания в кафе, размещения в комфортном отеле и развлекательной программы для наших клиентов. По Вашей просьбе, мы заменим обед в программе на постный или вегетарианский, а влюбленных пар, во время многодневных экскурсий автобусом, разместим в номерах с 2-спальной кроватью.
                    </h3>
                    <h3>
                        На экскурсиях сборных групп возможна оплата наличными при посадке в транспорт или по безналу для организаций. Группам от 5 человек – стоимость ж/д или автобусного тура по детскому билету, а от 10 человек – 1 билет бесплатно. Для постоянных клиентов бесплатное смс-оповещение о новых экскурсиях по России от GoldenMiddle.
                    </h3>
                    <h3>
                        Заранее известны посадочные места, согласованные с каждым туристом. Вы можете быть спокойны, что приедет современный транспорт с кондиционером и удобными сиденьями.
                    </h3>
                    <h3>
                        С нашей туристической фирмой Golden Middle Вы сможете:
                    </h3>
                    <ul>
                        <li>заказать школьный тур на автобусе или поезде по Москве и России</li>
                        <li>организовать корпоративный выезд для сотрудников вашей компании</li>
                        <li>путешествовать в составе наших сборных групп на автобусе, поезде, самолете по Москве, Подмосковью, Золотому Кольцу и всей России</li>
                        <li>подобрать круиз по рекам России</li>
                        <li>заказать прием Вашей группы в городах России</li>
                    </ul>
                    <h3>Информация о турах</h3>
                    <h3>Города отправления:</h3>
                    <ol>
                        <li>Москва</li>
                        <li>Апрелевка</li>
                        <li>Зеленоград</li>
                        <li>Железнодорожный</li>
                        <li>Долгопрудный</li>
                        <li>Жуковский</li>
                        <li>Королёв</li>
                        <li>Дзержинск</li>
                        <li>Балашиха</li>
                        <li>Красногорск</li>
                        
                    </ol>
                </p>
            </div>
            
        </div>
        <footer>
            <h3>Есть вопросы? Позвоните нам: 8 (495) 223-92-76</h3>
            <h3>©Все права защищены</h3>
        </footer>
    </body>
</html>