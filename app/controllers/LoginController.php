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

        $user = User::where('email', $email)->get();

        if ($user && password_verify($password, $user->password)) {
            Session::set('user', $user->id);
            redirect('/');
        }
        Session::set('error', 'Invalid credentials!');
        redirect('/login');
    }

    public function logout()
    {
        Session::destroy();
        redirect('/login');
    }
}