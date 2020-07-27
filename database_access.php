//CONTROLLERS/postcontroller.php
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

//.ENV
//checking .env to create database using tableplus
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel7
DB_USERNAME=root
DB_PASSWORD=

//ROUTES/map.php
//creating routes
Route::get('/posts/{post}', 'postcontroller@show');

//Introduction to eloquent
//creating a post.php in app to config eloquent
//APPS/post.php
<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{ //
}

//making change in controllers,puling in post.
//CONTROLLERS/postcontroller.php
<?php
namespace App\Http\controllers;
use DB;
use App\Post;
class postcontroller extends controller
{
    public function show($slug)
    {
        $post = post::where('slug',$slug)->firstorfail();
        return view('post',[
            'post' => $post
        ]);   
    }
}

//command for migration(for table creation)
php artisan migrate
php artisan make:migration create_posts_table
//a php file is created in migration
//we edit the file and fill the table coloumn
//DATABASE/MIGRATION/2020_07_27_110504_create_posts_table.php
 <?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('slug');
            $table->string('title');
            $table->text('body');
            $table->timestamps();
            $table->timestamp('published_at')->nullable();
        });
    }
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
