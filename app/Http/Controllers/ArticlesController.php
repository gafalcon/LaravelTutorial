<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article as Article;
//use Illuminate\Http\Request;
use Request; //Facade for the previous
use Carbon\Carbon;

class ArticlesController extends Controller {

	//
    public function index(Article $article){
        // $articles =  $article
        //           ->latest('published_at')
        //           ->where('published_at', '<=', Carbon::now())
        //           ->get();

        //Same as above but cleaner
        $articles = $article
                  ->latest('published_at')
                  ->published()
                  ->get();

        return view('articles.index', compact('articles'));

    }

    public function show($id){
        $article = Article::findOrFail($id);

        // if(is_null($article)){
        //     abort(404);
        // }
        return view('articles.show', compact('article'));

    }

    public function create(){
        return view('articles.create');
    }

    public function store(){
        //Request::get('title');

        // Dont need to worry about sql injection
        Article::create(Request::all());
        return redirect('articles');
    }

    public function edit($id){
        $article = Article::findOrFail($id); 
        return view('articles.edit', compact('article'));
    }

}
