<?php
namespace App\Controllers;

use App\Models\User;
use App\Controllers\BaseController;


class UserController extends BaseController
{
    public function index()
    {
        $items = User::all();
        $dataType = 'users';
        view('home', compact ('items', 'dataType'));
    }

}

