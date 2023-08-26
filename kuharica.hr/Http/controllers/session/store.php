<?php

use Core\App;
use Core\Database;
use Core\Validator;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);

$email = $_POST['email'];
$pass = $_POST['pass'];

$form = new LoginForm();

if (! $form->validate($email, $pass)) {
    return view('session/create.view.php', [
        'errors' => $form->errors()
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
