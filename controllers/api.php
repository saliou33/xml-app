<?php
require_once("lib.php");

if(isset($_REQUEST["data"])) {
    $post = $_REQUEST['data'];
    
    switch($_REQUEST["for"]){
        case "validate":
            validate_xml_string($post["code"], $post["type"]);
            break;
        case "save":
            save_xml_file($post["code"], $post["type"]);
            echo "File Saved";
            break;
        default:
            echo "Empty";
    }
}