<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use App\Http\Requests\CreateArticleRequest;
use Illuminate\HttpResponse;
use App\Article;


class ArticlesController extends Controller
{
    public function index(){
       $articles=Article::latest()->get();
       return view('articles.index', compact('articles'));
    }

    public function show($id){
        dd('show');
        $article = Article::findorfail($id);


        return view('articles.show',compact('article'));
    }

    public function create(){
        return view('articles.create');
    }

    public function store(CreateArticleRequest $request){

        Article::create($request->all());

        return redirect('articles');
    }
}
