<?php
    session_start(); // Khởi tạo phiên
    session_unset();
    session_destroy();

    header("Location: ../admin/loginAdmin.php");
    exit;
?>
