<?php
    require '../includes/session_login.php';

?>
<?php
    session_start();
    if(isset($_SESSION['username'])){
        unset($_SESSION['username']);
        // session_destroy();
        header("Location: ../index.php");
    }
?>