<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Article as Article;
use Illuminate\Http\Request;
//use Request; //Facade for the previous
use Carbon\Carbon;
use App\Http\Requests\ArticleRequest;
class ArticlesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth', [
            'only' => 'create'
        ]); 
    }
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

    /**
     * Show an article
     *
     * @param articles id
     *
     * @return view
     */
    public function show(Article $article){

        // if(is_null($article)){
        //     abort(404);
        // }
        $tags = $article->tags;
        return view('articles.show', compact('article', 'tags'));

    }

    //Automatic validation with the CreateArticleRequest
    public function create(){
        // if(\Auth::guest())
        //     return redirect('articles');

        $tags = \App\Tag::lists('name','id');
        return view('articles.create', compact('tags'));
    }

    
    /**
     * Saves a new article
     *
     * @param ArticleRequest
     *
     * @return view
     */
    public function store(ArticleRequest $request){
        //Request::get('title');

        // $this->validate($request, [
        //     'title' => 'required|min:3',
        //     'body' => 'required',
        //     'published_at' => 'required|date'
        // ]);
        // Dont need to worry about sql injection
        $article = new Article($request->all());


        \Auth::user()->articles()->save($article);

        $article->tags()->attach($request->input('tag_list'));

        // Creating flash messages
        //\Session::flash('flash_message', 'Your article has been created!');

        //Article::create($request->all());
        flash('Article was created');
        return redirect('articles');/*->with([
            'flash_message' => 'Your article has been created',
            'flash_message_important' => true

            ]);*/
    }

    public function edit(Article $article){
        $tags = \App\Tag::lists('name','id');
        return view('articles.edit', compact('article', 'tags'));
    }

    /**
     * Updates an article
     *
     * @param articles id
     * @param App\Http\Requests\ArticleRequest
     *
     * @return view
     */
    function update(Article $article, ArticleRequest $request)
    {

        $article->update($request->all());
        $article->tags()->sync((array) $request->input('tag_list'));

        flash()->success('The article was edited');

        return redirect('articles');
    }

}
