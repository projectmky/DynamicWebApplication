<?php

namespace App;

class Authentication
{
    public static function login($user){
        session_regenerate_id(true);
        $_SESSION['user_id'] = $user->ID;
        $_SESSION['user_email'] = $user->email;
    }

    public static function logout(){
        // Unset all of the session variables
        $_SESSION = [];

        // Delete the session cookie
        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();

            setcookie(
                session_name(),
                '',
                time() - 42000,
                $params['path'],
                $params['domain'],
                $params['secure'],
                $params['httponly']
            );
        }

        // Finally destroy the session
        session_destroy();
    }

    public static function isLoggedIn(){
        return isset($_SESSION['user_id']);
    }

    public static function rememberRequestedPage(){
        $_SESSION['return_to'] = $_SERVER['REQUEST_URI'];
    }

    public static function getReturnPage(){
        return $_SESSION['return_to'] ?? '/';
    }
}