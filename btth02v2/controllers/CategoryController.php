<?php
require("services/CategoryService.php");
class CategoryController {
    private $categoryService = null;
    public function __construct()
    {
        $this -> categoryService = new CategoryService();
    }  
    
    public function index() {
        $index = 1;
        $categories = $this->categoryService->getAllCategory();
        include("views/admin/category.php");
    }
}
