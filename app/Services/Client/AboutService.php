<?php

namespace App\Services\Client;
use App\Models\About;
use App\Models\Gallery;
use App\Models\Logo;
use App\Models\Team;

class AboutService{

    public function getAllPageData(){
        $data['abouts']=About::all();
        $data['galleries']=Gallery::all();
        $data['logos']=Logo::all();
        $data['teams']=Team::all();

        return $data;
    }

}
?>
