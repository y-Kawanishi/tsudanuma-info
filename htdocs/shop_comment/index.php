<?php
include "../dbconnect/pdo_connect.php";
$sql = "SELECT * FROM $table JOIN $item JOIN user ON $table.shop_id = $item.id And $table.user_id = user.id";
$stmt = $pdo -> query($sql);
foreach($stmt as $row){
?>
    <p>No.<?=$row['num']?></p>
    <p>ID:<?=$row['brand']?> <?=$row['branch']?></p>
    <p>コメント：<?=$row['comment']?></p>
    <p><?php
        for($i = 0; $i < $row['star']; $i++){
            echo "★";
        }
    ?></p>
    <p><?=$row[17]?>さん</p>
    <p><?=$row['datetime']?></p>
<?php
// print_r($row);
}
?>