<?php
//require '../Modules/;


$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "Thierry zijn portfolio";
$titleSuffix = "";


switch ($params[1]) {
    case 'home':

        break;
    case 'motivation':
       
    case 'over':
        
        break;
    case 'image':

        break;
    case 'uitloggen':
    
        break;
    case 'admin':
        
        break;
    case 'inloggen':
        
        break;
    case 'account':
        
        break;
    default:
    
        $titleSuffix = ' | Home';
        
        include_once "../Templates/index.html";


}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
?>