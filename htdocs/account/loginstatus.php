<?php
session_start();

if(isset($_SESSION["id"])==FALSE){
    header('Location: ../template/login.php');
    exit;
}