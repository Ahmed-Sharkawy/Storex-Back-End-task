<?php

use Illuminate\Support\Facades\File;

if (! function_exists('uploadImage ')) {
    function uploadImage($request, $path)
    {
        $image_name = date('Y-m-d') . '_' . uniqid() . '.' . $request->image->extension();
        $request->image->move(public_path($path), $image_name);

        return $image_name;
    }
}

if (! function_exists('deletImage ')) {
    function deletImage($path)
    {
        if (File::exists($path)) {
            File::delete($path);
        }
    }
}
