<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\HttpResponse;
use App\Article;


class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index(){
       $articles=Article::latest()->get();
       return view('articles.index', compact('articles'));
    }

    public function show(Article $article){

        return view('articles.show',compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(Article $article){

        $this->validate(request(),
            [
                'title' => 'required|min:3',
                'body' =>'required']);

        Article::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

        return redirect('articles');
    }
}
