<?php
    session_start();

    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] !== true) {
        header("Location: ../admin/loginAdmin.php");
        exit;
    }
?>