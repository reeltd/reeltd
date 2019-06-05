<?php

namespace ree\Models;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    protected $table = 'ads';
    protected $fillable = [
    'title',
    'body',
    'description'.
    'summary',
    'contactname',
    'contactemail',
    'contactsite',
    'contactphone',
    'location',
    'coordinates',
    'mapurl',
    'curl',
    'reviews',
    'visits',
    'rating',
    'comments',
    'status',
    'img1',
    'img2',
    'img3',
    'img4',
    'img5',
    'img6',
    'img7',
    'img8',
    'img9',
    'img1',
    'slug',
    
    ];   

    public function ads()
    {
        return $this->belongTo('ree\User', 'name');
    }
}
