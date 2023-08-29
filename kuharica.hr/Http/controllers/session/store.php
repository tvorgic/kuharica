<?php

use Core\Authenticator;
use Http\Forms\LoginForm;


$email = $_POST['email'];
$pass = $_POST['pass'];



$form = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'pass' => $_POST['pass']
]);


$signedIn = (new Authenticator)->attempt($attributes['email'], $attributes['pass']);

if (! $signedIn) {
    $form->error('email', 'No matching account found for that email address and password.')->throw();
}
 
 





redirect('/');  

    




