<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    protected $dates = [
        'created_at',
        'updated_at',
        'publication_date'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function authorInfo()
    {
        return $this->belongsTo(Author::class, 'author', 'name');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function path()
    {
        return '/posts/' . $this->slug;
    }
}
