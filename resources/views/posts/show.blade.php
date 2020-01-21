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
                        <span>{{ $post->title }}</span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 order-lg-last ftco-animate">
                    @if($post->authorInfo->permission)
                        {!! $post->body !!}

                        <div class="mt-5">
                            <span class="font-weight-bold">Reposted with permission from:</span> <a href="{{ $post->source_url }}" target="_blank">{{ $post->source_url }}</a>
                        </div>
                    @else
                        <blockquote cite="{{ $post->source_url }}">
                            {!! substr($post->body, 0, 600) . '...' !!}
                            <footer>- {{ $post->author }}, <cite>{{ $post->authorInfo->website }}</cite></footer>
                        </blockquote>

                        <div class="my-5 text-center">
                            <a class="btn btn-primary px-3 px-md-4 py-3" href="{{ $post->source_url }}" target="_blank">Read Full Post</a>
                        </div>
                    @endif

                    <div class="tag-widget post-tag-container mb-5 mt-5">
                        <div class="tagcloud">
                            @foreach($post->tags as $tag)
                                <a href="{{ $tag->path() }}" class="tag-cloud-link">{{ $tag->name }}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="about-author d-md-flex p-4 bg-light">
                        <div class="bio mr-5">
                            <a href="{{ $post->authorInfo->path() }}" class=" mb-3 bg-white rounded-circle d-flex align-items-center justify-content-center" style="width: 150px; height: 150px;">
                                <img src="{{ $post->authorInfo->logo_img_path }}" alt="{{ $post->author }}" class="w-75">
                            </a>
                        </div>
                        <div class="desc">
                            <h3>
                                <a href="{{ $post->authorInfo->path() }}" class="text-dark">{{ $post->author }}</a>
                            </h3>
                            <p>
                                <a class="text-secondary" href="{{ $post->authorInfo->path() }}">
                                    {{ substr(strip_tags($post->authorInfo->about), 0, 150) . '...' }}
                                </a>
                            </p>
                            <a href="{{ $post->authorInfo->website }}" target="_blank">{{ $post->authorInfo->website }}</a>
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
