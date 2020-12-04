<?php
namespace App\Services\Admin;

use App\Models\Portfolio;
use App\Services\ImageUploaderServices;

class PortfolioService {

    private $imageUploader;

    public function __construct(){
        $this->imageUploader=new ImageUploaderServices();
    }

    public function create($data){
        if(isset($data['image'])){
            $data['image']=$this->imageUploader
                ->save('/portfolio',$data['image'])
                ->getPath();
        }
        Portfolio::create($data);
    }
}
?>

