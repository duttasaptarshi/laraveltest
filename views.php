//RESOURCES/views/contact.blade.php
@extends ('layout')
@section ('content')
    <h1>hello world!</h1>
@endsection
//RESOURCES/views/welcome.blade.php
@extends ('layout')
@section ('content')
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <div class="content">
                <div class="title m-b-md">
                    Laracasts
                </div>
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
//RESOURCES/views/welcome.blade.php
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
            @yield('content')
    </body>
</html>
//ROUTES/web.php
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/', function () {
    return view('welcome');
});
//after downloading a templete and making changes to it,also sql table is created for giving data to the pages.
//RESOUCES/VIEWS/about.blade.php
@extends ('layout')
@section ('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Welcome to our website</h2>
				<span class="byline">Mauris vulputate dolor sit amet nibh</span> </div>
			<p><img src="images/banner.jpg" alt="" class="image image-full" /> </p>
			<p>Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo. Aliquam lacinia metus ut elit. Suspendisse iaculis mauris nec lorem. Donec leo. Vivamus fermentum nibh in augue. Praesent a lacus at urna congue rutrum. Nulla enim eros, porttitor eu, tempus id, varius non, nibh. </p>
			<p>Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo.</p>
			<p>Donec condimentum, urna non molestie semper, ligula enim ornare nibh, quis laoreet eros quam eget ante. Aliquam libero. Vivamus nisl nibh, iaculis vitae, viverra sit amet, ullamcorper vitae, turpis. Aliquam erat volutpat. Vestibulum dui sem, pulvinar sed, imperdiet nec, iaculis nec, leo. Fusce odio. Etiam arcu dui, faucibus eget, placerat vel, sodales eget, orci. Donec ornare neque ac sem. Mauris aliquet. Aliquam sem leo, vulputate sed, convallis at, ultricies quis, justo. Donec nonummy magna quis risus. Quisque eleifend. Phasellus tempor vehicula justo.</p>
		</div>
		<div id="sidebar">
			<ul class="style1">
				@foreach ($articles as $article)
					<li class="first">
						<h3>{{$article->title}}</h3>
						<p><a href="#">{{$article->excerpt}}</a></p>
					</li>
				@endforeach	
			</ul>
			<div id="stwo-col">
				<div class="sbox1">
					<h2>Etiam rhoncus</h2>
					<ul class="style2">
						<li><a href="#">Semper quis egetmi dolore</a></li>
						<li><a href="#">Quam turpis feugiat dolor</a></li>
						<li><a href="#">Amet ornare hendrerit lectus</a></li>
						<li><a href="#">Quam turpis feugiat dolor</a></li>
					</ul>
				</div>
				<div class="sbox2">
					<h2>Integer gravida</h2>
					<ul class="style2">
						<li><a href="#">Semper quis egetmi dolore</a></li>
						<li><a href="#">Quam turpis feugiat dolor</a></li>
						<li><a href="#">Consequat lorem phasellus</a></li>
						<li><a href="#">Amet turpis feugiat amet</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
//RESOUCES/VIEWS/layout.blade.php
<!DOCTYPE html>
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="css/default.css" rel="stylesheet" />
<link href="css/fonts.css" rel="stylesheet"  />
<link
	rel="stylesheet" href="/css/app.css"/>
</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1><a href="/">SimpleWork</a></h1>
		</div>
		<div id="menu">
			<ul>
				<li class="{{Request::path() === '/'?'current_page_item':''}}"><a href="/" accesskey="1" title="">Homepage</a></li>
				<li class="{{Request::path() === 'client'?'current_page_item':''}}"><a href="#" accesskey="2" title="">Our Clients</a></li>
				<li class="{{Request::path() === 'about'?'current_page_item':''}}"><a href="/about" accesskey="3" title="">About Us</a></li>
				<li class="{{Request::path() === 'careers'?'current_page_item':''}}"><a href="#" accesskey="4" title="">Careers</a></li>
				<li class="{{Request::path() === 'contact'?'current_page_item':''}}"><a href="#" accesskey="5" title="">Contact Us</a></li>
			</ul>
		</div>
	</div>
	@yield('header')
</div>
    @yield('content')
    <div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
	<script scr="/is/app.is"></script>
</body>
</html>
//RESOUCES/VIEWS/welcome.blade.php
@extends ('layout')

@section('header')
<div id="header-featured">
		<div id="banner-wrapper">
			<div id="banner" class="container">
				<h2>Maecenas luctus lectus</h2>
				<p>This is <strong>SimpleWork</strong>, a free, fully standards-compliant CSS template designed by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>. The photos in this template are from <a href="http://fotogrph.com/"> Fotogrph</a>. This free template is released under the <a href="http://templated.co/license">Creative Commons Attribution</a> license, so you're pretty much free to do whatever you want with it (even use it commercially) provided you give us credit for it. Have fun :) </p>
				<a href="#" class="button">Etiam posuere</a> </div>
		</div>
    </div>
@endsection
//RESOURCES/VIEWS/article/index.php
<div id="wrapper">
	<div id="page" class="container">
        @foreach($articles as $article)
            <div id="content">
                <div class="title">
                    <h2>
                        <a href = "/articles/{{$article -> id}}">
                        {{$article -> title}}
                        </a>
                    </h2>
                </div>
                <p>
                    <img 
                    src="/images/banner.jpg" 
                    alt="" 
                    class="image image-full" 
                    /> 
                </p>
                {!! $article -> excerpt!!}
            </div>
        @endforeach	
	</div>
</div>
//RESOURCES/VIEWS/article/create.php
@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">"/>
@endsection
@section('content')
<div id="wrapper">
	<div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4" >New Article</h1>
        <form method="POST" action="/articles">
            @csrf
            <div class="field">
                <label class="label" for="title">Title</label>   

                <div class="control">
                    <input class="input" type="text" name="title" id="title">
                </div>
            </div>
            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>   

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt"></textarea>
                </div>
            </div>
            <div class="field">
                <label class="label" for="excerpt">Body</label>   

                <div class="control">
                    <textarea class="textarea" name="body" id="body"></textarea>
                </div>
            </div>
            <div class="field is-grouped">
                <div label class="controll">   
                    <button class="button is-link" type="submit">Submit</button>
                </div
            </div>
        </form>  
    </div>
</div>
@endsection
//RESOURCES/VIEWS/article/edit.php
@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/css/bulma.min.css">"/>
@endsection
@section('content')
<div id="wrapper">
	<div id="page" class="container">
        <h1 class="heading has-text-weight-bold is-size-4" >Update Article</h1>
        <form method="POST" action="/articles/{{$article->id}}">
            @csrf
            @method('PUT')
            <div class="field">
                <label class="label" for="title">Title</label>   

                <div class="control">
                    <input class="input" type="text" name="title" id="title" value="{{$article->title}}">
                </div>
            </div>
            <div class="field">
                <label class="label" for="excerpt">Excerpt</label>   

                <div class="control">
                    <textarea class="textarea" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
                </div>
            </div>
            <div class="field">
                <label class="label" for="excerpt">Body</label>   

                <div class="control">
                    <textarea class="textarea" name="body" id="body">{{$article->body}}</textarea>
                </div>
            </div>
            <div class="field is-grouped">
                <div label class="controll">   
                    <button class="button is-link" type="submit">Submit</button>
                </div
            </div>
        </form>  
    </div>
</div>
@endsection
//RESOURCES/VIEWS/article/show.php
@extends ('layout')
@section ('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{$article -> title}}</h2>
				<span class="byline">{{$article -> excerpt}}</span></div>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
            {{$article -> body}}
    	</div>	
	</div>
</div>
@endsection
//updating the controller
//APPS/CONTROLLER/ArticleController.php
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
