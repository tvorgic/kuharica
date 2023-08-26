<?php

use Core\Authenticator;
use Http\Forms\LoginForm;

$email = $_POST['email'];
$pass = $_POST['pass'];

$form = new LoginForm();

if ($form->validate($email, $pass)) {
    if ((new Authenticator)->attempt($email, $pass)) {
        redirect('/');
    }

    $form->error('email', 'No matching account found for that email address and password.');
}

return view('session/create.view.php', [
    'errors' => $form->errors()
]);