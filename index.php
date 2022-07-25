<?php
include_once("controllers/handler.php");

$uri = explode('/', $_SERVER["REQUEST_URI"]);
$sz = count($uri);
$page = strtolower($uri[$sz - 1]);

//ROUTING
switch($page){
    case 'home':
    case 'admin':
        getpage($page);
        break;
    case 'examen':
    case 'resto':
    case 'cinema':
        get($page);
        break;
    default:
        header("Location: /xml_app/home");
}
