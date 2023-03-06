<?php
require_once("./config/DBConnection.php");
include("./models/Category.php");

class CategoryService{
    private $conn = null;
    public function __construct()
    {
        $dbConn = new DBConnection();
        $this->conn = $dbConn->getConnection();
    }
    public function getAllCategory() {       
        $sql = "SELECT * FROM category";
        $stmt = $this->conn->query($sql);
        
        $categories = [];
        while ($row = $stmt->fetch()) {
            $category = new Category($row['id'], $row['name'], $row['quantity']);
            array_push($categories, $category);
        }
        return $categories;
    }
}