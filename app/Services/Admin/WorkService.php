<?php
namespace App\Services\Admin;

use App\Models\Work;
use App\Services\ImageUploaderServices;

class WorkService
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
                ->save('/main/work', $data['image'])
                ->getPath();
        }
        Work::create($data);
    }
}
?>
