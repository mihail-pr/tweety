<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(\App\Models\User $user)
    {
        return view('profiles.show',[
            'user' => $user,
            'tweets' => $user->tweets()->paginate(50),
        ]);
    }

    public function edit(\App\Models\User $user)
    {
        abort_if($user->isNot(current_user()),404);

        return view('profiles.edit', compact('user'));
    }

    public function update(\App\Models\User $user)
    {
        abort_if($user->isNot(current_user()),404);

        $attributes = request()->validate([
            'username'=>[
                'string',
                'required',
                'max:255',
                'alpha_dash',
                Rule::unique('users')->ignore($user)
                ],
            'email'=>[
                'string',
                'required',
                'max:255',
                'email',
                Rule::unique('users')->ignore($user)],
            'avatar'=>['file'],
            'name'=>['string','required','max:255'],
            'password'=>['string','required','min:8','max:255','confirmed']
        ]);
        if (request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);
        return redirect($user->path());
    }
}
