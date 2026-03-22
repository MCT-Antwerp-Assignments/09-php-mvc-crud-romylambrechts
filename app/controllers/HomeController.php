<?php
namespace App\Controllers;

use Core\Auth;
use App\Models\Contact;
use App\Controllers\BaseController;


class HomeController extends BaseController
{
    public function index()
    {
        $items = Contact::all();
        $dataType = 'contacts';
        view('home', compact ('items', 'dataType'));
    }

}

