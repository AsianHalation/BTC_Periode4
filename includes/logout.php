<?php if(isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['inlognaam']);
    header('location:../includes/homepage.php');
}

session_start();
