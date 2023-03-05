<?php
$title = "Authors - Admin";
require("views/layout/admin_header.php");

$success = $_GET['success'] ?? '';
$failure = $_GET['failure'] ?? '';
?>

<main class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm">
            <?php if ($success) { ?><div class="alert alert-success text-center"><?= $success ?></div><?php } ?>
            <?php if ($failure) { ?><div class="alert alert-danger text-center"><?= $failure ?></div><?php } ?>
            <a href="?controller=author&action=add" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên tác giả</th>
                        <th scope="col">Hình ảnh</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($authors as $row) { ?>
                        <tr>
                            <th scope="row"><?= html_escape($row->getId()); ?></th>
                            <td><?= html_escape($row->getName()); ?></td>
                            <td><img src="assets/images/authors/<?= $row->getImage() ?>" alt="Đây là hình tác giả" width="100px"></td>
                            <td><a href="?controller=author&action=edit&id=<?= html_escape($row->getId()) ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
                            <td><a href="?controller=author&action=delete&id=<?= html_escape($row->getId()) ?>"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
include("views/layout/admin_footer.php")
?>