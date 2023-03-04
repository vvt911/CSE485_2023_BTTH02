<?php
    include("configs/DBConnection.php");
    include("models/Login.php");
    class LoginService{
        public function GetAllUser(){
            $dbConn = new DBConnection();
            $conn = $dbConn->getConnection();
     
             // B2. Truy vấn
             $sql = "SELECT * FROM user";
             $stmt = $conn->query($sql);
     
             // B3. Xử lý kết quả
             $users = [];
             while($row = $stmt->fetch()){
                 $user = new User($row['username'], $row['password']);
                 array_push($users, $user);
             }
             // Mảng (danh sách) các đối tượng Article Model
     
             return $users;
             
        }

    }

?>