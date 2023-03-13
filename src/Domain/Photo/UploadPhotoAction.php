<?php
namespace Domain\Photo;

use App\Models\User;

class UploadPhotoAction {
    public function __invoke($data)
    {

        // Assuming that we auth the user
        $user = User::latest()->first();

        // remove media first
        $media = $user->getMedia($data['layout']);
        if(isset($media[0])) {
            $media[0]->delete();
        }

        $user->addMediaFromRequest('image')
            ->toMediaCollection($data['layout']);
    }
}