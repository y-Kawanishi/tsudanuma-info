<?php
$date = date_create();
$datetime = date_format($date,'Y-m-d H:i:s');
$path = "./".$_POST['item'].".php";

include "../dbconnect/pdo_connect.php";
try{
    $sql = "INSERT INTO `{$_POST['table']}` (`shop_id`, `comment`, `star`, `user_id`, `datetime`) VALUES('{$_POST["shop_id"]}', '{$_POST["comment"]}', '{$_POST["star"]}', '{$_POST["user_id"]}', '$datetime')";
    $pdo -> query($sql);
}catch(PDOException $Exception){
    echo "error". $Exception->getMessage();
}
header("Location: $path");
exit;
?>