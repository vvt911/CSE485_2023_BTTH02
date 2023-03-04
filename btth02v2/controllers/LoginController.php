<?php
include("services/LoginService.php");
class LoginController {
    public function index() {
        include("views/home/login.php");
    }

    public function checkAccount() {
        $username = $_GET['username'] ?? '';
        $password = $_GET['password'] ?? '';
        if($username != '' and $password !=''){
            // include("?controller=admin");
            $loginService = new LoginService();
            if($loginService->checkLogin($username,$password)){
                // include("views/admin/index.php");
                header('Location: ?controller=admin');

            }else{
                $message = 'Lỗi Không đăng nhập được';
                include("views/home/login.php");
            }
        }
        
        
    }
}
?>