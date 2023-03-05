<?php
require '../layout/admin_header.php';
// require '../../services/CategoryService.php';

// $categoryService = new CategoryService();
// $categories = $categoryService->getAllCategory();
?>

<main class="container mt-5 mb-5">
        <div class="row">
            <div class="col-sm">
                <h3 class="text-center text-uppercase fw-bold">Thêm mới bài viết</h3>
                <form action="process_add_article.php" method="post" enctype="multipart/form-data">
                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblTieuDe">Tiêu đề</span>
                        <input type="text" class="form-control" name="txtTieuDe">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblTenBaiHat">Tên bài hát</span>
                        <input type="text" class="form-control" name="txtTenBaiHat">
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblTheLoai">Thể loại</span>
                        <select class="form-select" name="sltTheLoai">
                            <?php
                            // Hiển thị các tùy chọn thể loại trong dropdown list
                            // foreach ($categories as $category) {
                            //     echo '<option value="' . $category->getId() . '">' . $category->getName() . '</option>';
                            // }
                            ?>
                        </select>
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblTomTat">Tóm tắt</span>
                        <textarea class="form-control" name="txtTomTat" rows="3"></textarea>
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblNoiDung">Nội dung</span>
                        <textarea class="form-control" name="txtNoiDung" rows="10"></textarea>
                    </div>

                    <div class="input-group mt-3 mb-3">
                        <span class="input-group-text" id="lblTacGia">Tác giả</span>
                        <select class="form-select" name="sltTacGia">
                            <?php
                            // foreach ($categories as $category) {
                            //     echo '<option value="' . $category->getId() . '">' . $category->getName() . '</option>';
                            // }
                            ?>
                        </select>
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text" id="lblHinhAnh">Hình ảnh</span>
                        <input type="file" class="form-control" name="fileHinhAnh">
                    </div>

                    <div class="form-group float-end">
                        <input type="submit" value="Thêm" class="btn btn-success">
                        <a href="article.php" class="btn btn-warning">Quay lại</a>
                    </div>
                </form>
    </main>

<?php
require '../layout/admin_footer.php';
?>