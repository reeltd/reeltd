<?php

namespace ree\Http\Controllers;
use SEOMeta;
use OpenGraph;
use Twitter;
## or
use SEO;
use ree\User;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    public function addAd()
    {
        SEOMeta::setTitle('Real Estate Empire');
        SEOMeta::setDescription('Smart Real Estate Hub');
        SEOMeta::setCanonical('https://codecasts.com.br/lesson');

        OpenGraph::setDescription('Smart Real Estate Hub');
        OpenGraph::setTitle('Real Estate Empire');
        OpenGraph::setUrl('http://ipool.remotewebaccess.com:810/add/ad');
        OpenGraph::addProperty('type', 'ads');

        Twitter::setTitle('Homepage');
        Twitter::setSite('@reeltd1');

        ## Or

        SEO::setTitle('Real Estate Empire');
        SEO::setDescription('Smart Real Estate Hub');
        SEO::opengraph()->setUrl('http://ipool.remotewebaccess.com:810/add/ad');
        SEO::setCanonical('https://codecasts.com.br/lesson');
        SEO::opengraph()->addProperty('type', 'ads');
        SEO::twitter()->setSite('@reeltd1');


        $user = User::all();

        OpenGraph::addAudio('http://ipool.remotewebaccess.com/assets/sound/test.mp3', [
            'type' => 'audio/mpeg'
        ]);
        return view('ads.index', compact('user'));
    }
}
