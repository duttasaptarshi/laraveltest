Route::get('/test', function () {
    return view('test');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    $name = request('name');

    return view('test',[
    'name' => $name
    ]);
});
