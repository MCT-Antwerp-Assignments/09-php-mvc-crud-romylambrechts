<?php
namespace App\Controllers;

use Core\Auth;
use App\Models\Contact;
use App\Controllers\BaseController;


class HomeController extends BaseController
{
    public function index()
    {
        $contacts = Contact::all();
        view('home', compact ('contacts'));
    }

}

