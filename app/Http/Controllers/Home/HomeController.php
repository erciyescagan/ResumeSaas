<?php

namespace App\Http\Controllers\Home;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        return view('home.home');
    }


}
