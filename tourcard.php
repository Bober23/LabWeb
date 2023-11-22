<?php
    if (session_id() == '') {
        session_start();
    }
?>
<?php
    if (isset($_GET['id'])){
        $id = $_GET['id'];
    }
    else{
        print_r("error");
    }
    $db = new PDO("mysql:host=localhost;dbname=TouristDB","root","boberman");
    $info = [];
    if ($query = $db -> query("SELECT * FROM tours WHERE id = '$id'")) {
        $data = $query->fetch(PDO::FETCH_ASSOC);
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
                            <form action="scripts/addtoorder.php" method="post" >
                                <input type="hidden" name="tourid" value="<?=$id;?>">
                                <input type="submit" name="buyButton" class="buyButton" value="Забронировать">
                            </form>
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