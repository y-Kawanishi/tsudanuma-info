<?php
include "../dbconnect/pdo_connect.php";
$table = $_POST['table'];
$shop_id = $_POST['shop_id'];


try {
    $sql = "DELETE FROM $table WHERE id = $shop_id";
    $pdo -> query($sql);
} catch (PDOException $e) {
	echo $e->getMessage();
	die();
}
$pdo = null;
header('Location: ../template/index.php');
exit;
?>