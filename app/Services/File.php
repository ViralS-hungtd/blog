<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;

class File
{
    public static function saveFile($folder, $file)
    {
        if ( ! Storage::exists($folder)) {
            Storage::makeDirectory($folder, 777);
        }
        $fileName = self::getFileName($file);
        $urlAvatar = $folder . '/' . $fileName;
        if (Storage::exists($urlAvatar)) {
            Storage::delete($urlAvatar);
        }

        Storage::putFileAs($folder . '/', $file, $fileName);

        return str_replace('public', 'storage', $urlAvatar);
    }

    public static function getFileName($file)
    {
        $arr = explode('.', $file->getClientOriginalName());
        $extension = end($arr);
        unset($arr[array_key_last($arr)]);
        $name = implode('.', $arr);
        return $name . '_' . time() . '.' . $extension;
    }
}
