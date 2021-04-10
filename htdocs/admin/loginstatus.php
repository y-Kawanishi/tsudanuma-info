<?php
require_once("../account/loginstatus.php");
if(isset($_SESSION["admin"])==FALSE){
    header('Location: ../admin/entry.php');
    exit;
}