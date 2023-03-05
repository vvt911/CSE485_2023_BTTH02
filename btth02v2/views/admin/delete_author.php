<?php
$title = "Delete author";
require("views/layout/admin_header.php");
?>

<main class="container admin d-flex justify-content-center" id="content" style="min-height: 50vh; margin-top: 200px">
    <form action="?controller=author&action=delete&id=<?= $author['id'] ?>" method="POST" class="narrow">
        <h1 class="m-3">Xóa tác giả</h1>
        <p>Bạn có chắc chắn muốn xóa tác giả: <em><?= $author['name'] ?></em>?</p>
        <div class="row" margin>
            <div class="col-6">
                <input type="submit" name="delete" value="Xóa" class="btn btn-danger">
            </div>
            <div class="col-6 d-flex justify-content-end">
                <a href="?controller=author" class="btn btn-warning">Quay lại</a>
            </div>
        </div>
    </form>
</main>

<?php
include("views/layout/admin_footer.php")
?>