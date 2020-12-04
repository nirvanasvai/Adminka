<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\MainService;

class MainController extends Controller
{
    private $aboutService;

    public function __construct(){
        $this->aboutService=new MainService();
    }

    public function show(Request $request){
        $data=$this->aboutService->getAllPageData();
        return view('front-end.index',$data);
    }
}

