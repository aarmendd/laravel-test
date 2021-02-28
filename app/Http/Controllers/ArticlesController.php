<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        // index() action Render a list of a resource
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        // show() - show a single resource
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        // Shows a view to create a new resource
        return view('articles.create');
    }

    public function store()
    {

        Article::create($this->validateData());

        return redirect('/articles');
    }

    public function edit(Article $article)
    {

        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article)
    {
        $article->update($this->validateData());

        return redirect('/articles/' . $article->id);
    }

    public function destroy()
    {
    }

    protected function validateData()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
        ]);
    }
}
