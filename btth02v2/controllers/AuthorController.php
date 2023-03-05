<?php
require("services/AuthorService.php");
class AuthorController {
    private $authorService = null;
    public function __construct()
    {
        $this->authorService = new AuthorService();
    }
    
    public function index() {
        $index = 2;
        $authors = $this->authorService->getAllAuthor();
        include("views/admin/authors.php");
    }

    public function add() {
        $index = 2;
        $author = ['name' => '', 'image' => ''];
        $errors = ['name' => '', 'image' => ''];
        $message       = '';
        $upload_path   = 'assets/images/authors/';
        $max_size      = 5242880;
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif',];
        $allowed_exts  = ['jpeg', 'jpg', 'png', 'gif',];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Check author name
            $author['name'] = (is_text($_POST['name'], 4, 30)) ? $_POST['name'] : '';
            if($author['name'] == '') {
                $errors['name'] = 'Tên phải nhiều hơn 4 và ít hơn 30 ký tự';
            }

            $errors['image'] = ($_FILES['image']['error'] === 1) ? 'Vượt quá dung lượng ' : '';

            if ($_FILES['image']['error'] == 0) {
                $errors['image']  .= ($_FILES['image']['size'] <= $max_size) ? '' : 'Vượt quá dung lượng ';
                // Check the media type is in the $allowed_types array
                $type   = mime_content_type($_FILES['image']['tmp_name']);        
                $errors['image'] .= in_array($type, $allowed_types) ? '' : 'lỗi kiểu dữ liệu ';
                // Check the file extension is in the $allowed_exts array
                $ext    = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
                $errors['image'] .= in_array($ext, $allowed_exts) ? '' : 'đuôi mở rộng không hợp lệ ';

                // If there are no errors create the new filepath and try to move the file
                if (!$errors['image']) {
                    $filename    = create_filename($_FILES['image']['name'], $upload_path);
                    $destination = $upload_path . $filename;
                    $author['image'] = $filename;
                }
            }

            if ($author['image'] == '') {
                $errors['image'] = 'Vui lòng chọn ảnh';
            }
            
            if ($author['name'] == '' or $author['image'] == '') {
                $message = 'Vui lòng thêm đúng thông tin';
                include("views/admin/add_author.php");
            } else {
                if ($this->authorService->create($author)) {
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                    redirect("?controller=author", ['success' => 'Thêm tác giả thành công']);
                } else {
                    redirect("?controller=author", ['failure' => 'Thêm tác giả không thành công']);
                }
            }
        } else {
            include("views/admin/add_author.php");
        }
    }

    public function edit() {
        $index = 2;
        $author = ['id' => '', 'name' => '', 'image' => ''];
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $row = $this->authorService->getAuthorById($id);
            if (!$row) {
                redirect("?controller=author", ['failure' => 'Không tìm thấy tác giả']);
            }
            $author = ['id' => $id, 'name' => $row->getName(), 'image' => $row->getImage()];
        }
        
        $errors = ['name' => '', 'image' => ''];
        $message       = '';
        $upload_path   = 'assets/images/authors/';
        $max_size      = 5242880;
        $allowed_types = ['image/jpeg', 'image/png', 'image/gif',];
        $allowed_exts  = ['jpeg', 'jpg', 'png', 'gif',];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Check author name
            $author['id'] = $_POST['id'];
            $author['name'] = (is_text($_POST['name'], 4, 30)) ? $_POST['name'] : '';
            if($author['name'] == '') {
                $errors['name'] = 'Tên phải nhiều hơn 4 và ít hơn 30 ký tự';
            }

            $errors['image'] = ($_FILES['image']['error'] === 1) ? 'Vượt quá dung lượng ' : '';

            if ($_FILES['image']['error'] == 0) {
                $errors['image']  .= ($_FILES['image']['size'] <= $max_size) ? '' : 'Vượt quá dung lượng ';
                // Check the media type is in the $allowed_types array
                $type   = mime_content_type($_FILES['image']['tmp_name']);        
                $errors['image'] .= in_array($type, $allowed_types) ? '' : 'lỗi kiểu dữ liệu ';
                // Check the file extension is in the $allowed_exts array
                $ext    = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
                $errors['image'] .= in_array($ext, $allowed_exts) ? '' : 'đuôi mở rộng không hợp lệ ';

                // If there are no errors create the new filepath and try to move the file
                if (!$errors['image']) {
                    $filename    = create_filename($_FILES['image']['name'], $upload_path);
                    $destination = $upload_path . $filename;
                    $author['image'] = $filename;
                }
            }

            if ($author['image'] == '') {
                $errors['image'] .= 'Vui lòng chọn ảnh';
            }
            
            if ($author['name'] == '' or $author['image'] == '' or $errors['name'] != '' or $errors['image'] != '') {
                $message = 'Vui lòng thêm đúng thông tin';
                include("views/admin/edit_author.php");
            } else {
                $row = $this->authorService->getAuthorById($author['id']);
                if ($this->authorService->edit($author)) {
                    unlink("assets/images/authors/".$row->getImage());
                    move_uploaded_file($_FILES['image']['tmp_name'], $destination);
                    redirect("?controller=author", ['success' => 'Sửa tác giả thành công']);
                } else {
                    redirect("?controller=author", ['failure' => 'Sửa tác giả không thành công']);
                }
            }
        } else {
            include("views/admin/edit_author.php");
        }
    }

    public function delete() {
        $index = 2;
        $id = $_GET['id'] ?? '';

        $row = $this->authorService->getAuthorById($id);
        if (!$row) {
            redirect("?controller=author", ['failure' => 'Không tìm thấy tác giả']);
        } else {
            if($_SERVER['REQUEST_METHOD'] == 'POST') {
                if ($this->authorService->delete($id)) {
                    unlink("assets/images/authors/".$row->getImage());
                    redirect("?controller=author", ['success' => 'Xoá tác giả thành công']);
                } else {
                    redirect("?controller=author", ['failure' => 'Xoá tác giả không thành công']);
                }
            }
        }
        $author = ['id' => $row->getId(), 'name' => $row->getName()];
        include("views/admin/delete_author.php");
    }
}
