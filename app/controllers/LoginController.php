<?php
namespace App\Controllers;

use Core\Session;

class LoginController{
    public function showLoginForm()
    {
        view('login');
    }
}