<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\PortfolioService;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    private $PortfolioService;

    public function __construct(){
        $this->PortfolioService=new PortfolioService();
    }

    public function show(Request $request){
        $data=$this->PortfolioService->getAllPageData();
        return view('front-end.portfolio',$data);
    }
}


