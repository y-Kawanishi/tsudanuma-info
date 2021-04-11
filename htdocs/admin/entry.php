<?php
    require_once("../account/loginstatus.php");
    include "../dbconnect/pdo_connect.php";
    $sql = "SELECT * FROM user WHERE id = {$_SESSION['id']}";
    $stmt = $pdo -> query($sql);
    foreach($stmt as $row){
        $name = $row['name'];
        $status = $row['admin'];
    }
    if ($status == 1){
        $_SESSION['admin'] = TRUE;
        header('Location: ./index.php');
        exit;
    }
    $title = "管理者登録";
    include("../template/header.php");
    // var_dump($_SESSION);
?>
<div id="wrapper" class="container w-50">
<?php
    if (isset($_SESSION['err_msg3'])==FALSE){
        $err_msg3 = "";
    } elseif ( $_SESSION['err_msg3'] == FALSE ){
        $err_msg3 = "管理者パスワードが違います。";
?>
        <div class="alert alert-danger" role="alert"><?=$err_msg3?></div>
<?php
    }
?>
    <div id="page_top"><a href="#"></a></div>
    <section class="section">
        <form id="entry" method="POST" action="./post.php">
            <input type="hidden" name="id" value="<?=$_SESSION['id']?>">
            <img class="mb-4" src="../img/つだぬまいんふぉ2.png" alt="146" width="" height="72">
            <h1 class="h3 mb-3 fw-normal"><?=$title?>画面</h1>
            <p><?=$name?>さんを管理者に登録致します。</p><p>管理者パスワードを入力して下さい。</p>
            <label for="exampleInputPassword1" class="form-label"></label>
            <input type="password" name="pass" id="exampleInputPassword1" class="form-control" placeholder="Password" required>
            <button type="submit" class="btn btn-primary"><?=$title?></button>
        </form>
    </section>
</div>
<?php
    unset($_SESSION['err_msg3']);
    include("../template/footer.php"); 
?>