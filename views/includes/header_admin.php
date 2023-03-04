<!-- <?php
session_start();
$message = "Đã hết thời gian làm việc vui lòng đăng nhập";
if (isset($_SESSION['LAST_ACTIVITY'])) {
    // 60 is logout time when doing nothing
    if (time() - $_SESSION['LAST_ACTIVITY'] > 60) {
        session_destroy();
        header("Location: ../login.php?error=$message");
    } else {
        $_SESSION['LAST_ACTIVITY'] = time();
    }
} else {
    session_destroy();
    header("Location: ../login.php?error=$message");
}
?> -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_login.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="#">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active fw-bold" aria-current="page" href="./">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Trang ngoài</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/categories.php">Thể loại</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/author.php">Tác giả</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/articles.php">Bài viết</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../admin/logout.php">Đăng xuất</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>