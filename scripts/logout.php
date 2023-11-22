<?php
    if (session_id() == '') {
        session_start();
    }
    unset($_SESSION['username']);
        unset($_SESSION['userid']);
        unset($_SESSION['correctregistration']);
        header("Location: http://localhost/index.php");
        exit();
?>