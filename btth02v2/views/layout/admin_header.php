<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= html_escape($title) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .error {
            display: block;
            color: #fc7b0a;
        }
    </style>
</head>
<body>
    <header>
        <?php
            // $index = null;
            // if(isset($_GET['index'])){
            //     $index = $_GET['index'];
            // }
            if (!isset($index)) {
                $index = null;
            }
        ?>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="h3">
                    <a class="navbar-brand" href="?controller=admin">Administration</a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php echo $index == null ? 'active fw-bold' : '' ?>" aria-current="page" href="?controller=admin">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $index == '1' ? 'active fw-bold' : '' ?>" href="?controller=category">Thể loại</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $index == '2' ? 'active fw-bold' : '' ?>" href="?controller=author">Tác giả</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php echo $index == '3' ? 'active fw-bold' : '' ?>" href="?controller=article">Bài viết</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Logout</a></a>
                </ul>
                </div>
            </div>
        </nav>

    </header>