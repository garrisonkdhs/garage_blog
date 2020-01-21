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
use Illuminate\Support\Facades\Mail;

// Main Page
Route::get('/', function() {
    $posts = Post::latest('publication_date')->where('featured_img_path', '!=', '')->whereNotNull('featured_img_path')->take(25)->get();

    return view('pages.home', compact('posts'));
});

// About Page
Route::get('/about', function () {
    return view('pages.about');
});

// Contact Page
Route::get('/contact', function () {
    return view('pages.contact');
});

// Terms and Conditions Page
Route::get('/terms-and-conditions', function () {
    return view('pages.terms');
});

// Privacy Policy Page
Route::get('/privacy-policy', function () {
    return view('pages.privacy');
});

// Posts Pages
Route::get('/posts', 'PostController@index');
Route::get('/posts/{post}', 'PostController@show');

// Author Pages
Route::get('/authors', 'AuthorController@index');
Route::get('/authors/{author}', 'AuthorController@show');

// Tag Pages
Route::get('/tags/{tag}', 'TagController@show');

// New Subscriber
Route::post('/subscribe', 'SubscriberController@store');

// Search Posts
Route::get('/results', function (Request $request) {
    $request->validate([
        'search' => 'required'
    ]);
    $title = 'Search Results';
    $posts = Post::latest('publication_date')->where('title', 'like', '%' . $request->search . '%')->paginate(6);
    return view('posts.index', compact('posts', 'title'));
});

// Submit Contact Form
Route::post('/contact/submit', function () {
    request()->validate([
        'name' => 'required',
        'email' => 'required|email',
        'subject' => 'required',
        'message' => 'required'
    ]);

    Mail::raw(request('message'), function ($message) {
        $message->to('garageblogger@gmail.com')
            ->from(request('email'), request('name'))
            ->subject(request('subject'));
    });

    return redirect('/contact')->with('message', 'Email sent!');
});
