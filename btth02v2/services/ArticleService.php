<?php
require './config/DBConnection.php';
include("./models/Article.php");

class ArticleService {
    public function getAllArticle() {
        $dbConn = new DBConnection();
        $conn = $dbConn->getConnection();

        $sql = "SELECT article.*, category.name as category_name, author.name as author_name FROM article, category, author 
        WHERE article.author_id = author.id AND article.category_id = category.id ORDER BY article.id ASC";
        
        $stmt = $conn->query($sql);
        
        $articles = [];
        while ($row = $stmt->fetch()) {
            $article = new Article($row['id'], $row['title'], $row['song_name'], $row['category_name'], $row['summary'], $row['content'], $row['author_name'], $row['date'], $row['image']);
            array_push($articles, $article);
        }
        return $articles;
    }
}