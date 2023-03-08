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

    public function getCategoryById($id) {
        $sql = "SELECT * FROM category WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();
        $category = ($row) ? new Category($row['id'], $row['name'], $row['quantity']) : null;
        return $category;
    }

    public function create($arguments) : bool{
        $sql = "INSERT INTO category (name) VALUE (:name)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($arguments);
    }

    public function edit($arguments) : bool {
        $sql = "UPDATE category SET name = :name, quantity = :quantity WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($arguments);
    }

    public function delete($id) : bool {
        $sql = "DELETE FROM article, category WHERE article.category_id = category.id and category.id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
    

    }
