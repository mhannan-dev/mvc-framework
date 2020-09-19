<?php include "inc/header.php"; ?>
<?php
include './system/libs/Main.php';
include './system/libs/DController.php';

$url = $_GET['url'];
$url = rtrim($url,'/');
$url = explode("/", $url);

//Loading Controller dynamically
include './app/controllers/'.$url[0].'.php';

$ctlr = new $url[0]();
$string = str_replace('"', "", $url[1]);
$ctlr->$string($url[2]);



?>

