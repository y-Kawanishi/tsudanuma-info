<?php
session_start();

if(isset($_SESSION["id"])==FALSE){
    $_SESSION['err_msg2'] = "ログインして下さい";
    header('Location: ../template/login.php');
    exit;
}