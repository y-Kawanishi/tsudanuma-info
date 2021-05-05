<?php
include("../template/header.php"); 
include "../dbconnect/pdo_connect.php";
$sql = "SELECT shop_id, AVG(star) AS star_avg, brand, branch FROM $table JOIN $item ON $table.shop_id = $item.id GROUP BY shop_id";
$stmt = $pdo -> query($sql);
foreach($stmt as $row){
?>
    <p><?=$row['brand']?> <?=$row['branch']?>：<?=round($row['star_avg'], 3)?></p>
<?php
}
echo $hoge[2];
$sql = "SELECT * FROM $table JOIN $item JOIN user ON $table.shop_id = $item.id And $table.user_id = user.id";
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
            <p><?=$row['datetime']?></p>
            <p><?=$row[17]?>さん</p>
            <a href="#" class="btn btn-primary">Go shop</a>
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