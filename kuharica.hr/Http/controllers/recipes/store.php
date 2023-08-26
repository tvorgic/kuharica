<?php

use Core\Validator;
use Core\App;
use Core\Database;

$db = App::resolve(Database::class);

$errors = [];

if (! Validator::string($_POST['opis'], 1, 10000)){
 $errors['opis'] = 'Recipe description of no more than 10 000 characters is required';
  } 



  if (! empty($errors)) {

   return view('recipes/create.view.php', [
      'heading' => 'Create Recipe',
      'errors' => $errors
    ]);

  }  
    $db->query('INSERT INTO recept (naziv, opis) VALUES(:naziv, :opis)', [
      'naziv' => $_POST['naziv'],
      'opis' => $_POST['opis']
     ]);



     header('location: /recipes');
     die();
  
