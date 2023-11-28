<?php
if (session_id() == '') {
    session_start();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получите данные из формы регистрации
    $userId = $_SESSION["userid"];
    $feedback = $_POST["feedback"];
    $db = new PDO("mysql:host=localhost;dbname=TouristDB","root","boberman");
    if ($query = $db -> query("INSERT INTO feedback (userId, feedback) VALUES ('$userId', '$feedback')")) {
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
        header("Location: http://localhost/index.php");
        exit();
    } else {
        echo $userId;
        echo $feedback;
        echo "Ошибка при отправке отзыва: " . $conn->error;
    }
}
?>