<?php include "inc/header.php"; ?>
<?php
include './system/libs/Main.php';
include './system/libs/DController.php';

$url = isset($_GET['url']) ? $_GET['url'] : NULL;
if($url != NULL){
    $url = rtrim($url, '/');
    $url = explode("/", filter_var($url, FILTER_SANITIZE_URL));
}else {
    unset($url);
}
//Loading Controller dynamically
if(isset($url[0])){
    include './app/controllers/'.$url[0].'.php';
    $ctlr = new $url[0]();
    if(isset($url[2])){
        $ctlr->$url[1]($url[2]);
    }
    else{
        if(isset($url[1])){
            $ctlr->$url[1]();    
        }
        else{  
        }
    }
}else{  
    include './app/controllers/IndexController.php';
    $ctlr = new IndexController();
    $ctlr->home();
}




?>

