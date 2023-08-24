<?php

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$pass = $_POST['pass'];

$errors = [];
if (!Validator::email($email)) {
    $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($pass)) {
    $errors['pass'] = 'Please provide a valid password.';
}

if (! empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

$user = $db->query('select * from korisnik where email = :email', [
    'email' => $email
])->find();

if ($user) {
    if (password_verify($pass, $user['pass'])) {
        login([
            'email' => $email
        ]);

        header('location: /');
        exit();
    }
}

return view('session/create.view.php', [
    'errors' => [
        'email' => 'No matching account found for that email address and password.'
    ]
]);
