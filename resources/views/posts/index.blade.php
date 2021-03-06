@extends('layouts.app')

@section('title', $title)

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background: center 75% / cover no-repeat url('/images/posts-index-header.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">The Garage &amp; Gate Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>{{ $title }} <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">

                        @forelse($posts as $post)
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
                        @empty
                            <div class="w-100 p-4">
                                <h3 class="display-4">No Results Found</h3>
                                <hr>
                                <p class="lead">Sorry, no results found for: <span class="font-weight-bold text-dark">{{ app('request')->input('search') }}</span></p>
                            </div>
                        @endforelse

                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="sidebar-wrap">
                        <div class="sidebar-box p-4 about text-center ftco-animate">
                            <h2 class="heading mb-4">About Us</h2>
                            <div class="text pt-4">
                                <p>
                                    Welcome to <span class="font-weight-bold">The Garage Blog</span>! We are the most authoritative garage door blog on the web. Here you will find a collection of the latest news, technology, laws, DIY guides, and other updates in the garage door and gate industry.
                                </p>
                            </div>
                        </div>
                        <div class="sidebar-box p-4 ftco-animate">
                            <form action="/results" method="get" class="search-form">
                                <div class="form-group">
                                    <span class="icon icon-search"></span>
                                    <input type="text" name="search" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box categories text-center ftco-animate px-4 pb-4">
                            <h2 class="heading mb-4">Popular Tags</h2>
                            @foreach ($popularTags->slice(0, 10) as $tag)
                                <a href="{{ $tag->path() }}" class="btn btn-outline-secondary btn-sm mb-1">{{ substr($tag->name, 0, 23) }}</a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
