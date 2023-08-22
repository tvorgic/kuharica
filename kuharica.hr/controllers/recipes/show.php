<?php

use Core\App;
use Core\Database;

 $db = App::resolve(Database::class);

$currentUser = 1;


  $recipe = $db->query('select * from recept where sifra = :sifra', [
    'sifra' => $_GET['sifra']
  ])->findOrFAil();





$recipe = $db->query('select * from recept inner join chef on chef.sifra = recept.chef where recept.sifra = :sifra', ['sifra' => $_GET['sifra']])->findOrFail();

authorize($recipe['sifra'] === $currentUser);


view('recipes/show.view.php', [
  'heading' => 'Recipe',
  'recipe' => $recipe
]);





