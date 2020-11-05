<?php

namespace App\Http\Controllers\Profile;

use App\Template;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function profilePage($username){
        $user = User::where('username', $username)->first();
        $auth = Auth::user();
        if ($auth) {
            if (!$user){
                abort(404);
            }
            if ($user->id !== auth()->id()) {
                if (!$user->templateID){
                    return redirect('/');
                } else {
                    return view('templates.'. $user->getTemplate->blade, ['user' => $user]);
                }
            }
            if (!$user->templateID) {
                return view('profile.choose-a-template');
            } else{
                return view('templates.'.$user->getTemplate->blade, ['user' => $user]);
            }
        }

    }
}
