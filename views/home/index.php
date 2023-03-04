<?php
$title = "Home";
require './views/includes/header_page.php';
?>
<main class="container-fluid mt-3">
    <h3 class="text-center text-uppercase mb-3 text-primary">TOP bài hát yêu thích</h3>
    <div class="row">
        <!-- Lấy dữ liệu từ sql -->
        <?php
        foreach ($articles as $article) {
        ?>
            <div class="col-sm-4 col-md-3">
                <div class="card mb-2" style="width: 100%;">
                    <!-- <img src="./images/songs/" class="card-img-top" alt="..."> -->
                    <div class="card-body card-body__main">
                        <h5 class="card-title text-center">
                            <a href="./detail.php?id=<?= $article->getId() ?>" class="text-decoration-none">
                                <?= $article->getTitle() ?>
                            </a>
                        </h5>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</main>
<?php
include './views/includes/footer.php';
?>