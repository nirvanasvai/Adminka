<?php

namespace App\Services\Client;


use App\Models\Banner;
use App\Models\Blog;
use App\Models\Doing;
use App\Models\Logo;
use App\Models\Main;
use App\Models\Portfolio;
use App\Models\Review;
use App\Models\Work;

class MainService{

    public function getAllPageData(){
        $data['mains']=Main::all();
        $data['portfolios']=Portfolio::all();
        $data['logos']=Logo::all();
        $data['blogs']=Blog::all();
        $data['reviews']=Review::all();
        $data['doings']=Doing::all();
        $data['works']=Work::all();
        $data['banners']=Banner::all();



        return $data;
    }

}
?>

