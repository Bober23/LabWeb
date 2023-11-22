<?php
    $search_q=$_POST['search_q'];
    $search_q = trim($search_q);
    $search_q = strip_tags($search_q);
    $db = new PDO("mysql:host=localhost;dbname=TouristDB","root","boberman");
    $info = [];
    if ($query = $db -> query("SELECT * FROM tours WHERE name LIKE '%$search_q%'")) {
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
    }
    else {
        print_r($db -> errorInfo());
    }
?>
<html>
    <head>
        <title>
            Поиск
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
                <a href="contacts.php">Контакты<br></a>
                <a href="howtobuy.php">Как купить<br></a>
                <br>
                <form name="searchForm" method="post" action="search.php">
                    <input class="searchInput" type="search" name="search_q"/></br>
                    <input class="searchInput" type="submit" value="Поиск"/></br>
                    
                </form>
            </div>
            <div class="textDiv">
                <p>
                    <h1>Результаты поиска</h1>
                    <?php if (count($info) != 0): ?>
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
                                        <?php if ($data['category']=='short'): ?>
                                            <h5>Время в пути: <?=$data['lengthtime'];?>ч </h5>
                                        <?php else: ?>
                                            <h5>Время в пути: <?=$data['lengthtime'];?>д </h5>
                                        <?php endif;?>
                                    </div>
                                    <button onclick="document.location = 'tourcard.php?id=<?php echo $id=$data['id'];?>'" class="cardButton">Подробнее</button>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php else: ?>
                        <h2>Ничего не найдено</h2>
                    <?php endif; ?>
                </p>
            </div>
        </div>
        <footer>
            <h3>Есть вопросы? Позвоните нам: 8 (495) 223-92-76</h3>
            <h3>©Все права защищены</h3>
        </footer>
    </body>
</html>