//postcontroller.php
//extracting data from database and displaying it on page

<?php
namespace App\Http\controllers;
class postcontroller extends controller
{
    public function show($slug)
    {
        $post =\DB::table('posts')->where('slug',$slug)->first();

       
        return view('post',[
            'post' => $post
        ]);
        
    }
}
