<?php
include("configs/DBConnection.php");
include("models/Article.php");
class ArticleService{
    public function getAllArticles(){
        // 4 bước thực hiện
       $dbConn = new DBConnection();
       $conn = $dbConn->getConnection();

        // B2. Truy vấn
        $sql = "SELECT * FROM article";
        $stmt = $conn->query($sql);

        // B3. Xử lý kết quả
        $articles = [];
        while($row = $stmt->fetch()){
            $article = new Article($row['id'], $row['title'], $row['summary'], $row['song_name']);
            array_push($articles, $article);
        }
        // Mảng (danh sách) các đối tượng Article Model

        return $articles;
    }
}