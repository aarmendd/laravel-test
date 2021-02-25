<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    
    // return view('test', [
    //     'name' => request('name')
    // ]);
    
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});



Route::get('posts/{post}', 'PostsController@show');