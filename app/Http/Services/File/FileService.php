<?php

namespace App\Http\Services\File;


class FileService extends FileToolsService
{

    public function moveToPublic($file)
    {
        //set File
        $this->setFile($file);
        //execute provider
        $this->provider();
        //save File
        $result = $file->move(public_path($this->getFinalFileDirectory()), $this->getFinalFileName());
        return $result ? $this->getFileAddress() : false;
    }


    public function moveToStorage($file)
    {
        //set File
        $this->setFile($file);
        //execute provider
        $this->provider();
        //save File
        $result = $file->move(storage_path($this->getFinalFileDirectory()), $this->getFinalFileName());
        return $result ? $this->getFileAddress() : false;
    }


    public function deleteFile($filePath, $storage = false)
    {

        if($storage){
            unlink(storage_path($filePath));
            return true;
        }

        if (file_exists($filePath)) {
            unlink($filePath);
            return true;
        }
        else
        {
            return false;
        }
    }


}
