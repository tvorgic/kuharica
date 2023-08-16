<?php


$config = require 'config.php';

$db = new Database($config['database']);

$heading = 'Recipe';



$recipe = $db->query('select * from recept where sifra = :sifra', ['sifra' => $_GET['sifra']])->fetch();

require 'views/recipe.view.php';




