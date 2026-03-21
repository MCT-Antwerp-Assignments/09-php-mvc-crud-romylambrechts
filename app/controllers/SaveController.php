<?php

namespace App\Controllers;

use Core\Session;
use App\Models\Contact;
use App\Controllers\BaseController;

class SaveController extends BaseController
{
    public function save(int $id = null)
    {
        /**
         * Check if it's a new contact, if so, create a new contact
         */
        if (empty($id)) {
            $contact = new Contact();
            $contact->name = get('name');
            $contact->email = get('email');
            $contact->phone = get('phone');
            $contact->address = get('address');
            $contact->save();
        }

        /**
         * Find the contact by ID and update it
         */
        if (!empty($id)) {
            $contact = Contact::where('id', $id)->first();
            $contact->name = get('name');
            $contact->email = get('email');
            $contact->phone = get('phone');
            $contact->address = get('address');
            $contact->save();
        }

        /**
         * Set a success message and redirect to the homepage
         */
        Session::set('msg', 'Contact saved successfully.');
        redirect('/');
    }

}
