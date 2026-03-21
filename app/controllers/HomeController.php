<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {
        /**
         * Get all contacts
         */
        $contacts = Contact::all();

        /**
         * Load the view file
         */
        view('home', compact('contacts'));
    }

}
