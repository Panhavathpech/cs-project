@extends('layouts.default')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Khmer Dishes</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Food-Blog <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-md-6 col-lg-12 ftco-animate">
                            <div class="blog-entry d-lg-flex">
                                <div class="half">
                                    <a href="{{ route('fooda1')}}" class="img d-flex align-items-end" style="background-image: url(images/new-image_1.jpg);">
                                        <div class="overlay"></div>
                                    </a>
                                </div>
                                <div class="text px-md-4 px-lg-5 half pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('fooda1')}}">Fish Soup Recipe: Khmer Hot and Sour Coconut Fish Soup (Somlar Machu Ktiss)</a></h3>
                                    <p>Fish Soup: Healthy and Wholesome Somlar Machu Ktiss (Cambodian Hot and Sour Coconut Fish Soup) is almost as complex as Cambodian curry.
                                    </p>
                                    <p class="mb-0"><a href="{{ route('fooda1')}}" class="btn btn-primary">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 ftco-animate">
                            <div class="blog-entry d-lg-flex">
                                <div class="half">
                                    <a href="{{ route('fooda2')}}" class="img d-flex align-items-end" style="background-image: url(images/new-image_2.jpg);">
                                        <div class="overlay"></div>
                                    </a>
                                </div>
                                <div class="text px-md-4 px-lg-5 half pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('fooda2')}}">Cambodian Spicy Papaya Beef Salad Recipe (Lahong Plea Sach Ko)</a></h3>
                                    <p>Plea sach ko (khmer beef tartar) and bok lahong (khmer green papaya salad), were my dad's favourite dishes.
                                    </p>
                                    <p class="mb-0"><a href="{{ route('fooda2')}}" class="btn btn-primary">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 ftco-animate">
                            <div class="blog-entry d-lg-flex">
                                <div class="half">
                                    <a href="{{ route('fooda3')}}" class="img d-flex align-items-end" style="background-image: url(images/new-image_3.jpg);">
                                        <div class="overlay"></div>
                                    </a>
                                </div>
                                <div class="text px-md-4 px-lg-5 half pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('fooda3')}}">Num Ansom Chek Recipe: A Popular Cambodian Dessert</a></h3>
                                    <p>In Cambodia, Cambodian New Year is one of our greatest national holidays and during this time most families will be making many Cambodian desserts
                                    </p>
                                    <p class="mb-0"><a href="{{ route('fooda3')}}" class="btn btn-primary">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 ftco-animate">
                            <div class="blog-entry d-lg-flex">
                                <div class="half">
                                    <a href="{{ route('fooda4')}}" class="img d-flex align-items-end" style="background-image: url(images/new-image_4.jpg);">
                                        <div class="overlay"></div>
                                    </a>
                                </div>
                                <div class="text px-md-4 px-lg-5 half pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('fooda4')}}">Salaw Machu Kroeung: A favourite Cambodian food recipe!</a></h3>
                                    <p>Salaw machu kroeung is a staple in Cambodian cooking. It literally translates to "sour soup ingredient".
                                    </p>
                                    <p class="mb-0"><a href="{{ route('fooda4')}}" class="btn btn-primary">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 ftco-animate">
                            <div class="blog-entry d-lg-flex">
                                <div class="half">
                                    <a href="{{ route('fooda5')}}" class="img d-flex align-items-end" style="background-image: url(images/new-image_5.jpg);">
                                        <div class="overlay"></div>
                                    </a>
                                </div>
                                <div class="text px-md-4 px-lg-5 half pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('fooda5')}}">Cambodian Pumpkin Custard Recipe: Sangkhaya lapov with a Japanese Twist</a></h3>
                                    <p>Cambodian Sangkhaya Lapov Recipe — A Cambodian Holiday Favourite Pumpkin pie, pumpkin spice latte, pumpkin soup.
                                    </p>
                                    <p class="mb-0"><a href="{{ route('fooda5')}}" class="btn btn-primary">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-12 ftco-animate">
                            <div class="blog-entry d-lg-flex">
                                <div class="half">
                                    <a href="{{ route('fooda6')}}" class="img d-flex align-items-end" style="background-image: url(images/new-image_6.jpg);">
                                        <div class="overlay"></div>
                                    </a>
                                </div>
                                <div class="text px-md-4 px-lg-5 half pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('fooda6')}}">Cambodian Food Recipe: How to make Cambodian Kaw Sach Chrouk</a></h3>
                                    <p>I started living on my own since I was 18. Cooking was clumsy at first. I remember being a guest at a friend’s house, and being the sweet girl that I am, I offered her some help.
                                    </p>
                                    <p class="mb-0"><a href="{{ route('fooda6')}}" class="btn btn-primary">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                <ul>
                                    <li><a href="{{ route('article')}}">1</a></li>
                                    <li><a href="{{ route('article2')}}">2</a></li>
                                    <li class="active"><span>3</span></li>
                                    <li><a href="{{ route('article4')}}">4</a></li>
                                    <li><a href="{{ route('article5')}}">5</a></li>
                                </ul>
                            </div>
                        </div>
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
