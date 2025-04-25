<?php
    error_reporting(E_ALL); //báo cáo tất cả lỗi
    ini_set('display_errors', 1); //hiển thị lỗi
    session_start();
    include "database.php";

    $error = '';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //lấy thông tin từ form đăng nhập
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        
        //lấy dữ liệu từ database
        $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        //kiểm tra xem có tài khoản nào với email này không
        if($result->num_rows == 1) {
            $admin = $result->fetch_assoc();

            if($password === $admin['password']) {
                //nếu mật khẩu đúng thì lưu thông tin vào session
                $_SESSION['loggedIn'] = true;
                $_SESSION['admin_email'] = $admin['email'];

                header("Location: ../admin/dashboard.php");
                exit;
            }   
        }

        $_SESSION['login_error'] = "Email hoặc mật khẩu không đúng!";
        header("Location: ../admin/loginAdmin.php");
    }
?>