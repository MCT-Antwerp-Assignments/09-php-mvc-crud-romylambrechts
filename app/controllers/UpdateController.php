<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Controllers\BaseController;
use Core\Session;

class UpdateController extends BaseController
{
    public function showUpdateForm(int $id)
    {
        $contact = Contact::where('id', $id)->get();

        if(!$contact){
            Session ::set('error', 'Contact not found');
            redirect('/');
        }

        view('update', compact('contact'));
    }

}