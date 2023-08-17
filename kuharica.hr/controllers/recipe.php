<?php



$config = require 'config.php';

$db = new Database($config['database']);

$heading = 'Recipe';


$currentUser = 2;



$recipe = $db->query('select * from recept where sifra = :sifra', ['sifra' => $_GET['sifra']])->findOrFail();

authorize($recipe['sifra'] === $currentUser);





if ($recipe ['sifra'] !== $currentUser) {
  abort(Response::FORBIDDEN);
}

require 'views/recipe.view.php';




