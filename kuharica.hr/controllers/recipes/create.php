<?php

require 'Validator.php';

$config = require 'config.php';
$db = new Database($config['database']);



$heading = 'Create recipe';



if ($_SERVER['REQUEST_METHOD'] === 'POST'){
  $errors = [];

  

  if (! Validator:: string($_POST['opis'], 1, 10000)){
    $errors['opis'] = 'Recipe description of no more than 10 000 characters is required';
  }

 


    if (empty($errors)) {
      $db->query('INSERT INTO recept (naziv, opis) VALUES(:naziv, :opis)', [
        'naziv' => $_POST['naziv'],
        'opis' => $_POST['opis']
      ]);
    }
}





require 'views/recipes/create.view.php';