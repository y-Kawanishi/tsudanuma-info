<?php
session_start();

$hash = password_hash($_SESSION["pass"], PASSWORD_DEFAULT);
include "../dbconnect/pdo_connect.php";
try{
    $sql = "INSERT INTO user(name, email, pass, year, month, day, gender) VALUES('{$_SESSION["name"]}', '{$_SESSION["email"]}', '{$hash}', '{$_SESSION["year"]}', '{$_SESSION["month"]}', '{$_SESSION["day"]}', '{$_SESSION["gender"]}')";
    $pdo -> query($sql);
}catch(PDOException $Exception){
    echo "error";
}
$_SESSION = array();
$_SESSION["system_msg"] = "会員登録が完了いたしました。ログインして下さい。";
header('Location: ./../template/login.php');
exit;
?>