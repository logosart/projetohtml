<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    $_SESSION['msg'] = "You have to log in first";
    header('location: login.php');
    
}else{
    // print_r ($_SESSION);
    // echo ($_SESSION['usuario'][0]);
    header("Location:home.php");
    exit;
}
?>
