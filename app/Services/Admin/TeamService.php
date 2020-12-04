<?php
namespace App\Services\Admin;

use App\Models\Team;
use App\Services\ImageUploaderServices;

class TeamService
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
                ->save('/team', $data['image'])
                ->getPath();
        }
        Team::create($data);
    }
}
?>
