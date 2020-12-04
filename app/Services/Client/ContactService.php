<?php

namespace App\Services\Client;

use App\Models\Contact;

class ContactService
{
    public function getALlPagedata()
    {
        $data['contacts'] = Contact::all();
        return $data;
    }
}
?>
