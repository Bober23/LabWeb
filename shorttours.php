<?php
    $db = new PDO("mysql:host=localhost;dbname=TouristDB","root","boberman");
    $info = [];
    if ($query = $db -> query("SELECT * FROM tours")) {
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    else {
        print_r($db -> errorInfo());
    }
?>
<html>
    <head>
        <title>
            Однодневные туры
        </title>
        <link href="styles/div.css" rel="stylesheet" />
        <link href="styles/text.css" rel="stylesheet" />
        <link href="styles/table.css" rel="stylesheet" />
        <link href="styles/card.css" rel="stylesheet" />
        <link href="styles/menu.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="headerDiv">
            <div>
                <img src = "res/logo.png" style="background-color: white; margin-top: 10px; margin-bottom: 10px; zoom: 130%; border: 5px; border-radius: 20px; padding: 5;" alt = "logo">
            </div>
            <div>
                <h1 style="text-align: center; zoom: 130%;color: white;">Золотая середина</h1>
                <h3 style="text-align: center; color: white;">Туристическое агенство</h3>
            </div>
            <div>
                <input style="margin-top: 40px;" value="Логин">
                <br>
                <input value="Пароль">
                <br>
                <button class="loginButton">Войти</button>
                <a href="clearpage.html" style="margin: 10;">Регистрация</a>
            </div>
        </div>
        <ul class="menu-bar">
            <li onclick="document.location='index.html'">Главная</li>
            <li onclick="document.location='longtours.html'">Многодневные туры</li>
            <li onclick="document.location='contacts.html'">Контакты</li>
            <li onclick="document.location='howtobuy.html'">Как купить</li>
        </ul>
        <div class="standartDiv">
            <div class="leftMenu">
                <a href="index.html">Главная<br></a>
                <a href="longtours.html">Многодневные туры<br></a>
                <a href="contacts.html">Контакты<br></a>
                <a href="howtobuy.html">Как купить<br></a>
            </div>
            <div class="textDiv">
                <p>
                    <h1>Каталог однодневных туров</h1>
                    <div class="cardGrid">
                        <?php foreach ($info as $data) : ?>
                            <div class="card">
                                <div class="cardTop">
                                <a href="clearpage.html">
                                    <img class="cardImage" src="<?= $data['image']; ?>" alt="Сергиев Посад"/>
                                </a>
                                </div>
                                <div class="cardBottom">
                                    <h3 class="cardTitle">
                                        <?= $data['name']; ?>
                                    </h3>
                                    <h5>Время в пути: <?=$data['lengthtime'];?>ч </h5>
                                    <h5>Расстояние: <?=$data['length'];?>км</h5>
                                    <h5>Свободных мест: <?=$data['available'];?></h5>
                                    <div class="cardPrice">
                                        <h3 class="tourPrice"><?=$data['price'];?></h3>
                                        <h5 class="tourPrice">руб.</h5>
                                    </div>  
                                </div>
                                <button onclick="document.location = 'clearpage.html'" class="cardButton">Подробнее</button>
                            </div>
                        <?php endforeach; ?>
                    </div>
                        
                    </div>
                </p>
            </div>
        </div>
        <footer>
            <h3>Есть вопросы? Позвоните нам: 8 (495) 223-92-76</h3>
            <h3>©Все права защищены</h3>
        </footer>
    </body>
</html>