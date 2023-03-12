<?php
namespace Domain\Photo;

use App\Models\User;
use Intervention\Image\Facades\Image;

class GetPhotoAction {
    public function __invoke($width, $height, $left, $top)
    {

        // Assuming that we auth the user
        $user = User::latest()->first();

        // get the media
        $media = $user->getMedia();

        $publicUrl = $media[0]->getFullUrl();

        // return response()->json(['url' => $publicUrl]);
        return Image::make($publicUrl)
            ->crop($width,$height,$left,$top)
            ->response();
    }
}