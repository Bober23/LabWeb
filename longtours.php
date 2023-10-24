<?php
    if (session_id() == '') {
        session_start();
    }
?>
<?php
    $db = new PDO("mysql:host=localhost;dbname=TouristDB","root","boberman");
    $info = [];
    if ($query = $db -> query("SELECT * FROM tours WHERE category = 'long'")) {
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    else {
        print_r($db -> errorInfo());
    }
?>
<html>
    <head>
        <title>
            Многодневные туры
        </title>
        <link href="styles/div.css" rel="stylesheet" />
        <link href="styles/text.css" rel="stylesheet" />
        <link href="styles/table.css" rel="stylesheet" />
        <link href="styles/card.css" rel="stylesheet" />
        <link href="styles/menu.css" rel="stylesheet"/>
    </head>
    <body>
    <?php include("includes/header.php"); ?>
        <div class="standartDiv">
            <div class="leftMenu">
                <a href="index.php">Главная<br></a>
                <a href="shorttours.php">Одноневные туры<br></a>
                <a href="longtours.php">Многодневные туры<br></a>
                <a href="contacts.html">Контакты<br></a>
                <a href="howtobuy.html">Как купить<br></a>
            </div>
            <div class="textDiv">
                <p>
                    <h1>Каталог многодневных туров</h1>
                    <div class="cardGrid">
                    <?php foreach ($info as $data) : ?>
                            <div class="card">
                                <div class="cardTop">
                                    <a href="tourcard.php?id=<?php echo $id=$data['id'];?>">
                                        <img class="cardImage" src="<?= $data['image']; ?>" alt="Картинка"/>
                                    </a>
                                </div>
                                <h3 class="cardTitle">
                                        <?= $data['name']; ?>
                                </h3>
                                <div class="cardBottom">
                                    <div class="cardPrice">
                                        <h3 class="tourPrice"><?=$data['price'];?></h3>
                                        <h5 class="tourPrice">руб.</h5>
                                    </div>  
                                    <h5>Свободных мест: <?=$data['available'];?></h5>
                                    <h5>Расстояние: <?=$data['length'];?>км</h5>
                                    <h5>Время в пути: <?=$data['lengthtime'];?>д </h5>
                                </div>
                                <button onclick="document.location = 'tourcard.php?id=<?php echo $id=$data['id'];?>'" class="cardButton">Подробнее</button>
                            </div>
                        <?php endforeach; ?>
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