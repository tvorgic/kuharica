<?php

use Core\Session;

session_start();

const BASE_PATH = __DIR__ . '/../';


require BASE_PATH . 'Core/functions.php';

spl_autoload_register(function ($class) {

  $class = str_replace('\\', '/', $class);

  require base_path("{$class}.php");
});

require base_path('playground.php');


$router = new \Core\Router();

$routes = require base_path('routes.php');



//parsing -> converting data from one format to another
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];

//NEW SYNTAX
//$method =  $_POST['_method']) ?? $_POST['_method'];



$router->route($uri, $method);

Session::unflash();




