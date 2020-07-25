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
<hl>{{ $name }}</hl>
</body>
</html>


