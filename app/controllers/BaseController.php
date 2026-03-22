<?php

namespace App\Controllers;

use Core\Auth;

class BaseController
{
    public function __construct()
    {
        Auth::check();
    }

}
