<?php

namespace Chatty\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function home()
    {
        if (auth()->check()){
            return view('home');
        }
        //test for login form and logiin session
        //same for register
        //guest for welcome
        //auth middeware
        return view('welcome');
    }
}
