<?php

namespace App\Http\Services\Image;

use Intervention\Image\ImageManager;

class ImageService extends ImageToolsService
{

    public function save($image)
    {
        //set image
        $this->setImage($image);

        //execute provider
        $this->provider();

        //save Image
        $result = ImageManager::read($image->getRealPath())->save(public_path($this->getImageAddress()), null, $this->getImageFormat());

        return $result ? $this->getImageAddress() : false;
    }
}
