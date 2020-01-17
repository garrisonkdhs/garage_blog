@extends('layouts.app')

@section('title', 'Welcome To The Blog')

@section('content')
    <section class="home-slider owl-carousel">
        @foreach ($posts->slice(0, 3) as $post)
            <div class="slider-item">
                <div class="container">
                    <div class="row d-flex slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                        <div class="img" style="background-image: url({{ $post->featured_img_path }});"></div>

                        <div class="text d-flex align-items-center ftco-animate">
                            <div class="text-2 pb-lg-5 mb-lg-4 px-4 px-md-5">
                                <h3 class="subheading mb-3">Featured Posts</h3>
                                <h1 class="mb-5">{{ $post->title }}</h1>
                                <p><a href="{{ $post->path() }}" class="btn btn-black px-3 px-md-4 py-3">Read More <span class="icon-arrow_forward ml-lg-4"></span></a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 heading-section ftco-animate">
                    <h2 class="mb-4"><span>Recent Stories</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-last col-lg-6 ftco-animate">
                    <div class="blog-entry">
                        <div class="img img-big d-flex align-items-end" style="background-image: url({{ $posts[4]->featured_img_path }});">
                            <div class="overlay"></div>
                            <div class="text">
                                <span class="subheading">{{ $posts[4]->tags[0]->name }}</span>
                                <h3><a href="{{ $posts[4]->path() }}">{{ $posts[4]->title }}</a></h3>
                                <p class="mb-0"><a href="{{ $posts[4]->path() }}" class="btn-custom">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        @foreach ($posts->slice(5, 4) as $post)
                            <div class="col-md-6 ftco-animate">
                                <div class="blog-entry">
                                    <a href="{{ $post->path() }}" class="img d-flex align-items-end" style="background-image: url({{ $post->featured_img_path }});">
                                        <div class="overlay"></div>
                                    </a>
                                    <div class="text pt-3">
                                        <p class="meta d-flex"><span class="pr-3">{{ $post->tags[0]->name }}</span><span class="ml-auto pl-3">{{ $post->publication_date->format('M d, Y') }}</span></p>
                                        <h3><a href="{{ $post->path() }}">{{ $post->title }}</a></h3>
                                        <p class="mb-0"><a href="{{ $post->path() }}" class="btn-custom">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4"><span>Featured Posts</span></h2>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($posts->slice(9, 3) as $post)
                            <div class="col-md-4 ftco-animate">
                                <div class="blog-entry">
                                    <a href="{{ $post->path() }}" class="img-2"><img src="{{ $post->featured_img_path }}" class="img-fluid" alt="{{ $post->title }}"></a>
                                    <div class="text pt-3">
                                        <p class="meta d-flex"><span class="pr-3">{{ $post->tags[0]->name }}</span><span class="ml-auto pl-3">{{ $post->publication_date->format('M d, Y') }}</span></p>
                                        <h3><a href="{{ $post->path() }}">{{ $post->title }}</a></h3>
                                        <p class="mb-0"><a href="{{ $post->path() }}" class="btn btn-black py-2">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="sidebar-wrap">
                        <div class="sidebar-box px-4 pt-4 about text-center ftco-animate">
                            <h2 class="heading mb-4">About Us</h2>
                            <div class="text">
                                <p class="text-center">
                                    Welcome to <span class="font-weight-bold">The Garage Blog</span>! We are the most authoritative garage door blog on the web. Here you will find a collection of the latest news, technology, laws, DIY guides, and other updates in the garage door and gate industry.
                                </p>
                            </div>
                        </div>
                        <div class="px-4 pb-4">
                            <h6 class="mb-4">Popular Tags:</h6>
                            @foreach ($popularTags->slice(0, 5) as $tag)
                                <a href="#" class="btn btn-outline-secondary btn-sm mb-1">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
