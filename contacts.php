<?php
    if (session_id() == '') {
        session_start();
    }
?>
<html>
    <head>
        <title>
            Контакты
        </title>
        <link href="styles/div.css" rel="stylesheet" />
        <link href="styles/text.css" rel="stylesheet" />
        <link href="styles/table.css" rel="stylesheet" />
        <link href="styles/menu.css" rel="stylesheet"/>
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
                    <h1>Контакты</h1>
                    <h3>
                        Единый центр бронирования:
                    </h3>
                    <h3>
                        8(495)223-92-76 (с 9 до 19 ч. пн-пт)
                    </h3>
                    <h3>
                        Email: zakaz.goldenmiddle@mail.ru        
                    </h3>
                    <h3>
                        Адрес: 117042, г. Москва, Чечерский пр-зд д. 24 , пом. 1, комн. 2, оф. 56
                    </h3>
                    <a href="https://tourism.gov.ru/reestry/reestr-turoperatorov/show.php?id=110948">Подробно о компании на сайте Ростуризма.</a>
                    <h3>
                        Реквизиты ООО "Золотая середина"
                    </h3>
                    <ul>
                        <li>ИНН 7727741484</li>
                        <li>КПП 772701001</li>
                        <li>Р/С: 40702810331030000091</li>
                        <li>ФИЛИАЛ "Центральнный" БАНКА  ВТБ (ПАО) г. Москва.</li>
                        <li>К/с: 30101810145250000411</li>
                        <li>БИК 044525411</li>
                        <li>ОГРН 1117746112461 </li>
                    </ul>
                    
                </p>
            </div>
        </div>
        <footer>
            <h3>Есть вопросы? Позвоните нам: 8 (495) 223-92-76</h3>
            <h3>©Все права защищены</h3>
        </footer>
    </body>
</html>