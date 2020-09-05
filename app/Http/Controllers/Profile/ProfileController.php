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
            if (!$user) {
                return redirect('/');
            }
            if (is_null($user->template)) {
                return view('profile.choose-a-template');
            } else{
                $template = Template::findOrFail($user->template);
                return view($template->blade, ['user' => $user]);
            }
        }

    }
}
