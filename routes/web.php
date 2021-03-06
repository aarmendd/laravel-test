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

Route::get('/about', function () {
    // $articles = App\Article::take(2)->get();
    // $articles = App\Article::paginate(2);
    // $articles = App\Article::latest()->get();

    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});



Route::get('posts/{post}', 'PostsController@show');
Route::get('articles', 'ArticlesController@index')->name('articles.index');
Route::post('articles', 'ArticlesController@store'); // after submiting the form in articles/create it makes a post request
Route::get('articles/create', 'ArticlesController@create'); //should put articles/create about the show
Route::get('articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('articles/{article}/edit', 'ArticlesController@edit');
Route::put('articles/{article}', 'ArticlesController@update');

// GET /articles
// Get /articles/:id
// POST /articles
// PUT /articles/:id 
// DELETE /articles/:id 

// GET /videos
// GET /videos/:id 
// GET /videos/create -> display a form to create
// POST /videos -> when we submit a form to create a resource it makes a POST request
// GET /videos/:id/edit -> display a form to edit
// PUT /videos/:id 
// DELETE /videos/:id 

// POST /videos/subrscriptions => VideoSubscriptionsController@store
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
