<?php
    if (session_id() == '') {
        session_start();
    }
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Получите данные из формы регистрации
    $id = $_POST["id"];
    $db = new PDO("mysql:host=localhost;dbname=TouristDB","root","boberman");
    if ($query = $db -> query("DELETE FROM orders WHERE id = $id")) {
        $info = $query->fetchAll(PDO::FETCH_ASSOC);
        header("Location: http://localhost/order.php");
    } else {
        echo "Ошибка при удалении тура из корзины: " . $conn->error;
        echo $userId;
        echo "/";
        echo $tourId;
    }
}
?>