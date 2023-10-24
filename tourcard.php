<?php
    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else{
        print_r("error");
    }
    $db = new PDO("mysql:host=localhost;dbname=TouristDB","root","boberman");
    $info = [];
    if ($query = $db -> query("SELECT * FROM tours")) {
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
        $data = $info [$id-1];
    }
    else {
        print_r($db -> errorInfo());
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
        <link href="styles/tourcard.css" rel="stylesheet"/>
    </head>
    <body>
        <div class="headerDiv">
            <div>
                <img src = "res/logo.png" style="background-color: white; margin-top: 10px; margin-bottom: 10px; zoom: 130%; border: 5px; border-radius: 20px; padding: 5;" alt = "logo">
            </div>
            <div>
                <h1 class="headerH1">Золотая середина</h1>
                <h3 class="headerH3">Туристическое агенство</h3>
            </div>
            <div>
                <input style="margin-top: 40px;" value="Логин">
                <br>
                <input value="Пароль">
                <br>
                <button class="loginButton">Войти</button>
                <a href="registration.html" style="margin: 10;">Регистрация</a>
            </div>
        </div>
        <ul class="menu-bar">
            <li onclick="document.location='index.html'">Главная</li>
            <li onclick="document.location='shorttours.php'">Однодневные туры</li>
            <li onclick="document.location='longtours.php'">Многодневные туры</li>
            <li onclick="document.location='contacts.html'">Контакты</li>
            <li onclick="document.location='howtobuy.html'">Как купить</li>
        </ul>
        <div class="standartDiv">
            <div class="leftMenu">
                <a href="index.html">Главная<br></a>
                <a href="shorttours.php">Одноневные туры<br></a>
                <a href="longtours.php">Многодневные туры<br></a>
                <a href="contacts.html">Контакты<br></a>
                <a href="howtobuy.html">Как купить<br></a>
            </div>
            <div class="textDiv">
                <h1><?=$data['name'];?></h1>
                <div class="topDiv">
                    <img class="picture" src="<?= $data['image']; ?>">
                    <div class="parametersDiv">
                        <h3 class = "paramText">Свободных мест: <?=$data['available'];?></h3>
                        <h3 class = "paramText">Расстояние: <?=$data['length'];?>км</h3>
                        <h3 class = "paramText">Время в пути: <?=$data['lengthtime'];?><?php if($data['category'] == 'short'){echo 'ч';} else{echo 'д';}?>   </h3>
                        <h3 class = "paramText">Дата отправления <?=$data['date'];?> </h3>
                        <div class = "buyDiv">
                            <h2 class = "paramText">Cтоимость: <?=$data['price'];?>р </h2>
                            <button class="buyButton">Забронировать</button>
                        </div>
                    </div>
                </div>
                <p class="description"><?=$data['description'];?></p>
            </div>
        </div>
        <footer>
            <h3>Есть вопросы? Позвоните нам: 8 (495) 223-92-76</h3>
            <h3>©Все права защищены</h3>
        </footer>
    </body>
</html>