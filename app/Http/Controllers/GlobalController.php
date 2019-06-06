<?php

namespace ree\Http\Controllers;

use Illuminate\Http\Request;

class GlobalController extends Controller
{
    public function getIndex()
    {
        return view('global.index');
    }
}
