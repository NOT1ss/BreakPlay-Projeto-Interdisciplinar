<?php
    session_start();
    unset($_SESSION['id']);
    header("Location: PageLogin.php");
?>