<?php
//データベースの接続と選択
$hostdbname = 'mysql:host=492d5de196f2;dbname=tsudanuma_info;charset=UTF8';
$username = "root";
$password = "password";
$pdo = new PDO($hostdbname, $username, $password);
$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>