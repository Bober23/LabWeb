<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получите данные из формы регистрации
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $db = new PDO("mysql:host=localhost;dbname=TouristDB","root","boberman");
    if ($query = $db -> query("INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')")) {
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
        header("Location: http://localhost/index.php");
    } else {
        echo "Ошибка при регистрации: " . $conn->error;
    }
}
?>