<?php


$config = require 'config.php';

$db = new Database($config['database']);

$heading = 'Recipe';



$recipe = $db->query('select * from recept where sifra = :sifra', ['sifra' => $_GET['sifra']])->fetch();

$currentUser = 2;

if(! $recipe) {
  abort();
}

if ($recipe ['sifra'] !== $currentUser) {
  abort(Response::FORBIDDEN);
}

require 'views/recipe.view.php';




