<?php
session_start();

$name = $_POST["name"];
$email = $_POST["email"];
$pass = $_POST["pass"];
$pass2 = $_POST["pass2"];
$year = $_POST["year"];
$month = $_POST["month"];
$day = $_POST["day"];
$gender = $_POST["gender"];

$_SESSION["name"] = $name;
$_SESSION["email"] = $email;
$_SESSION["pass"] = $pass;
$_SESSION["pass2"] = $pass2;
$_SESSION["year"] = $year;
$_SESSION["month"] = $month;
$_SESSION["day"] = $day;
$_SESSION["gender"] = $gender;


$_SESSION['err_msg'] = '';

if($pass != $pass2){
    $_SESSION['err_msg'] .= "同じパスワードを入力して下さい。";
    header('Location: ./create.php');
    exit;
}elseif(strlen($pass) < 4){
    $_SESSION['err_msg'] .= "パスワードは4桁以上で入力して下さい。";
    header('Location: ./create.php');
    exit;
}else{
    $_SESSION['system_msg'] = "会員登録が完了しました。";
}
?>

<!DOCTYPE html>
<html lang='ja'>
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
        <title>新規会員登録</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php"><img src="../img/つだぬまいんふぉ.png" width="120" height="70" alt="つだぬまいんふぉ"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../html/index.html">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../html/wear.html">服</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../html/buy.html">食材</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../html/live.html">雑貨</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../html/life.html">暮らす</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../html/safe.html">街の安全</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../html/convenient.html">交通アクセス</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../html/play.html">遊ぶ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">アンケート</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div id="wrapper" class="container w-50">
            <div id="page_top"><a href="#"></a></div>
            <h1>新規会員登録 確認画面</h1>
            <h5 class="a">※まだ送信されていません</h5>
            <p>お名前：<h4><?=$name?> 様</h4></p>
            <p>メールアドレス：<h4><?=$email?></h4></p>
            <p>パスワード：<h4>****</h4></p>
            <p>生年月日：<h4><?=$year?>年<?=$month?>月<?=$day?>日</h4></p>
            <p>性別：<h4><?=$gender?></h4></p>
            <h5 class="a">上記の内容で宜しければ確定ボタンを押してください。</h5>
            <form id="entry" method="POST" action="../account/push.php">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">確定</button>
                </div>
            </form>
        </div>
        <div id="footer-wrapper" class="container w100">
            <footer>
                <div class="footer-wrap">
                    <div class="footer-top">
                        <h5>Top</h5>
                        <ul class="footer1">
                            <li><a href="../html/index.html">トップページ</a></li>
                        </ul>
                    </div>
                    <div class="footer-wear">
                        <h5>Wear</h5>
                        <ul class="footer6">
                            <li><a href="../html/wear.html">服</a></li>
                        </ul>
                    </div>
                    <div class="footer-buy">
                        <h5>Buy</h5>
                        <ul class="footer2">
                            <li><a href="./buy.html">食材</a></li>
                        </ul>
                    </div>
                    <div class="footer-live">
                        <h5>Interior</h5>
                        <ul class="footer7">
                            <li><a href="./live.html">雑貨</a></li>
                        </ul>
                    </div>
                    <div class="footer-life">
                        <h5>Live</h5>
                        <ul class="footer8">
                            <li><a href="./life.html">暮らす</a></li>
                        </ul>
                    </div>
                    <div class="footer-safe">
                        <h5>Safe</h5>
                        <ul class="footer3">
                            <li><a href="./safe.html">街の安全</a></li>
                        </ul>
                    </div>
                    <div class="footer-convenient">
                        <h5>Convenient</h5>
                        <ul class="footer4">
                            <li><a href="./convenient.html">交通アクセス</a></li>
                        </ul>
                    </div>
                    <div class="footer-play">
                        <h5>Play</h5>
                        <ul class="footer5">
                            <li><a href="./play.html">遊ぶ</a></li>
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