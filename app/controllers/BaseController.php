<?php

namespace App\Controllers;

use Core\Auth;
use Core\Session;

class BaseController
{
    public function __construct()
    {
        /**
         * Check if the user is logged in
         */
        Auth::check();
    }

}
