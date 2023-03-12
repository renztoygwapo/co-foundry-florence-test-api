<?php
namespace Domain\Photo;

use App\Models\User;

class GetPhotoAction {
    public function __invoke()
    {
        // Assuming that we auth the user
        $user = User::latest()->first();

        // get the media
        $media = $user->getMedia();

        $publicUrl = $media[0]->getUrl();
        return $publicUrl;
    }
}