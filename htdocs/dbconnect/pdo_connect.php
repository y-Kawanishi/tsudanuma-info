<?php
//データベースの接続と選択
$hostdbname = 'mysql:host=3a2673f1e111;dbname=tsudanuma_info;charset=UTF8';
$username = "root";
$password = "password";
$pdo = new PDO($hostdbname, $username, $password);
$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>