<link href="styles/div.css" rel="stylesheet" />
<link href="styles/text.css" rel="stylesheet" />
<link href="styles/table.css" rel="stylesheet" />
<link href="styles/menu.css" rel="stylesheet"/>
<div class="headerDiv">
    <div>
        <img src = "res/logo.png" style="background-color: white; margin-top: 10px; margin-bottom: 10px; zoom: 130%; border: 5px; border-radius: 20px; padding: 5;" alt = "logo">
    </div>
    <div>
        <h1 class="headerH1">Золотая середина</h1>
        <h3 class="headerH3">Туристическое агенство</h3>
    </div>
    <?php
        if($_SESSION['incorrectpassword'] == true){
            echo '<script type="text/javascript">
            alert("Неправильный логин или пароль");
            </script>';
            unset($_SESSION['incorrectpassword']);
        }
    ?>
    <?php require_once 'scripts/fuctions.php'; if (isLogged()): ?>
        <div class="nameDiv">
           <h2 class="cabLogin"><?php echo $_SESSION['username'];?></h2>
            <form action="scripts/logout.php" method="post" class="cabForm">
                <input type="submit" name="logoutbutton" value="Выйти">
            </form>
            <form action="feedback.html" method="post" class="cabForm">
                <input type="submit" name="feedbackbutton" value="Оставить отзыв">
            </form>
        </div>
    <?php else: ?>
        <div style="margin-top:20px"> 
            <form method="post" action="scripts/login.php">
                <label style="color: white;">Введите имя и пароль<label>
                <br>
                <input type="text" name="username" id="username" required>
                <br>
                <input type="password" name="password" id="password" required>
                <br>
                <input type="submit" value="Войти">
                <a href="registration.html" style="margin: 10;">Регистрация</a>
            </form>
        </div>
    <?php endif; ?>
</div>
<ul class="menu-bar">
    <li onclick="document.location='index.php'">Главная</li>
    <li onclick="document.location='shorttours.php'">Однодневные туры</li>
    <li onclick="document.location='longtours.php'">Многодневные туры</li>
    <li onclick="document.location='contacts.php'">Контакты</li>
    <li onclick="document.location='howtobuy.php'">Как купить</li>
</ul>