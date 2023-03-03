<?php
class LoginController{
    // Hàm xử lý hành động index
    public function index(){
        $loginService = new LoginService();
        $account = $loginService -> GetAllUser();
        include("views/login/login.php");
    }
    public function login(){
        session_start();
        $username = $password = '';
        $username_error = $password_error = '';
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
        include("models/Login.php");
        include("views/includes/session_login.php");

    }

    public function logout(){
        
    }

    public function list(){
        // Nhiệm vụ 1: Tương tác với Services/Models
        // echo "Tương tác với Services/Models from Article";
        // Nhiệm vụ 2: Tương tác với View
        include("views/article/list_article.php");
    }
}