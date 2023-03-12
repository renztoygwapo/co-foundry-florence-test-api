<?php

namespace App\Http\Controllers;

use Domain\Photo\UploadPhotoAction;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function store(Request $request)
    {
        return resolve(UploadPhotoAction::class)($request->all());
    }
}
