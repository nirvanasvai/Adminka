<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\AboutService;

class AboutController extends Controller
{
    private $aboutService;

    public function __construct(){
        $this->aboutService=new AboutService();
    }

    public function show(Request $request){
        $data=$this->aboutService->getAllPageData();
        return view('front-end.about_us',$data);
    }
}

