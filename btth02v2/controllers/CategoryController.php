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

    public function add() {
        $index = 1;
        $category = ['name' => '', 'quantity' => ''];
        $errors = ['name' => '', 'quantity' => ''];
        $message       = '';


        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $category['name'] = (is_text($_POST['name'], 4, 30)) ? $_POST['name'] : '';
            if($category['name'] == '') {
                $errors['name'] = 'Tên phải nhiều hơn 4 và ít hơn 30 ký tự';
            }
            

            if($category['name'] == '' or $category('quantity') == '') {
                $message = 'Vui lòng thêm đúng thông tin'
                include("views/admin/category.php");
            }
            else{
                if ($this->authorService->create($category)) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                    redirect("?controller=author", ['success' => 'Thêm tác giả thành công']);
                } else {
                    redirect("?controller=author", ['failure' => 'Thêm tác giả không thành công']);
                }
            }
        }

    }
}
