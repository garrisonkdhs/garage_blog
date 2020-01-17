<?php

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

use App\Post;
use App\Tag;
use Illuminate\Http\Request;

// Main Page
Route::get('/', function() {
    $posts = Post::latest('publication_date')->where('featured_img_path', '!=', '')->whereNotNull('featured_img_path')->take(25)->get();

    return view('home', compact('posts'));
});

// Posts Pages
Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');

// New Subscriber
Route::post('/subscribe', 'SubscriberController@store');

// Search Posts
Route::get('/results', function (Request $request) {
    $request->validate([
        'search' => 'required'
    ]);
    $posts = Post::latest('publication_date')->where('title', 'like', '%' . $request->search . '%')->paginate(6);
    return view('posts.index', compact('posts'));
});
