<?php
session_start();
include "../dbconnect/pdo_connect.php";
try{
    $sql = "INSERT INTO user(name, email, pass, year, month, day, gender) VALUES('{$_SESSION["name"]}', '{$_SESSION["email"]}', '{$_SESSION["pass"]}', '{$_SESSION["year"]}', '{$_SESSION["month"]}', '{$_SESSION["day"]}', '{$_SESSION["gender"]}')";
    $pdo -> query($sql);
}catch(PDOException $Exception){
    echo "error";
}
$_SESSION = array();
$_SESSION["err_msg2"] = "会員登録が完了いたしました。ログインして下さい。";
header('Location: ./../template/login.php');
exit;
?>