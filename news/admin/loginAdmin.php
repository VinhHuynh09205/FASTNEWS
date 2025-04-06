<?php
    session_start();
    $error = $_SESSION['login_error'] ?? '';
    unset($_SESSION['login_error']);
?>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập Admin</title>
    <link rel="stylesheet" href="../assets/css/loginAdmin.css">
</head>
<body>
    <div id="login-container">
        <div id="avatar-container">
            <img src="../assets/img/avatar.png" alt="User Avatar" class="avatar">
        </div>
        <h2>Đăng nhập Admin</h2>
        <form action="../functions/login.php" method="POST">
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
</body>
<?php if (!empty($error)): ?>
    <script>
        alert("<?= addslashes($error) ?>"); 
    </script>
<?php endif; ?>
</html>
