<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Domain\Photo\GetPhotoAction;
use Domain\Photo\UploadPhotoAction;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        return resolve(UploadPhotoAction::class)($request->image);
    }

    public function get()
    {
        return resolve(GetPhotoAction::class)();
    }
}
