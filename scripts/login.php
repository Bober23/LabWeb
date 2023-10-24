<?php
    if (session_id() == '') {
        session_start();
    }
    $username = $_POST["username"];
    $password = $_POST["password"];
    $db = new PDO("mysql:host=localhost;dbname=TouristDB","root","boberman");
    $query = 'select username, password from users where username=:username';
    $data = $db->prepare($query);
    $data->bindParam(':username', $username);
    $data->execute();
    $item = $data->fetch();

    if ($item['password'] == $password)  {
        $_SESSION['username'] = $username;
        header("Location: http://localhost/index.php");
    } else {
        $_SESSION['incorrectpassword'] = true;
        
        header("Location: http://localhost/index.php");
    }
?>