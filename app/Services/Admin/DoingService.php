<?php
namespace App\Services\Admin;

use App\Models\Doing;
use App\Services\ImageUploaderServices;

class DoingService {

    private $imageUploader;

    public function __construct(){
        $this->imageUploader=new ImageUploaderServices();
    }

    public function create($data){
        if(isset($data['image'])){
            $data['image']=$this->imageUploader
                ->save('/main/doing',$data['image'])
                ->getPath();
        }
        Doing::create($data);
    }
}
?>

