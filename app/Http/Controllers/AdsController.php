<?php

namespace ree\Http\Controllers;

use ree\User;
use ree\Models\Ad;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function getAdsIndex()
    {

        
        return view('ads.index');
    }
}
