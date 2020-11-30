<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

   public function edit(\App\Models\User $currentUser, \App\Models\User $user)
   {
return $currentUser->is($user);
   }
}
