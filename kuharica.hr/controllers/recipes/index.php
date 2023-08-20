<?php

use Core\Database;

$config = require base_path('config.php');
$db = new Database($config['database']);

$recipes = $db->query('select * from recept')->get();

view('recipes/index.view.php', [
  'heading' => 'My Recipes',
  'recipes' => $recipes,
]);






