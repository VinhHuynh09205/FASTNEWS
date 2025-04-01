<?php
    $title = "Đăng nhập Admin";
    $content =
    <<<HTML
    <link rel="stylesheet" href="../assets/css/loginAdmin.css">
    <div class="login-container">
        <div class="avatar-container">
            <img src="../assets/css/img/avatar.png" alt="User Avatar" class="avatar">
        </div>
        <h2>Đăng nhập Admin</h2>
        <form action="loginAdmin.php" method="POST">
            <div class="form-group">
                <label for="name">Họ và Tên:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
    HTML;

    include '../includes/masterAdmin.php';
?>

