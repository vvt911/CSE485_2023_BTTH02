<?php
require './config/DBConnection.php';
include("./models/Category.php");

class AuthorService{
    public function getAllAuthor() {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT * FROM author";
        
        $stmt = $conn->query($sql);
        
        $authors = [];
        while ($row = $stmt->fetch()) {
            $author = new Author($row['id'], $row['name'], $row['image']);
            array_push($authors, $author);
        }
        return $authors;
    }
}