<?php

namespace App\Traits;

trait UploadTrait{

    public function defaultImage($directory){
        return asset("/storage/images/$directory/default.png");
    }

    public static function getImage($name , $directory){
        return asset("storage/images/$directory/" . $name);
    }
}

