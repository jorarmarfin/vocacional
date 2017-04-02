<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AdminAccessPolicy
{
    use HandlesAuthorization;

    public function root(User $user)
    {
        if ($user->idrole == IdRole('root')) {
            return true;
        }
    }
    public function admin(User $user)
    {
        if ($user->idrole == IdRole('admin') || $user->idrole == IdRole('root')) {
            return true;
        }
    }
}