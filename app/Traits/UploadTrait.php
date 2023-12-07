<?php

namespace App\Traits;

trait UploadTrait{

    public function defaultImage($directory){
        return asset("/storage/images/$directory/default.jpg");
    }
}

