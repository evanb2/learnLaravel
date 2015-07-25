<?php

namespace App\Http\Controllers;


use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Carbon\Carbon;

class ArticlesController extends Controller
{
    /**
     * Show all articles.
     *
     * @return Response
     */
    public function index()
    {
        //Order the articles by latest first
        $articles = Article::latest('published_at')->published()->get();

        return view('articles.index', compact('articles'));
    }

    /**
     * Show a single article.
     *
     * @param integer $id
     * @return Response
     */
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.show', compact('article'));
    }

    /**
     * Show the page to create a new article.
     *
     * @return Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Save a new article.
     *
     * @return Response
     */
    public function store()
    {
        Article::create(Request::all());

        return redirect('articles');
    }
}
