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
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <!-- css -->
        <link rel="stylesheet" href="../css/style.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- font -->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kosugi&family=Kosugi+Maru&display=swap" rel="stylesheet">
        <title>会員登録情報</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="./index.php"><img src="../img/つだぬまいんふぉ.png" width="120" height="70" alt="つだぬまいんふぉ"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./wear.php">服</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./buy.php">食材</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./live.php">雑貨</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./life.php">暮らす</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./safe.php">街の安全</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./convenient.php">交通アクセス</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./play.php">遊ぶ</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="./user.php">会員登録情報</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../html/coupon.html">クーポン</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="wrapper" class="container w-50">
            <div id="page_top"><a href="#"></a></div>
            <h1>会員登録情報</h1>
            <p>お名前：<h4><?=$name?> 様</h4></p>
            <p>メールアドレス：<h4><?=$email?></h4></p>
            <p>パスワード：<h4>****</h4></p>
            <p>生年月日：<h4><?=$year?>年<?=$month?>月<?=$day?>日</h4></p>
            <p>性別：<h4><?=$gender?></h4></p>
        </div>
        <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-outline-primary" type="button"><a href="../html/logout.html">ログアウト</a></button>
        </div>
        </div>
        <div id="footer-wrapper" class="container w100">
            <footer>
                <div class="footer-wrap">
                    <div class="footer-top">
                        <h5>Top</h5>
                        <ul class="footer1">
                            <li><a href="./index.php">トップページ</a></li>
                        </ul>
                    </div>
                    <div class="footer-wear">
                        <h5>Wear</h5>
                        <ul class="footer6">
                            <li><a href="./wear.php">服</a></li>
                        </ul>
                    </div>
                    <div class="footer-buy">
                        <h5>Buy</h5>
                        <ul class="footer2">
                            <li><a href="./buy.php">食材</a></li>
                        </ul>
                    </div>
                    <div class="footer-live">
                        <h5>Interior</h5>
                        <ul class="footer7">
                            <li><a href="./live.php">雑貨</a></li>
                        </ul>
                    </div>
                    <div class="footer-life">
                        <h5>Live</h5>
                        <ul class="footer8">
                            <li><a href="./life.php">暮らす</a></li>
                        </ul>
                    </div>
                    <div class="footer-safe">
                        <h5>Safe</h5>
                        <ul class="footer3">
                            <li><a href="./safe.php">街の安全</a></li>
                        </ul>
                    </div>
                    <div class="footer-convenient">
                        <h5>Convenient</h5>
                        <ul class="footer4">
                            <li><a href="./convenient.php">交通アクセス</a></li>
                        </ul>
                    </div>
                    <div class="footer-play">
                        <h5>Play</h5>
                        <ul class="footer5">
                            <li><a href="./play.php">遊ぶ</a></li>
                        </ul>
                    </div>
                </div>　　
                <p id="copy">
                    &copy;Copy Rights . 2020-2021 つだぬまいんふぉ . All Rights Reserved
                    <img src="../img/つだぬまいんふぉ.png" width="80" height="50" alt="つだぬまいんふぉ">
                </p>
            </footer>
        </div>
    </body>
</html>