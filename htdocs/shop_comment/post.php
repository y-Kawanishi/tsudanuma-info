<?php
include("../account/loginstatus.php");
$table = $_GET['table']."_comments";
$item = $_GET['table'];
switch ($_GET['table']) {
    case 'food':
        $title = '食材コメント追加';
        break;
    case 'apparel':
        $title = '服コメント追加';
        break;
    case 'goods':
        $title = '雑貨コメント追加';
        break;
}
include("../template/header.php");
include "../dbconnect/pdo_connect.php";
$sql = "SELECT * FROM $item";
$stmt = $pdo -> query($sql);
?>
<div id="wrapper" class="container w-50">
    <div id="page_top"><a href="#"></a></div>
    <section class="section">
    <h1 class="h3 mb-3 fw-normal"><?=$title?></h1>
        <form class="was-validated" method="POST" action="../shop_comment/push.php">
            <input type="hidden" name="user_id" class="form-control" value="<?=$_SESSION['id']?>" />
            <input type="hidden" name="table" class="form-control" value="<?=$table?>" />
            <input type="hidden" name="item" class="form-control" value="<?=$item?>" />
            <label for="shopID">店舗名</label>
            <select id="shopID" name="shop_id" class="custom-select">
                <option disabled>店を選択してください</option>
<?php
foreach($stmt as $row){
?>
                <option value="<?=$row['id']?>"><?=$row['brand']." ".$row['branch']?></option>
<?php
}
?>
            </select>
        <!-- , , , , datetime -->
        <div id="app">
            <label for="formControlRange">★{{ star }}</label>
            <input type="range" v-model="star" class="form-control-range" id="formControlRange" name="star" min="0" max="5">
        </div>
            <label for="validationComment">コメント</label>
            <textarea class="form-control is-invalid" id="validationComment" name="comment" rows="4" placeholder="Required example Comment" required></textarea>
            <button type="submit" class="btn btn-primary">追加する</button>
        </form>
    </section>
</div>
<script>
new Vue({
    el: "#app",
    data: {
        star: 3
    }
})
</script>
<?php
include("../template/footer.php");
?>