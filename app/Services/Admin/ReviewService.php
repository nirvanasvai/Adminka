<?php
namespace App\Services\Admin;

use App\Models\Review;
use App\Services\ImageUploaderServices;

class ReviewService {

    private $imageUploader;

    public function __construct(){
        $this->imageUploader=new ImageUploaderServices();
    }

    public function create($data){
        if(isset($data['image'])){
            $data['image']=$this->imageUploader
                ->save('/amin/reviews',$data['image'])
                ->getPath();
        }
        Review::create($data);
    }
}
?>

