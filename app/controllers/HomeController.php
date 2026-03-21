<?php
namespace App\Controllers;

use Core\Auth;
use App\Models\Contact;


class HomeController 
{
    public function index()
    {
        Auth::check();
        $contacts = Contact::all();
        view('home', compact ('contacts'));
    }

}

