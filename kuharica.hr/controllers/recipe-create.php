<?php

$config = require 'config.php';
$db = new Database($config['database']);



$heading = 'Create recipe';

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $db->query('INSERT INTO recept (naziv, opis) VALUES(:naziv, :opis)', [
    'naziv' => $_POST['naziv'],
    'opis' => $_POST['opis']
  ]);
}



require 'views/recipe-create.view.php';