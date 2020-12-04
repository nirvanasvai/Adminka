<?php

namespace App\Services\Client;

use App\Models\Portfolio;

class PortfolioService{

    public function getAllPageData(){
        $data['portfolios']=Portfolio::all();
        return $data;
    }

}
?>
