<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $authors = Author::paginate(6);
        return view('authors.index', compact('authors'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Author $author)
    {
        $authorPosts = $author->posts()->paginate(3);
        return view('authors.show', compact('author', 'authorPosts'));
    }
}
