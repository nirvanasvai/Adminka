<?php

namespace App\Services\Client;

use App\Models\Blog;

class BlogInnerService
{
    public function getALlPagedata($slug)
    {
        return Blog::where('slug', $slug)->first();
//        dd($data);

    }
}
?>
