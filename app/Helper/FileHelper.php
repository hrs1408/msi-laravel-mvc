<?php

namespace App\Helper;

use Image;

class FileHelper
{

    public static function upload( $file, string $folder, $width_resize = 1200 ): string
    {
        [ $width, $height ] = getimagesize($file);
        $height_resize = $width_resize * $height / $width;
        $fileName = time() . '_' . $file->getClientOriginalName();
        $path = storage_path('app/public/' . $folder) . "/" . $fileName;
        Image::make($file->getRealPath())->resize($width_resize, $height_resize)->save($path);
        return 'storage/' . $folder . '/' . $fileName;
    }

}
