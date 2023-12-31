<?php

namespace Core;
 
class Authenticator
{
    public function attempt($email, $pass)
    {
        $user = App::resolve(Database::class)
            ->query('select * from korisnik where email = :email', [
            'email' => $email
        ])->find();

        if ($user) {
            if (password_verify($pass, $user['pass'])) {
                $this->login([
                    'email' => $email
                ]);

                return true;
            }
        }

        return false;
    }

    public static function login($user)
    {
        $_SESSION['user'] = [
            'email' => $user['email']
        ];

        session_regenerate_id(true);
    }

    public static function logout()
    {
        Session::destroy();

    }
}