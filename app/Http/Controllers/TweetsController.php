<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Http\Request;

class TweetsController extends Controller
{
    public function store()
    {
        $attributes = request()->validate(['body'=>'required|max:255']);
        Tweet::create([
                          'user_id'=>auth()->id(),
                          'body'=>$attributes['body'],
                      ]);
        return redirect('/tweets');
    }
    public function index()
    {

        return view('tweets.index',[
            'tweets'=>auth()->user()->timeline()
        ]);
    }
}