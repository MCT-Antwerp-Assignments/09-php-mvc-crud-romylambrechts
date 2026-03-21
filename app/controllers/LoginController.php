<?php

namespace App\Controllers;

use App\Models\User;

use Core\Session;

class LoginController
{
    public function showLoginForm()
    {
        /**
         * Load the view file
         */
        view('login');
    }

    public function authenticate()
    {
        /**
         * Get the email and password from the form
         */
        $email = get('email');
        $password = get('password');

        /**
         * Find the user by email
         */
        $user = User::where('email', $email)->first();

        /**
         * Check if the user exists and the password is correct
         */
        if ($user && password_verify($password, $user->password)) {
            /**
             * Set the user ID in the session and redirect to the homepage
             */
            Session::set('user', $user->id);
            redirect('/');
        } else {
            /**
             * Set an error message and redirect back to the login page
             */
            Session::set('error', 'Invalid credentials!');
            redirect('/login');
        }
    }

    public function logout()
    {
        /**
         * Destroy the session and redirect to the login page
         */
        Session::destroy();
        redirect('/login');
    }

}
