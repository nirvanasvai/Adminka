<?php

namespace App\Services\Client;

use App\Models\Gallery;

class GalleryService
{
    public function getALlPagedata()
    {
        $data['galleries'] = Gallery::all();
        return $data;
    }
}
?>
