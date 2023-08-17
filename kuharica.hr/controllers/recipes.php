<?php

$config = require 'config.php';
$db = new Database($config['database']);



$heading = 'Recipes';



$recipes = $db->query('select * from recept')->get();

require 'views/recipes.view.php';




