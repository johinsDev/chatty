<?php

namespace Chatty\Http\Controllers;

use Chatty\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        if (!$user)
            abort(404);

        return view('users.show' , ['user' => $user]);
    }

    public function edit()
    {
        return view('users.edit');
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'alpha|max:50',
            'last_name' => 'alpha|max:50',
            'location' => 'max:20',
        ]);

        auth()->user()->update($request->all());

        return redirect()
            ->route('users.edit' ,[auth()->user()->username])
            ->with('info', 'Your profile has been updated.');
    }
}
