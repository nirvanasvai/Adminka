<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\BlogService;

class BlogController extends Controller
{
    private $BlogService;

    public function __construct(){
        $this->BlogService=new BlogService();
    }

    public function show(Request $request){
        $data=$this->BlogService->getAllPageData();
        return view('front-end.blog',$data);
    }
}
