<?php

use Core\Database;


$config = require base_path('config.php');
$db = new Database($config['database']);


$currentUser = 3;


  $recipe = $db->query('select * from recept where sifra = :sifra', [
    'sifra' => $_GET['sifra']
  ])->findOrFAil();





$recipe = $db->query('select * from recept inner join chef on chef.sifra = recept.chef where recept.sifra = :sifra', ['sifra' => $_GET['sifra']])->findOrFail();

authorize($recipe['sifra'] === $currentUser);


view('recipes/show.view.php', [
  'heading' => 'Recipe',
  'recipe' => $recipe
]);





