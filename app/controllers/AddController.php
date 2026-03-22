<?php

namespace App\Controllers;
use App\Controllers\BaseController;

class AddController extends BaseController
{
    public function showAddForm()
    {
        view('add');
    }

}