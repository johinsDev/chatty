<?php

namespace Chatty\Http\Controllers;

use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function index()
    {
        $requests = auth()->user()->friendRequests();
        $friends = auth()->user()->friends();
        return view('friends.index', ['friends' => $friends, 'requests' => $requests]);
    }
}
