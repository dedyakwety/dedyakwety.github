<?php
/*require "../vendor/composer/autoload.php";
require "../vendor/altorouter/altorouter/Altorouter.php";
$router = new Altorouter();
$router->map('GET', '/', function(){
    require_once '../Public/Pages/homePage.php';
});
var_dump($router);*/
if($_SERVER["REQUEST_URI"] === "/"){
    require "Public/Pages/homePage.php";
} elseif($_SERVER["REQUEST_URI"] === "/mon-cv")
{
    require "Public/Pages/curriculumVitae.php";
}
?>