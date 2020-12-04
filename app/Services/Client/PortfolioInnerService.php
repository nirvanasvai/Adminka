<?php

namespace App\Services\Client;

use App\Models\Portfolio;

class PortfolioInnerService
{
    public function getALlPagedata($slug)
    {
        return Portfolio::where('slug', $slug)->first();

    }
}
?>
