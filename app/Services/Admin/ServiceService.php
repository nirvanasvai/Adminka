<?php
namespace App\Services\Admin;

use App\Models\Service;
use App\Services\ImageUploaderServices;

class ServiceService
{
    private $imageUploader;

    public function __construct()
    {
        $this->imageUploader = new ImageUploaderServices();
    }

    public function create($data)
    {
        if (isset($data['image'])) {
            $data['image'] = $this->imageUploader
                ->save('/service', $data['image'])
                ->getPath();
        }
        Service::create($data);
    }

}
