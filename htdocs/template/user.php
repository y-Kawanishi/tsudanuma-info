<?php
  require_once("../account/loginstatus.php");

$id = $_SESSION['id'];
include "../dbconnect/pdo_connect.php";

$sql = "SELECT * FROM user WHERE id = '$id' ";
$stmt = $pdo -> query($sql);

foreach($stmt as $row){
    $name = $row["name"];
    $email = $row["email"];
    $year = $row["year"];
    $month = $row["month"];
    $day = $row["day"];
    $gender = $row["gender"];
}

$title = "会員登録情報";
require_once("../account/loginstatus.php");
include("./header.php"); 
?>
<link rel="stylesheet" href="../css/play.css">
<div class="box3">
    <p>会員登録情報</p>
</div>
<p>お名前：<h4><?=$name?> 様</h4></p>
<p>メールアドレス：<h4><?=$email?></h4></p>
<p>パスワード：<h4>****</h4></p>
<p>生年月日：<h4><?=$year?>年<?=$month?>月<?=$day?>日</h4></p>
<p>性別：<h4><?=$gender?></h4></p>
</div>
<div class="d-grid gap-2 col-6 mx-auto">
    <button class="btn btn-outline-primary" type="button"><a href="../html/logout.html">ログアウト</a></button>
</div>
<?php include("./footer.php"); ?>