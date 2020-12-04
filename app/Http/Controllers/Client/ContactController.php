<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Client\ContactService;

class ContactController extends Controller
{
    private $BlogService;

    public function __construct(){
        $this->BlogService=new ContactService();
    }

    public function show(Request $request){
        $data=$this->BlogService->getAllPageData();
        return view('front-end.contact',$data);
    }
}
