<?php
class User{
    // Thuộc tính

    private $password;
    private $username;


    public function __construct($username = null, $password = null){
        $this->password = $password;
        $this->username = $username;
    }

    // Setter và Getter
    public function getPassword() {
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }
}