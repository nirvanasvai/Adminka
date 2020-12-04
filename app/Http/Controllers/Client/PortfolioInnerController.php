<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\PortfolioInnerService;
use Illuminate\Http\Request;

class PortfolioInnerController extends Controller
{
    private $PortfolioInnerService;

    public function __construct(){
        $this->PortfolioInnerService=new PortfolioInnerService();
    }

    public function show(Request $request,$slug){
        $data=$this->PortfolioInnerService->getAllPageData($slug);
        return view('front-end.portfolio_inner',['portfolios'=>$data]);
    }
}
?>
