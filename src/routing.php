<?php
require 'Controllers/ArticleController.php';
//var_dump(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
$pathURL = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$articleController = new ArticleController();

if ($pathURL === '/home') {
    $articleController->home();
} else if ($pathURL === '/show') {
    $articleController->show($_GET['id']);
} else if ($pathURL === '/edit') {
    $articleController->edit();
} else if ($pathURL === '/delete') {
    $articleController->delete();
}

