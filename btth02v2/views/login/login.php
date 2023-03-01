<!-- <?php
if (isset($_GET['error'])) {
    echo "<script>alert('" . htmlspecialchars($_GET['error']) . "');</script>";
}
?>
<?php
// session_start();
// $username = $password = '';
// $username_error = $password_error = '';

// if (isset($_POST['btnLogin'])) {
//     if (empty($_POST['username'])) {
//         $username_error = "Tên đăng nhập không được để trống.";
//     } else {
//         $username = htmlspecialchars($_POST['username']);
//     }

//     if (empty($_POST['password'])) {
//         $password_error = "Mật khẩu không được để trống.";
//     } else {
//         $password = htmlspecialchars($_POST['password']);
//     }

//     $validate_success = empty($username_error) && empty($password_error);
//     if ($validate_success) {
//         $conn = mysqli_connect('localhost', 'root', '', 'btth01_cse485');
//         $sql = "SELECT * FROM user WHERE ten_dnhap = '$username' AND mat_khau = '$password'";
//         $result = mysqli_query($conn, $sql);

//         if (mysqli_num_rows($result) > 0) {
//             $_SESSION['LAST_ACTIVITY'] = time();
//             header("Location: ./admin/");
//         } else {
//             header("Location: login.php?error='Sai tên đăng nhập hoặc mật khẩu'");
//         }
//     }
// }
?> -->
<?php
if (!isset($name_css)) {
    $name_css = '';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
            <div class="container-fluid">
                <div class="my-logo">
                    <a class="navbar-brand" href="index.php">
                        <img src="images/logo2.png" alt="" class="img-fluid">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../home/index.php">Trang chủ</a>
                        </li>

                        <li class="nav-item">
                            <?php session_start(); if (isset($_SESSION['LAST_ACTIVITY'])) { ?>
                                <a class="nav-link" href="./admin/">Quay lại trang admin</a>
                            <?php } else { session_destroy(); ?>
                                <a class="nav-link" href="#">Đăng nhập</a>
                            <?php } ?>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Tìm</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-header">
                    <h3>Sign In</h3>
                    <div class="d-flex justify-content-end social_icon">
                        <span><i class="fab fa-facebook-square"></i></span>
                        <span><i class="fab fa-google-plus-square"></i></span>
                        <span><i class="fab fa-twitter-square"></i></span>
                    </div>
                </div>
                <div class="card-body">
                    <form action="./login.php" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="txtUser"><i class="fas fa-user"></i></span>
                            <input type="text" class="w-75 form-control <?php echo $username_error ? 'is-invalid' : '' ?>" name="username" placeholder="username">
                            <!-- <p class="text-danger"><?php echo $username_error; ?></p> -->
                        </div>

                        <div class="input-group mb-3">
                            <span class="input-group-text" id="txtPass"><i class="fas fa-key"></i></span>
                            <input type="password" class="w-75 form-control <?php echo $password_error ? 'is-invalid' : '' ?>" name="password" placeholder="password">
                            <!-- <p class="text-danger"><?php echo $password_error; ?></p> -->
                        </div>

                        <div class="row align-items-center remember">
                            <input type="checkbox">Remember Me
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btnLogin" value="Login" class="btn float-end login_btn">
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-center ">
                        Don't have an account?
                        <a href="#" class="text-warning text-decoration-none">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="text-warning text-decoration-none">Forgot your password?</a>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
        <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>