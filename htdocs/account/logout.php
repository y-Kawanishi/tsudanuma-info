<?php
session_start();
$_SESSION = array();
header('Location: ../template/login.php');
exit;