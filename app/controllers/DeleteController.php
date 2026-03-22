<?php

namespace App\Controllers;

use Core\Session;
use App\Models\Contact;
use App\Controllers\BaseController;

class DeleteController extends BaseController
{
    public function delete(int $id)
    {
        if (empty($id)) {
            Session::set('error', 'Something went wrong, please try again.');
            redirect('/');
        }

        $contact = Contact::where('id', $id)->get();
        $contact->deleted_at = date('Y-m-d H:i:s');
        $contact->save();

        Session::set('msg', 'Contact deleted successfully.');
        redirect('/');
    }

}
