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

    public function path()
    {
        return route('articles.show', $this);
    }

    public function author()
    {
        // if we want to call the user->author of the article we pass as a second argument the 'user_id'
        return $this->belongsTo(User::class, 'user_id');
    }
}
