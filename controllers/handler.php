<?php
require_once("lib.php");

function getpage($page, $data=null){
    require_once("views/header.php");
    require_once("views/".$page.".php");
    require_once("views/footer.php");
    
}

function get($page) {
    $data = get_all_xml_file($page);
    getpage($page, $data);
}