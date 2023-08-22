<?php

const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {

  $class = str_replace('\\', '/', $class);

  require base_path("{$class}.php");
});


$router = new \Core\Router();

$routes = require base_path('routes.php');
//parsing -> converting data from one format to another
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];



$router->route($uri);




