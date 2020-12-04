<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\ServiceService;

class ServiceController extends Controller
{
    private $ServiceService;

    public function __construct(){
        $this->ServiceService=new ServiceService();
    }

    public function show(Request $request){
        $data=$this->ServiceService->getAllPageData();
        return view('front-end.service',$data);
    }
}
