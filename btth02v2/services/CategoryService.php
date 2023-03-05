<?php
require './config/DBConnection.php';
include("./models/Category.php");

class CategoryService{
    public function getAllCategory() {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM category";
        
        $stmt = $conn->query($sql);
        
        $categories = [];
        while ($row = $stmt->fetch()) {
            $category = new Category($row['id'], $row['name'], $row['quantity']);
            array_push($categories, $category);
        }
        return $categories;
    }
}