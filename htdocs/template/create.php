<?php
session_start();
// $_SESSION = array();
if( isset($_SESSION['err_msg']) ){
    echo $_SESSION['err_msg'];
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
        <title>新規会員登録</title>
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
        <div id="wrapper" class="container w-50">
        <div id="page_top"><a href="#"></a></div>
            <section class="section">
                <h1>新規会員登録</h1>
                <form id="entry" method="POST" action="./check.php">
                    <div class="mb-3">
                        <label for="exampleInputName1" class="form-label">お名前<span class="must"></span></label>
                        <input type="text" name="name" class="form-control" id="exampleInputName1" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">メールアドレス<span class="must"></span></label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" required aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">パスワード<span class="must"></span></label>
                        <input type="password" name="pass" class="form-control" id="exampleInputPassword1" required>
                        <div id="PasswordHelp" class="form-text">※半角数字を4桁で入力してください。</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">パスワード(確認)<span class="must"></span></label>
                        <input type="password" name="pass2" class="form-control" id="exampleInputPassword2" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputSex" class="form">生年月日<span class="must"></span></label><br>
                        年<input type="number" name="year" class="form-control"　id="exampleInputSex1" required>
                        月<input type="number" name="month" class="form-control"　id="exampleInputSex2" required>
                        日<input type="number" name="day" class="form-control"　id="exampleInputSex3" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputGender" class="form-label">性別<span class="must"></span></label><br>
                        <input type="radio" name="gender" class="form-label" id="exampleInputSex1" value="男性" required> 男性 
                        <input type="radio" name="gender" class="form-label" id="exampleInputSex2" value="女性"> 女性 
                        <input type="radio" name="gender" class="form-label" id="exampleInputSex3" value="その他"> その他 
                    </div>
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