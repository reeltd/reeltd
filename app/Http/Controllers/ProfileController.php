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
}
