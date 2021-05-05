<?php
include("../template/header.php"); 
include "../dbconnect/pdo_connect.php";
?>
<link rel="stylesheet" href="../css/shop-comment.css">
<table class="table table-hover">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">名前</th>
        <th scope="col">コメント総数</th>
        <th scope="col">平均評価</th>
    </tr>
    </thead>
    <tbody>
<?php
$sql = "SELECT shop_id, AVG(star) AS star_avg, brand, branch, COUNT(`shop_id`) AS `count` FROM $table JOIN $item ON $table.shop_id = $item.id GROUP BY shop_id";
$stmt = $pdo -> query($sql);
foreach($stmt as $row){
?>
    <tr>
    <th scope="row"><?=$row['shop_id']?></th>
      <td><?=$row['brand']?> <?=$row['branch']?> &rsaquo;&rsaquo; <a href="<?=$item?>.php?shop_id=<?=$row['shop_id']?>">評価</a></td>
      <td><?=$row['count']?>件</td>
      <td>★<?=round($row['star_avg'], 3)?></td>
    </tr>
<?php
}
?>
    </tbody>
</table>
<?php
echo $hoge[2];
if ($_GET['shop_id'] == NULL) {
    $sql = "SELECT brand, branch, shop_id, star, comment, datetime, gender, year FROM $table JOIN $item JOIN user ON $table.shop_id = $item.id And $table.user_id = user.id";
} else {
    $sql = "SELECT brand, branch, shop_id, star, comment, datetime, gender, year FROM $table JOIN $item JOIN user ON $table.shop_id = $item.id And $table.user_id = user.id WHERE $table.shop_id = {$_GET['shop_id']}";

}
$stmt = $pdo -> query($sql);
foreach($stmt as $row){
?>
    <div class="card w-25 shop">
        <h5 class="card-header"><?=$row['brand']?> <?=$row['branch']?></h5>
        <div class="card-body">
            <h5 class="card-title"><?php
                for($i = 0; $i < $row['star']; $i++){
                    echo "★";
                }
                for($i = $row['star']; $i < 5; $i++){
                    echo "☆";
                }
            ?></h5>
            <p class="card-text"><?=$row['comment']?></p>
            <p><?=date("Y年m月d日 H時i分",strtotime($row['datetime']))?></p>
            <p><?=round(date('Y') - $row['year'], -1)?>代 <?=$row['gender']?></p>
            <a href="../template/<?=$file?>.php#<?=$row['shop_id']?>" class="btn btn-primary">Go shop</a>
        </div>
    </div>
    <style>
    .shop{
        text-align: left;
        float: left;
        margin: auto;
    }
    </style>
<?php
// print_r($row);
}
include("../template/footer.php");
?>