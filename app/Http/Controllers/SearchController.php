<?php

namespace Chatty\Http\Controllers;

use Chatty\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function getResults(Request $request)
    {
        $query = $request->get('query');
        if (!$query)
            return  redirect()->to('/');

        $users = User::where(DB::raw("CONCAT(first_name, ' ' , last_name)") , 'LIKE' , "%{$query}%")
                        ->orWhere('username' , 'LIKE' , "%{$query}%")
                        ->get();

        return view('search.results' , ['users' => $users]);
    }
}
