<?php 
libxml_use_internal_errors(true);

function display_errors(){
    $errors = libxml_get_errors();
    foreach ($errors as $error) {
        echo $error->message;
    }
    libxml_clear_errors();
}

function get_xml_file($path){
    $xml = simplexml_load_file($path);

    if ($xml === false){
        echo "Chargement Fichier Echoue!";
        display_errors();
        return;
    }
    return $xml;
}

function get_filenames($type) {
    return glob(__DIR__ . "\..\xml\data\\".$type."\*.xml");
}

function get_all_xml_file($type) {
    $all = array();
    foreach(get_filenames($type) as $filename) {
        $all[] = get_xml_file($filename);
    };
    
    return $all;
}

function validate_xml_string($str, $type) {
    $temp = __DIR__."\..\xml\data\\temp\\temp.xml";
    file_put_contents($temp, $str);
    $xml = new DOMDocument();
    $xml->load($temp);

    if (!$xml->schemaValidate(__DIR__ . "\..\xml\xs_".$type.".xsd")) {
        display_errors();
    }
}

function save_xml_file($str, $type) {
    $last = count(get_filenames($type));
    $filename = ($last+1).".xml";
    file_put_contents(__DIR__."\..\xml\data\\".$type."\\".$filename, $str);
}