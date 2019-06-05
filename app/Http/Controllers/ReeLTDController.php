<?php

namespace ree\Http\Controllers;

use Illuminate\Http\Request;

class ReeLTDController extends Controller
{
    public function getIndex()
    {
        return view('reeltd.index');
    }
}
