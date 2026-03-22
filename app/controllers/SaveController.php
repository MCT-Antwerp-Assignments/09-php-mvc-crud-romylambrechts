<?php

namespace App\Controllers;

use Core\Session;
use App\Models\Contact;
use App\Controllers\BaseController;

class SaveController extends BaseController
{
    public function save(int $id = null)
    {
        if (empty($id)) {
            $contact = new Contact();
            $contact->name = get('name');
            $contact->email = get('email');
            $contact->phone = get('phone');
            $contact->address = get('address');
            $contact->save();
        }

        if (!empty($id)) {
            $contact = Contact::where('id', $id)->get();
            $contact->name = get('name');
            $contact->email = get('email');
            $contact->phone = get('phone');
            $contact->address = get('address');
            $contact->save();
        }

        Session::set('msg', 'Contact saved successfully.');
        redirect('/');
    }

}
