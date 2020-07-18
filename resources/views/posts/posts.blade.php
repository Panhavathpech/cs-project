@extends('layouts.default')

@section('content')
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Blog</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

<section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                    @if(count($posts) > 0)
                                @foreach($posts as $post)
                        <div class="col-md-6 col-lg-12 ftco-animate">
                            <div class="blog-entry d-lg-flex">
                                <div class="half">
                                    <a href="/posts/{{$post->id}}" class="img d-flex align-items-end" style="background-image: url(images/new-image_1.jpg);">
                                        <div class="overlay"></div>
                                    </a>
                                </div>
                                <div class="text px-md-4 px-lg-5 half pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">KhmerRecipes</span></p>
                                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                    <p>Fish Soup: Healthy and Wholesome Somlar Machu Ktiss (Cambodian Hot and Sour Coconut Fish Soup) is almost as complex as Cambodian curry.
                                    </p>
                                    <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                    <hr>
                                    <p class="mb-0"><a href="/posts/{{$post->id}}" class="btn btn-primary">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{$posts->links()}}
                    @else
                        <p class="ml-5 mb-5">No posts found</p>
                    @endif
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="sidebar-wrap">
                        <div class="sidebar-box p-4 about text-center ftco-animate">
                            <h2 class="heading mb-4">About our Author</h2>
                            <img src="images/author.jpg" class="img-fluid" alt="Colorlib Template">
                            <div class="text pt-4">
                                <p>Hi! My name is <strong>Cathy Deon</strong>, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                            </div>
                        </div>
                        <div class="sidebar-box p-4 ftco-animate">
                            <form action="#" class="search-form">
                                <div class="form-group">
                                    <span class="icon icon-search"></span>
                                    <input type="text" class="form-control" placeholder="Search">
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box categories text-center ftco-animate">
                            <h2 class="heading mb-4">Categories</h2>
                            <ul class="category-image">
                                <li>
                                    <a href="#" class="img d-flex align-items-center justify-content-center text-center" style="background-image: url(images/category-1.jpg);">
                                        <div class="text">
                                            <h3>Foods</h3>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="img d-flex align-items-center justify-content-center text-center" style="background-image: url(images/category-2.jpg);">
                                        <div class="text">
                                            <h3>Food-Blog</h3>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="img d-flex align-items-center justify-content-center text-center" style="background-image: url(images/category-2.jpg);">
                                        <div class="text">
                                            <h3>Others</h3>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection