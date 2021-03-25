<?php
session_start();

$_SESSION = array();
$_SESSION['system_msg'] = "ログアウトしました";
header('Location: ../template/login.php');
exit;