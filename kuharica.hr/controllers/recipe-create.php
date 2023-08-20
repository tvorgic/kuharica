<?php

$config = require 'config.php';
$db = new Database($config['database']);



$heading = 'Create recipe';



if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $errors = [];

  if (strlen($_POST['opis']) === 0){
    $errors['opis'] = 'Recipe description is required';
  }

  if (strlen($_POST['opis']) > 10000){
    $errors['opis'] = 'Recipe description is too long';
  }


    if (empty($errors)) {
      $db->query('INSERT INTO recept (naziv, opis) VALUES(:naziv, :opis)', [
        'naziv' => $_POST['naziv'],
        'opis' => $_POST['opis']
      ]);
    }
}





require 'views/recipe-create.view.php';