<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'author', 'name')->latest('publication_date');
    }

    public function path()
    {
        return '/authors/' . $this->slug;
    }
}
