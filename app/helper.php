<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

if (!function_exists('fileSave')) {
    function fileSave($files, $path, $id)
    {
        $fileNames = [];
        foreach($files as $key=>$file) {
           $fileName =  $id .'_'. Str::random(10) . '.'. $file->getClientOriginalExtension();
           Storage::disk($path)->put($id . '/' . $fileName, file_get_contents($file));
           $fileNames[$key]['product_id'] = $id;
           $fileNames[$key]['image'] = $fileName;
        }
        return $fileNames;
    }
}
