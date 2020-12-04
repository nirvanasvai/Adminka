<?php

namespace App\Services\Client;

use App\Models\Blog;

class BlogService
{
    public function getALlPagedata()
    {
        $data['blogs'] = Blog::all();
        return $data;
    }
}
?>
