<?php

namespace Qusai\Upload;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Storage;

trait UploadFiles {
    public function uplaodFile($disk,$folderName,$file)
    {   #ALL THE AVALIBLE DISKS.
        $disks = ['local','public','public_uploads','s3'];
        if(!in_array($disk,$disks)) throw new \Exception('THERE IS NO DISK WITH THIS NAME');
        #CHECK IF THE GIVEN FOLDER IT DOSE EXIST IF NOT CREATE ONE.
        if(!Storage::disk($disk)->exists($folderName)) Storage::disk($disk)->makeDirectory($folderName);
        #CHECK IF THE FILE IS VALID.
        if(!$file->isValid()) throw new \Exception('ERROR ON UPLOAD FILES: '.$file->getErrorMessage());
        # UPLOAD THE FILE TO THE CHOSEN PATH AND DISK.
        $file_path = Storage::disk($disk)->put($folderName,$file);
        # CREATE THE FILE URL.
        $full_url_path = URL::to('/'.$folderName.'/'.basename($file_path));
        # RETURN THE FULL USEABLE URL THE USER CAN SAVE IN THE DATABASE.
        return $full_url_path;
    }
}