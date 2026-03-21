<?php
namespace App\Controllers;
use App\Models\Contact;


class HomeController 
{
    public function index()
    {
        $contacts = Contact::all();
        view('home');
    }

}

