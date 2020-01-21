@extends('layouts.app')

@section('title', 'Authors | ' . $author->name)

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background: center center / cover no-repeat url('/images/authors-index-header.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">{{ $author->name }}</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span>
                        <span class="mr-2"><a href="/authors">Authors <i class="ion-ios-arrow-forward"></i></a></span>
                        <span>{{ $author->name }}</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 order-lg-last ftco-animate">
                    <img src="{{ $author->logo_img_path }}" class="img-fluid mb-4" alt="{{ $author->name }}">

                    {!! $author->about !!}

                    <p>
                        <a href="{{ $author->website }}" target="_blank">{{ $author->website }}</a>
                    </p>

                    <hr>

                    <div class="row">
                        <h3 class="py-3">Posts By {{ $author->name }}</h3>

                        @foreach($authorPosts as $post)
                            <div class="col-md-6 col-lg-12 ftco-animate">
                                <div class="blog-entry d-lg-flex">
                                    <div class="half">
                                        <a href="{{ $post->path() }}" class="img d-flex align-items-end" style="background-image: url('{{ $post->featured_img_path }}');">
                                            <div class="overlay"></div>
                                        </a>
                                    </div>
                                    <div class="text px-md-4 px-lg-5 half pt-3">
                                        <p class="meta d-flex">
                                            <span class="pr-3">{{ $post->tags[0]->name }}</span><span class="ml-auto pl-3">{{ $post->publication_date->format('M d, Y') }}</span>
                                        </p>
                                        <h3><a href="{{ $post->path() }}">{{ $post->title }}</a></h3>
                                        <p>{{ substr(strip_tags($post->body), 0, 150) . '...' }}</p>
                                        <p class="mb-0"><a href="{{ $post->path() }}" class="btn btn-primary">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="mt-5">
                            {{ $authorPosts->links() }}
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
                                        <div><a href="{{ $latestPost->tags[0]->path() }}"><span class="icon-tag"></span> {{ $latestPost->tags[0]->name }}</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="sidebar-box ftco-animate">
                        <h3 class="heading mb-4">Tag Cloud</h3>
                        <div class="tagcloud">
                            @foreach($popularTags->slice(0, 10) as $tag)
                                <a href="{{ $tag->path() }}" class="tag-cloud-link">{{ $tag->name }}</a>
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
