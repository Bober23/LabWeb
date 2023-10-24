<?php
    if (session_id() == '') {
        session_start();
    }
    if(isset($_POST['logoutbutton'])){
        unset($_SESSION['username']);
        header("Location: http://localhost/index.php");
    }
?>