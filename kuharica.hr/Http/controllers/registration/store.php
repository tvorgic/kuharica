<?php

use Core\Validator;
use Core\App;
use Core\Database;
use Core\Authenticator;

$db = App::resolve(Database::class);


$email = $_POST['email'];
$pass = $_POST['pass'];


$errors = [];

if (! Validator::email($email)) {
  $errors['email'] = 'Please provide a valid email address...';
}

if (! Validator::string($pass, 6, 255)) {
  $errors['pass'] = 'Please provide a password of min 6 characters...';
}

if (! empty($errors)) {
  return view('registration/create.view.php', [
    'errors' => $errors
  ]);
}


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

  Authenticator::login($user);

  header('location: /');
  exit();
}