<?php
    require_once("./loginstatus.php");
    include("../template/header.php");
    $linklist = array(
        array("name" => "服の店追加", "comment" => "アパレル系の店の追加処理を行えます。", "path" => "../insert_data/apparel.php"), 
        array("name" => "服の店削除・編集", "comment" => "登録したアパレル系店舗の編集や削除を行えます。", "path" => "../delete_data/apparel.php"), 
        array("name" => "食材の店追加", "comment" => "スーパーなど食料品の店の追加処理を行えます。", "path" => "../insert_data/food.php"), 
        array("name" => "食材の店削除・編集", "comment" => "登録した食料品の店の編集や削除を行えます。", "path" => "../delete_data/food.php"), 
        array("name" => "雑貨の店追加", "comment" => "雑貨の店の追加処理を行えます。", "path" => "../insert_data/goods.php"), 
        array("name" => "雑貨の店削除・編集", "comment" => "登録した雑貨の店の編集や削除を行えます。", "path" => "../delete_data/goods.php")
    );
?>
<div class="row">
<?php
    foreach ($linklist as $key => $value) {
?>
  <div class="col-sm-6 mb-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title"><?=$value['name']?></h5>
        <p class="card-text"><?=$value['comment']?></p>
        <a href="<?=$value['path']?>" class="btn btn-primary">詳細</a>
      </div>
    </div>
  </div>
<?php
    }
?>
</div>
<?php
    include("../template/footer.php"); 
?>