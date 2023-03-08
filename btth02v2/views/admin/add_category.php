<?php
$title = "Add category";
require("views/layout/admin_header.php");

if (!isset($category)) { $category = ['name' => '', 'quantity' => '']; }
if (!isset($errors)) { $errors = ['name' => '', 'quantity' => '']; }
?>

<main class="container mt-5 mb-5">
    <?php if (isset($message) && $message != '') { ?>
        <div class="alert alert-danger"><?= $message ?></div>
    <?php } ?>
    <form action="?controller=author&action=add" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới thể loại</h3>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="name">Tên thể loại</span>
                    <input type="text" class="form-control" style="width:90%" name="name" placeholder="Name..." value="<?= $category['name'] ?>">
                    <span class="error"><?= $errors['name'] ?></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="image">Số lượng</span>
                    <input type="text" class="form-control" style="width:90%" name="quantity">
                    <span class="error"><?= $errors['quantity'] ?></span>
                </div>
                <div class="form-group float-end">
                    <input type="submit" value="Thêm" class="btn btn-success">
                    <a href="?controller=author" class="btn btn-warning ">Quay lại</a>
                </div>

            </div>
        </div>
    </form>
</main>

<?php
include("views/layout/admin_footer.php")
?>