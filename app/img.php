<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Support\Facades\Storage;

class img extends Model
{
    //
    public static function getimg()
    {

        $files = Storage::files('images');
        dd('aaaaaaa'.count($files));
        if (count($files) > 0) {

            $rand = rand(0, count($files) - 1);
            $file = Storage::url($files[$rand]);
            $file = str_replace('/public', '', $file);
            return $file;
        }
    }
}
