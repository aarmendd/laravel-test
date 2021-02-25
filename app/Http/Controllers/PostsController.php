<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//To create a controller in the terminal: php artisan make:controller PostsController

class PostsController extends Controller
{
    public function show($slug)
    {
        $post = \DB::table('posts')->where('slug',$slug)->first();

        return view('post', [
        'post' => $post
    ]);
    }
}
