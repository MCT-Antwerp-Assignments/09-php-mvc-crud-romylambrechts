<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Controllers\BaseController;

class UpdateController extends BaseController
{
    public function showUpdateForm(int $id)
    {
        /**
         * Find the contact by ID
         */
        $contact = Contact::where('id', $id)->first();

        /**
         * Load the view file
         */
        view('update', compact('contact'));
    }

}
