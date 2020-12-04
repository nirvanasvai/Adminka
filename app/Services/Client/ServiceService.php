<?php

namespace App\Services\Client;
use App\Models\Service;

class ServiceService{

    public function getAllPageData(){
        $data['services']=Service::all();
        return $data;
    }

}
?>
