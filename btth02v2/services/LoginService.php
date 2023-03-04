<?php
    include("config/DBConnection.php");
    include("models/Login.php");
    class LoginService{
        public function checkLogin($username, $password){
            $dbConn = new DBConnection();
            $conn = $dbConn->getConnection();
     
             // B2. Truy vấn
             $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
             $stmt = $conn->query($sql);
            return $stmt->fetch();
             
        }

    }

?>