@extends('layouts.app')

@section('title', $post->title)

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ $post->featured_img_path }}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">{{ $post->title }}</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span class="mr-2"><a href="/posts">Blog <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>{{ $post->title }}<i class="ion-ios-arrow-forward"></i></span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 order-lg-last ftco-animate">
                    {!! $post->body !!}
                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            @foreach($post->tags as $tag)
                                <a href="#" class="tag-cloud-link">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div> <!-- .col-md-8 -->

                <div class="col-lg-4 sidebar pr-lg-5 ftco-animate">
                    <div class="sidebar-box">
                        <form action="/results" class="search-form">
                            <div class="form-group">
                                <span class="icon icon-search"></span>
                                <input type="text" name="search" class="form-control" placeholder="Type a keyword and hit enter">
                            </div>
                        </form>
                    </div>
                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading mb-4">Recent Posts</h3>

                        @foreach($latestPosts as $latestPost)
                            <div class="block-21 mb-4 d-flex">
                                <a class="blog-img mr-4" style="background-image: url({{ $latestPost->featured_img_path }});"></a>
                                <div class="text">
                                    <h3><a href="{{ $latestPost->path() }}">{{ $latestPost->title }}</a></h3>
                                    <div class="meta">
                                        <div><a href="{{ $latestPost->path() }}"><span class="icon-calendar"></span> {{ $latestPost->publication_date->format('M d, Y') }}</a></div>
                                        <div><a href="#"><span class="icon-tag"></span> {{ $latestPost->tags[0]->name }}</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading mb-4">Tag Cloud</h3>
                        <div class="tagcloud">
                            @foreach($popularTags as $tag)
                                <a href="#" class="tag-cloud-link">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading mb-4">About Us</h3>
                        <p>
                            Welcome to <span class="font-weight-bold">The Garage Blog</span>! We are the most authoritative garage door blog on the web. Here you will find a collection of the latest news, technology, laws, DIY guides, and other updates in the garage door and gate industry.

                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section> <!-- .section -->
@endsection
