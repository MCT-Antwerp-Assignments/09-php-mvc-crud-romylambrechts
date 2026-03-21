<?php
namespace App\Controllers;

use Core\Session;
use App\Models\User;

class LoginController
{
    public function showLoginForm()
    {
        view('login');
    }

    public function authenticate()
    {
        $email = get('email');
        $password = get('password');

        $user = User::where('email', $email)->first();
    }
}