<?php
    if (session_id() == '') {
        session_start();
    }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получите данные из формы регистрации
    $userId = $_SESSION['userid'];
    $tourId = $_POST["tourid"];
    $db = new PDO("mysql:host=localhost;dbname=TouristDB","root","boberman");
    if ($query = $db -> query("INSERT INTO orders (userId, tourId) VALUES ('$userId', '$tourId')")) {
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
        header("Location: http://localhost/order.php");
        exit();
    } else {
        echo "Ошибка при добавлении тура в корзину: " . $conn->error;
        echo $userId;
        echo $tourId;
    }
}
?>