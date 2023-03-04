<?php
    require './btth02v2/configs/DBConnection.php';
    session_start();
    if (isset($_POST['btnLogin'])) {
        if (empty($_POST['username'])) {
            $username_error = "Tên đăng nhập không được để trống.";
        } else {
            $username = htmlspecialchars($_POST['username']);
        }
    
        if (empty($_POST['password'])) {
            $password_error = "Mật khẩu không được để trống.";
        } else {
            $password = htmlspecialchars($_POST['password']);
        }
    
        $validate_success = empty($username_error) && empty($password_error);
        if ($validate_success) {
            $conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
            $sql = "SELECT * FROM user WHERE ten_dnhap = '$username' AND mat_khau = '$password'";
            $result = mysqli_query($conn, $sql);
    
            if (mysqli_num_rows($result) > 0) {
                $_SESSION['LAST_ACTIVITY'] = time();
                header("Location: ./admin/");
            } else {
                header("Location: login.php?error='Sai tên đăng nhập hoặc mật khẩu'");
            }
        }
    }

?>