<?php
session_start();

$email = $_POST["email"];
$pass = $_POST["pass"];

include "../dbconnect/pdo_connect.php";
$sql = "SELECT * FROM user WHERE email = '$email'";
$stmt = $pdo -> query($sql);
foreach($stmt as $row){
    $id = $row['id'];
    $pass2 = $row['pass'];
}
    if ($pass2 == $pass){
        $_SESSION = array();
        $_SESSION["id"] = $id;
        header('Location: ../template/index.php');
        exit;
    }else{
        $_SESSION['err_msg2'] = "";
        header('Location: ../template/login.php');
        exit;
    }