<!DOCTYPE html>
<html lang='ja'>
    <head>
        <meta charset='utf-8' />
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="../css/style.css">
        <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Kosugi&family=Kosugi+Maru&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
        <title><?=$title?></title>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../template/index.php"><img src="../img/つだぬまいんふぉ.png" width="120" height="70" alt="つだぬまいんふぉ"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="../template/index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        服
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../template/wear.php">情報</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../shop_comment/apparel.php">コメント閲覧</a>
                        <a class="dropdown-item" href="../shop_comment/post.php?table=apparel">コメント追加</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        食材
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../template/buy.php">情報</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../shop_comment/food.php">コメント閲覧</a>
                        <a class="dropdown-item" href="../shop_comment/post.php?table=food">コメント追加</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        雑貨
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="../template/live.php">情報</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="../shop_comment/goods.php">コメント閲覧</a>
                        <a class="dropdown-item" href="../shop_comment/post.php?table=goods">コメント追加</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../template/life.php">暮らす</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../template/safe.php">街の安全</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../template/convenient.php">交通アクセス</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../template/play.php">遊ぶ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../template/user.php">会員登録情報</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="../html/coupon.html">クーポン</a>
                    </li> -->
                </ul>
            </div>
        </nav>
        <div id="wrapper" class="container w-80">
            <div id="page_top"><a href="#"></a></div>