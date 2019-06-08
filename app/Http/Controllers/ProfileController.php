<?php

namespace ree\Http\Controllers;

use ree\User;
use Illuminate\Http\Request;
use ree\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function getIndex()
    {
        return view('profile.index');
    }

    public function getProfile($username)
    {
    	$user = User::where('user', $username)->first();
    	
    	if (!$user) {
    		abort(404);
    	}
    	
    	$statuses = $user->statuses()->notReply()->get();
    	
    	return view ('profile.index')->with('user', $user)->with('statuses', $statuses)->with('authUserIsFriend', Auth::user()->isFriendsWith($user));
    }
}
