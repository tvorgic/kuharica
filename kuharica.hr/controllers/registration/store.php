<?php

use Core\Validator;
use Core\App;

$email = $_POST['email'];

$password = $_POST['password'];


$errors = [];

if (! Validator::email($email)) {
  $errors['email'] = 'Please provide a valid email address...';
}

if (! Validator::string($password, 6, 255)) {
  $errors['password'] = 'Please provide a password of min 6 characters...';
}

if (! empty($errors)) {
  return view('registration/create.view.php', [
    'errors' => $errors
  ]);
}

$db = App::resolve(Database::class);

$user = $db->query('select * from korisnik where email = :email', [
  'email' => $email
])->find();

if ($user) {
  header('location: /');
  exit();
} else {
  $db->query('INSERT INTO korisnik(email, pass) VALUES(:email, :pass)', [
      'email' => $email,
      'pass' => password_hash($pass, PASSWORD_BCRYPT) 
  ]);

  $_SESSION['user'] = [
      'email' => $email
  ];

  header('location: /');
  exit();
}