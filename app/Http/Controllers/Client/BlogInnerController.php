<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\BlogInnerService;
use Illuminate\Http\Request;

class BlogInnerController extends Controller
{
    private $BlogInnerService;

    public function __construct(){
        $this->BlogInnerService=new BlogInnerService();
    }

    public function show(Request $request,$slug){
        $data=$this->BlogInnerService->getAllPageData($slug);
        return view('front-end.blog_inner',['blogs'=>$data]);
    }
}
?>
