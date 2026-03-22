<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Controllers\BaseController;

class UpdateController extends BaseController
{
    public function showUpdateForm(int $id)
    {
        $contact = Contact::where('id', $id)->get();

        view('update', compact('contact'));
    }

}