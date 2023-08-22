<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$currentUser = 1;

// find the corresponding note
$recipe = $db->query('select * from recept where sifra = :sifra', [
    'sifra' => $_POST['sifra']
])->findOrFail();

// authorize that the current user can edit the note
authorize($recipe['sifra'] === $currentUser);

// validate the form
$errors = [];

if (! Validator::string($_POST['opis'], 1, 10000)) {
    $errors['opis'] = 'Description of no more than 10,000 characters is required.';
}

// if no validation errors, update the record in the notes database table.
if (count($errors)) {
    return view('recipes/edit.view.php', [
        'heading' => 'Edit Recipe',
        'errors' => $errors,
        'recipe' => $recipe
    ]);
}

$db->query('update recept set opis = :opis where sifra = :sifra', [
    'sifra' => $_POST['sifra'],
    'opis' => $_POST['opis']
]);

// redirect the user
header('location: /recipes');
die();

