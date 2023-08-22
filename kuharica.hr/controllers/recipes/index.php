<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$recipes = $db->query('select * from recept where sifra = 1')->get();

view('recipes/index.view.php', [
  'heading' => 'My Recipes',
  'recipes' => $recipes,
]);






