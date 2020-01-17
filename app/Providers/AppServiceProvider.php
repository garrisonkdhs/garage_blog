<?php

namespace App\Providers;

use App\Post;
use App\Tag;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view) {
            $popularTags = Tag::join('post_tag', 'post_tag.tag_id', '=', 'tags.id')
                ->groupBy('tags.id')
                ->get(['tags.id', 'tags.name', DB::raw('count(tags.id) as tag_count')])
                ->sortByDesc('tag_count');

            $view->with('popularTags', $popularTags);
        });

        View::composer('posts.show', function($view) {
            $latestPosts = Post::latest('publication_date')->where('featured_img_path', '!=', '')->whereNotNull('featured_img_path')->take(3)->get();

            $view->with('latestPosts', $latestPosts);
        });
    }
}
