<?php
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);
$recipes = $db->query('select * from recept')->get();

view('recipes/index.view.php', [
  'heading' => 'My Recipes',
  'recipes' => $recipes,
]);






