<?php
session_start();

if( isset($_SESSION['err_msg']) ){
    $err_msg = $_SESSION['err_msg'];
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8" />
        <!-- css -->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">
        <!-- font -->
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kosugi&family=Kosugi+Maru&display=swap" rel="stylesheet">
        <title>新規会員登録</title>

        <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }
        
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
        </style>

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../html/index.html"><img src="../img/つだぬまいんふぉ.png" width="120" height="70" alt="つだぬまいんふぉ"></a>
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
                    <li class="nav-item active">
                        <a class="nav-link" href="../template/create.php">新規会員登録</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../template/login.php">ログイン</a>
                    </li>
                </ul>
            </div>
        </nav>
<?php
    if ( isset($err_msg) ){
?>
        <div class="alert alert-danger" role="alert"><?=$err_msg?></div>
<?php
    }
?>
        <div id="wrapper" class="container w-50">
        <div id="page_top"><a href="#"></a></div>
            <section class="section">
                <form id="entry" method="POST" action="./check.php">
                    <img class="mb-4" src="../img/つだぬまいんふぉ2.png" alt="" width="146" height="72">
                    <h1 class="h3 mb-3 fw-normal">新規会員登録</h1>
                    <!-- name -->
                    <label for="exampleInputName1" class="form-label"><span class="must"></span></label>
                    <input type="text" name="name" id="exampleInputName1" class="form-control" placeholder="Name" required autofocus>
                    <!-- email -->
                    <label for="exampleInputEmail1" class="form-label"><span class="must"></span></label>
                    <input type="email" name="email" id="exampleInputEmail1" class="form-control" placeholder="Email address" required autofocus>
                    <!-- pass -->
                    <label for="exampleInputPassword1" class="form-label"><span class="must"></span></label>
                    <input type="password" name="pass" id="exampleInputPassword1" class="form-control" placeholder="Password" required autofocus>
                    <div id="PasswordHelp" class="form-text">※4桁以上で入力してください。</div>
                    <label for="exampleInputPassword2" class="form-label"><span class="must"></span></label>
                    <input type="password" name="pass2" id="exampleInputPassword2" class="form-control" placeholder="Password" required autofocus>
                    <div id="PasswordHelp" class="form-text">※同じパスワードを入力してください。</div>
                    <!-- 生年月日 -->
                    <label for="exampleInputBirth" class="form"><span class="must"></span></label>
                    年<input type="number" name="year" id="exampleInputBirth1" class="form-control" placeholder="Year" required autofocus>
                    月<input type="number" name="month" id="exampleInputBirth2" class="form-control" placeholder="Month" required autofocus>
                    日<input type="number" name="day" id="exampleInputBirth3" class="form-control" placeholder="Day" required autofocus>
                    <!-- 性別 -->
                    <label for="exampleInputGender" class="form-label"><span class="must"></span></label><br>
                    <input type="radio" name="gender" id="exampleInputGender1" class="form-label" value="男性" required> 男性
                    <input type="radio" name="gender" id="exampleInputGender2" class="form-label" value="女性"> 女性
                    <input type="radio" name="gender" id="exampleInputGender3" class="form-label" value="その他"> その他
                    <!-- 確認画面へ -->
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button type="submit" class="btn btn-primary">確認画面へ</button>
                    </div>
                </form>
            </section>
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
                            <li><a href="../html/buy.html">食材</a></li>
                        </ul>
                    </div>
                    <div class="footer-live">
                        <h5>Interior</h5>
                        <ul class="footer7">
                            <li><a href="../html/live.html">雑貨</a></li>
                        </ul>
                    </div>
                    <div class="footer-life">
                        <h5>Life</h5>
                        <ul class="footer8">
                            <li><a href="../html/life.html">暮らす</a></li>
                        </ul>
                    </div>
                    <div class="footer-safe">
                        <h5>Safe</h5>
                        <ul class="footer3">
                            <li><a href="../html/safe.html">街の安全</a></li>
                        </ul>
                    </div>
                    <div class="footer-convenient">
                        <h5>Convenient</h5>
                        <ul class="footer4">
                            <li><a href="../html/convenient.html">交通アクセス</a></li>
                        </ul>
                    </div>
                    <div class="footer-play">
                        <h5>Play</h5>
                        <ul class="footer5">
                            <li><a href="../html/play.html">遊ぶ</a></li>
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