<?php

namespace Core;

use Core\Session;

class Auth
{
    /**
     * Check if the user is logged in
     */
    public static function check(): void
    {
        if (empty(Session::get('user'))) {
            redirect('/login');
        }
    }

}