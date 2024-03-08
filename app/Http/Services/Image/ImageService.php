<?php

namespace App\Http\Services\Image;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class ImageService extends ImageToolsService
{

    public function save($image)
    {
        //set image
        $this->setImage($image);

        //execute provider
        $this->provider();

        //save Image
        $manager = new ImageManager(new Driver());

        $result = $manager->read($image->getRealPath())->save(public_path($this->getImageAddress()), null, $this->getImageFormat());

        return $result ? $this->getImageAddress() : false;
    }

    public function fitAndSave($image, $width, $height)
    {
        //set image
        $this->setImage($image);

        //execute provider
        $this->provider();

        //save Image
        $manager = new ImageManager(new Driver());

        $result = $manager->read($image->getRealPath())->cover($width, $height)->save(public_path($this->getImageAddress()), null, $this->getImageFormat());

        return $result ? $this->getImageAddress() : false;
    }
}
