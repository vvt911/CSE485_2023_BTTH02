<?php
require './services/ArticleService.php';

class ArticleController {

    public function index() {
        $articleService = new ArticleService();
        $articles = $articleService->getAllArticle();
        include("./views/admin/article.php");
    }

    public function add() {
        
    }
}