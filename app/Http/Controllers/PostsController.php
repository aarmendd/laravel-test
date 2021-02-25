<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//To create a controller in the terminal: php artisan make:controller PostsController

class PostsController extends Controller
{
    public function show($post)
    {
        $posts = [
        'first-post' => 'Hello this is the first post',
        'second-post' => 'Hello this is the second post'
    ];

        if (! array_key_exists($post, $posts)) {
            abort(404, 'Post not found!');
        }



        return view('post', [
        'post' => $posts[$post]
    ]);
    }
}
