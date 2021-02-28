<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    // // if we want to use title as url
    // public function getRouteKeyName(){
    //     return 'title';
    // }

    // for the mass asignment protection
    protected $fillable = ['title', 'excerpt', 'body'];
}
