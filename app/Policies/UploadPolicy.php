<?php

namespace App\Policies;

use App\Models\Upload;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UploadPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function touch(User $user, Upload $upload)
    {
        return $user->id == $upload->user_id;
    }
}
