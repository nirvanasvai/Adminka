<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\GalleryService;

class GalleryController extends Controller
{
    private $GalleryService;

    public function __construct(){
        $this->GalleryService=new GalleryService();
    }

    public function show(Request $request){
        $data=$this->GalleryService->getAllPageData();
        return view('front-end.about_us',$data);
    }
}
