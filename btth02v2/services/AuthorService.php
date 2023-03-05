<?php
require_once("config/DBConnection.php");
include("models/Author.php");

class AuthorService{
    private $conn = null;
    public function __construct()
    {
        $dbConn = new DBConnection();
        $this->conn = $dbConn->getConnection();
    }

    public function getAllAuthor() {
        $sql = "SELECT * FROM author";
        $stmt = $this->conn->query($sql);
        
        $authors = [];
        while ($row = $stmt->fetch()) {
            $author = new Author($row['id'], $row['name'], $row['image']);
            array_push($authors, $author);
        }
        return $authors;
    }

    public function getAuthorById($id){
        $sql = "SELECT * FROM  author WHERE id = :id";

        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        $row = $stmt->fetch();
        $author = ($row) ? new Author($row['id'], $row['name'], $row['image']) : null;
        return $author;
    }

    public function create($arguments) : bool{
        $sql = "INSERT INTO author (name, image) VALUE (:name, :image)";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($arguments);
    }

    public function edit($arguments) : bool {
        $sql = "UPDATE author SET name = :name, image = :image WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($arguments);
    }

    public function delete($id) : bool {
        $sql = "DELETE FROM article, author WHERE article.author_id = author.id and author.id = :id";
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute(['id' => $id]);
    }
}