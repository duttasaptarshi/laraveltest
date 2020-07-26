//ROUTES/web.php
//creating a test page
Route::get('/test', function () {
    return view('test');
});
//creating a welcome page
Route::get('/welcome', function () {
    return view('welcome');
});
//pass request data to views
Route::get('/', function () {
    $name = request('name');

    return view('test',[
    'name' => $name
    ]);
});

//CONTROLLERS/postcontroller.php
//creating the controllers & routing to controllers
<?php
namespace App\Http\controllers;
class postcontroller 
{
    public function show($slug)
    {
        $posts = [
            'myfirstpost'=>'hello,this is my first post!'
            'mysecondpost'=>'now i am getting hang of this'
            ];
            if(!array_key_exist($post,$posts)){
                abort(404,'page not found!');
            }
            return view('post',[
            'post' => $post[$post]
        ]);
    }
}

//VIEWS/post.blade.php
//creating view page
<!doctype html>
<html lang="en">
<head>
    <meta chatset ="UTF-8">
    <meta
        name="viewport"
        content="width=device=width,user=scalable=no,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0"
    >
    <meta
        http-equiv="X-UA-compatible"
        content="ie=edge"
    >
    <title>Document</title>
</head>
<body>
<hl>Document</hl>
<p>{{ $name }}</p>
</body>
</html>


