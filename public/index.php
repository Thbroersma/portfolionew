<?php
//require '../Modules/;


$request = $_SERVER['REQUEST_URI'];
$params = explode("/", $request);
$title = "Thierry zijn portfolio";
$titleSuffix = "";


switch ($params[1]) {
    case 'home.php':
        $titleSuffix = ' | Home';
        include_once "../Templates/hometoo.php";
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
    case 'game.php':
        $titleSuffix = ' | Game';
        include_once "../Templates/Pacman/index.php";
        break;
    case 'level1':
        include_once "../Templates/Pacman/players1.php";
        break;
    case 'level2':
        include_once "../Templates/Pacman/players2.php";
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