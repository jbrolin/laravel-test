<?php
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
 * @method static \Illuminate\Database\Query\Builder|\App\MyModelName where($field, $value)
 */

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

Route::get('/', function () {
   return view('posts', [
        // return the all posts from category with out db query for each post (the n+1 select problem)
        'posts' => Post::latest('updated_at')->with('category', 'author')->get()
   ]);
});

Route::get('posts/{post:slug}', function(Post $post) {
    return view('post', [
        'post' => $post
    ]);
});

Route::get('categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('authors/{author:userName}', function(User $author) {
    return view('posts', [
        'posts' => $author->posts
    ]);
});

