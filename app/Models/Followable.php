<?php


namespace App\Models;


trait Followable
{

    public function following(\App\Models\User $user)
    {
        return $this->follows()
            ->where('following_user_id',$user->id)
            ->exists();
    }

    public function unfollow(\App\Models\User $user)
    {
        return $this->follows()->detach($user);
    }

    public function follow(\App\Models\User $user)
    {
        return $this->follows()->save($user);
    }
    public function toggleFollow(\App\Models\User $user)
    {
        $this->follows()->toggle($user);

    }
    public function follows()
    {
        return $this->belongsToMany(
            User::class,
            'follows',
            'user_id',
            'following_user_id');
    }


}
