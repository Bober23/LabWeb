<?php
    function isLogged() {
        return isset($_SESSION['username']) && $_SESSION['username'] != '';
    }
    function logout() {
        unset($_SESSION['username']);
        header('Refresh:0');
    }
?>