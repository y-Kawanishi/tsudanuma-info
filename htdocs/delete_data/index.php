<head>
    <title><?=$title?>：店削除</title>
</head>
<link rel="stylesheet" href="../css/buy.css">
<div class="box3">
    <p><?=$title?>：店削除</p>
</div>
<ul class="card-link">
<?php
include "../dbconnect/pdo_connect.php";
$sql = "SELECT * FROM $item";
$stmt = $pdo -> query($sql);
foreach($stmt as $row){
?>
    <li><a href="./get.php?item=<?=$item?>&id=<?=$row['id']?>" class="card-link">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paperclip" viewBox="0 0 16 16">
        <path d="M4.5 3a2.5 2.5 0 0 1 5 0v9a1.5 1.5 0 0 1-3 0V5a.5.5 0 0 1 1 0v7a.5.5 0 0 0 1 0V3a1.5 1.5 0 1 0-3 0v9a2.5 2.5 0 0 0 5 0V5a.5.5 0 0 1 1 0v7a3.5 3.5 0 1 1-7 0V3z"/>
        </svg> <?=$row['brand']?> <?=$row['branch']?></a>
    </li>
<?php
}
?>
</ul>