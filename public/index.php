<?php

session_start();

require_once '../vendor/autoload.php'; // include autoload om bepaalde folders/files automatisch in te laden

use RedBeanPHP\R as R;

R::setup('mysql:host=localhost;dbname=vaversa', 'bit_academy', 'bit_academy'); // database connectie

$route = $_GET['params']; // pakt de url paramaters
$routeArr = explode("/", $route); // hakt de url parameters in stukken

$check = $routeArr[0] . "Controller"; // maakt automatisch de controller aan

if (!class_exists(ucfirst($check))) { // kijkt of de class bestaat die word aangeroepen via de url
    error();
} else {
    $controller = new $check; // roept controller aan die bij de class hoort

    if (isset($routeArr[1])) {
        if (!method_exists(ucfirst($check), strtolower($routeArr[1]))) { // kijkt of de method bestaat die word aangeroepen via de url
            error();
        } else {
            $method = $routeArr[1];
            $controller->$method(); // roept de method aan die bij de class hoort
        }
    } else {
        $controller->show();
    }
}
