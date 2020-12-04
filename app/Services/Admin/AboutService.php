<?php
namespace App\Services\Admin;

use App\Models\About;
use App\Services\ImageUploaderServices;

class AboutService {

    private $imageUploader;

    public function __construct(){
        $this->imageUploader=new ImageUploaderServices();
    }

    public function create($data){
        if(isset($data['image'])){
            $data['image']=$this->imageUploader
                ->save('/about',$data['image'])
                ->getPath();
        }
        About::create($data);
    }
}
?>

