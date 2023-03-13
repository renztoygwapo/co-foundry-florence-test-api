<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Photo\GetPhotoAction;
use Domain\Photo\UploadPhotoAction;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        return resolve(UploadPhotoAction::class)($request->all());
    }

    public function get($width = 100, $height = 200, $left = 20, $top = 0, $layout = 1)
    {
        return resolve(GetPhotoAction::class)(
            $width,
            $height,
            $left,
            $top,
            $layout
        );
    }
}
