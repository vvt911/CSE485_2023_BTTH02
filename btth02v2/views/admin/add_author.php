<?php
$title = "Add author";
require("views/layout/admin_header.php");

if (!isset($author)) { $author = ['name' => '', 'image' => '']; }
if (!isset($errors)) { $errors = ['name' => '', 'image' => '']; }
?>

<main class="container mt-5 mb-5">
    <?php if (isset($message) && $message != '') { ?>
        <div class="alert alert-danger"><?= $message ?></div>
    <?php } ?>
    <form action="?controller=author&action=add" method="POST" enctype="multipart/form-data">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới tác giả</h3>
                <div class="input-group mt-3 mb-3">
                    <span class="input-group-text" id="name">Tên tác giả</span>
                    <input type="text" class="form-control" style="width:90%" name="name" placeholder="Name..." value="<?= $author['name'] ?>">
                    <span class="error"><?= $errors['name'] ?></span>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="image">Hình ảnh</span>
                    <input type="file" class="form-control" style="width:90%" name="image">
                    <span class="error"><?= $errors['image'] ?></span>
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