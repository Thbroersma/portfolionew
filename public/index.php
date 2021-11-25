<?php
//require '../Modules/;


$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "Thierry zijn portfolio";
$titleSuffix = "";


switch ($params[1]) {
    case 'home.php':
        $titleSuffix = ' | Home';
        include_once "../Templates/home.php";
        break;
    case 'mot.php':
        $titleSuffix = ' | Motivation';
        include_once "../Templates/mot.php";
    break;

    case 'over.php':
        $titleSuffix = ' | About';
        include_once "../Templates/over.php";
        
        break;
    case 'image.php':
        $titleSuffix = ' | Fun';
        include_once "../Templates/image.php";

        break;
    case 'game':

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
        
        include_once "../Templates/home.php";


}

function getTitle() {
    global $title, $titleSuffix;
    return $title . $titleSuffix;
}
?>