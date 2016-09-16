<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Support\Facades\Input;
use Intervention\Image\Image;

class UserController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('Профиль пользователя ' . Auth::user()->name);
        SEOMeta::setDescription('Профиль пользователя ' . Auth::user()->name);
        return view('profile', array('user' => Auth::user()));
    }

    public function uploadAvatar(Request $request)
    {
        dd($request->hasFile('avatar'));
//        dd($request->hasFile('avatar'));
//        dd($request->input('text'));
//
//        if($request->hasFile('avatar')){
//            $avatar = $request->file('avatar');
//            $filename = time() . '.' . $avatar->getClientOriginalExtension();
//            Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
//            $user = Auth::user();
//            $user->avatar = $filename;
//            $user->save();
//        }
//        return view('profile', array('user' => Auth::user()) );
    }
}
