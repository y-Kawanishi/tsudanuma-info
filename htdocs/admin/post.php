<?php
    session_start();

    if ($_POST['pass'] === "password"){
        $_SESSION['err_msg3'] = TRUE;
        include "../dbconnect/pdo_connect.php";
        adminSet($pdo);
    } else {
        $_SESSION['err_msg3'] = FALSE;
    }
    header('Location: ./entry.php');
    exit;


function adminSet($pdo){
    $sql = "UPDATE user SET admin = :admin WHERE id = :id";
    $stmt = $pdo->prepare($sql);
    $params = array(':admin' => 1, ':id' => $_POST["id"]);
    $stmt->execute($params);
}

?>