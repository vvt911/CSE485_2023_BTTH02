<?php
require './views/layout/admin_header.php';

?>

<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="./views/admin/add_article.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tiêu đề</th>
                        <th scope="col">Thể loại</th>
                        <th scope="col">Tác giả</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($articles as $key => $article) {
                    ?>
                    <tr>
                        <th scope="row"><?php echo $article->getId(); ?></th>
                        <td><?php echo $article->getTitle(); ?></td>
                        <td><?php echo $article->getCategory_name(); ?></td>
                        <td><?php echo $article->getAuthor_name(); ?></td>
                        <td>
                            <a href="edit_article.php?id=<?php echo $row["ma_bviet"] ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="process_remove_article.php?id=<?php echo $row["ma_bviet"] ?>" onclick="return confirm('Bạn có chắc muốn xóa bài viết này không?')">
                                <i class="fa-solid fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
</main>

<?php
require './views/layout/admin_footer.php';
?>