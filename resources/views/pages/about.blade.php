@extends('layouts.app')

@section('title', 'About Us')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('/images/about-page-header.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">About Us</h1>
                    <p class="breadcrumbs">
                        <span class="mr-2">
                            <a href="/">Home <i class="ion-ios-arrow-forward"></i></a>
                        </span>
                        <span>
                            About us <i class="ion-ios-arrow-forward"></i>
                        </span>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img" id="section-counter">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-self-stretch" style="background-image:url(/images/about-us.jpg);"></div>
                </div>
                <div class="col-md-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4"><span>Inside the Garage Blog</span></h2>
                            <p>Welcome inside the <strong>Garage Blog</strong>! The Garage Blog is a collection of the most well-known and respected bloggers in the garage door and gate industry. Here you can expect to find all of the latest tech, laws, updates, and other news in the garage door and gate industry.</p>
                            <p>The Garage Blog is made up of both guest and original content related to the garage door and gate world. Think of it as your one stop shop for all that's happening on the garage and gate scene.</p>
                            <p>We are not affiliated with any of the garage door or gate companies whom we may post from. The content we choose to post is chosen solely based upon its own merit, or the known authority of its author. Because of this, you can be assured that you will only find the highest quality information from the most trusted sources.</p>
                            <p>From the latest garage door tech, to detailed D.I.Y. garage and gate repair guides, you can find it all, right here at the Garage Blog!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
