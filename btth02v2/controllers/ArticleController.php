<?php
require './services/ArticleService.php';

class ArticleController {
    public function index() {
        $index = 3;
        $articleService = new ArticleService();
        $articles = $articleService->getAllArticle();
        include("./views/admin/article.php");
    }

    public function add() {
        
    }
}