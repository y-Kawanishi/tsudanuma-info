<?php
//データベースの接続と選択
$hostdbname = 'mysql:host=localhost;dbname=tsudanuma-info;charset=UTF8';
$username = "tsudanuma-info";
$password = "tsudanumapass";
$pdo = new PDO($hostdbname, $username, $password);
$pdo -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>