<?php
namespace Domain\Photo;

use App\Models\User;

class UploadPhotoAction {
    public function __invoke($data)
    {
        // Assuming that we auth the user
        $user = User::latest()->first();

        $user->addMediaFromRequest('image')->toMediaCollection();
    }
}