<?php

use Core\Authenticator;
use Http\Forms\LoginForm;
use Core\Session;

$email = $_POST['email'];
$pass = $_POST['pass'];

$form = new LoginForm();

if ($form->validate($email, $pass)) {
    if ((new Authenticator)->attempt($email, $pass)) {
        redirect('/');
    }

    $form->error('email', 'No matching account found for that email address and password.');
}


Session::flash('errors', $form->errors());

return redirect('/login');