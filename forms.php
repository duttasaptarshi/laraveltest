namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {   // show a single resource
        $articles = Article::latest()->get();
        return view('articles.index',['articles'=>$articles]);
    }

    public function show($id)
    {   // show a view to create a resource
        $article = Article::find($id);
        return view('articles.show',['article'=>$article]);
    }

    public function create()
    {   //persist the edited resource
    return view('articles.create');
    }
    public function store()
    {   //persist a new resource
        $article=new Article();

        $article->title=request('title');
        $article->excerpt=request('excerpt');
        $article->body=request('body');
        $article->save();

        return redirect('/articles');
    }

    public function edit($id)
    {   //show a view to edit an existing resource
        $article = Article::find($id);
        return view('articles.edit',compact('article'));
    }

    public function update($id)
    {   //delete the resource
        $article = Article::find($id);
        $article->title=request('title');
        $article->excerpt=request('excerpt');
        $article->body=request('body');
        $article->save();
        return redirect('/articles/'.$article->id);
    }
}
//updating the routes 
//ROUTES/web.php
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

Route::get('/articles', function () {
    return view('articles.index',[
        'articles' => App\Article::latest()->get()
    ]);
});
    

Route::get('/', function () {
    return view('welcome');
});


Route::get('/articles', 'ArticlesController@index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');

//APP/HTTP/CONTROLLER/ArticlesController.php
<?php
namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;
class ArticlesController extends Controller
{
    public function index()
    {   // show a single resource
        $articles = Article::latest()->get();
        return view('articles.index',['articles'=>$articles]);
    }

    public function show(Article $article)
    {   // show a view to create a resource
        //$article = Article::findorfail($id);
        //return $article;

        return view('articles.show',['article'=>$article]);
    }

    public function create()
    {   //persist the edited resource
        return view('articles.create');
    }

    public function store()//persist a new resource
    {   
        Article::create($this->validateArticle());
        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {   //show a view to edit an existing resource
        //$article = Article::find($id);
        return view('articles.edit',compact('article'));
    }

    public function update(Article $article) //update the resource
    {   
        $article->update($this->validateArticle());
        return redirect(route('articles.show',$article));
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title'=>'required',
            'excerpt'=>'required',
            'body'=>'required'    
        ]);
    }
}

//APP/HTTP/CONTROLLER/ProjectsController.php
<?php
namespace App\Http\Controllers;
use App\project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(project $project)
    {
        //
    }
}

//APP/HTTP/CONTROLLER/ProjectsController.php
