@extends('layouts.default')

@section('content')
    <section class="home-slider owl-carousel">
        <div class="slider-item">
            <div class="container">
                <div class="row d-flex slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="img" style="background-image: url(images/new-blog-1.jpg);"></div>

                    <div class="text d-flex align-items-center ftco-animate">
                        <div class="text-2 pb-lg-5 mb-lg-4 px-4 px-md-5">
                            <h3 class="subheading mb-3">Featured Posts</h3>
                            <h1 class="mb-5">Tamagoyaki French Toast</h1>
                            <p class="mb-md-5">This Japanese tamagoyaki-inspired french toast is soft and custardy on the inside and crisp on the outside.</p>
                            <p><a href="{{ route('food1')}}" class="btn btn-black px-3 px-md-4 py-3">Read More <span class="icon-arrow_forward ml-lg-4"></span></a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="slider-item">
            <div class="container">
                <div class="row d-flex slider-text justify-content-center align-items-center" data-scrollax-parent="true">

                    <div class="img" style="background-image: url(images/new-image_1.jpg);"></div>

                    <div class="text d-flex align-items-center ftco-animate">
                        <div class="text-2 pb-lg-5 mb-lg-4 px-4 px-md-5">
                            <h3 class="subheading mb-3">Featured Posts</h3>
                            <h1 class="mb-5">Khmer Hot and Sour Coconut Fish Soup</h1>
                            <p class="mb-md-5">Fish Soup: Healthy and Wholesome Somlar Machu Ktiss is almost as complex as Cambodian curry.</p>
                            <p><a href="{{ route('fooda1')}}" class="btn btn-black px-3 px-md-4 py-3">Read More <span class="icon-arrow_forward ml-lg-4"></span></a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-7 heading-section ftco-animate">
                    <h2 class="mb-4"><span>Recent Khmer Dishes</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 order-md-last col-lg-6 ftco-animate">
                    <div class="blog-entry">
                        <div class="img img-big d-flex align-items-end" style="background-image: url(images/new-image_4.jpg);">
                            <div class="overlay"></div>
                            <div class="text">
                                <span class="subheading">Food</span>
                                <h3><a href="{{ route('fooda4')}}">Salaw Machu Kroeung: A favourite Cambodian food recipe!</a></h3>
                                <p class="mb-0"><a href="{{ route('fooda4')}}" class="btn-custom">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('fooda2')}}" class="img d-flex align-items-end" style="background-image: url(images/new-image_2.jpg);">
                                    <div class="overlay"></div>
                                </a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('fooda2')}}">Cambodian Spicy Papaya Beef Salad Recipe (Lahong Plea Sach Ko)</a></h3>
                                    <p class="mb-0"><a href="{{ route('fooda2')}}" class="btn-custom">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('fooda3')}}" class="img d-flex align-items-end" style="background-image: url(images/new-image_3.jpg);">
                                    <div class="overlay"></div>
                                </a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('fooda3')}}">Num Ansom Chek Recipe: A Popular Cambodian Dessert</a></h3>
                                    <p class="mb-0"><a href="{{ route('fooda3')}}" class="btn-custom">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('fooda6')}}" class="img d-flex align-items-end" style="background-image: url(images/new-image_6.jpg);">
                                    <div class="overlay"></div>
                                </a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('fooda6')}}">Cambodian Food Recipe: How to make Cambodian Kaw Sach Chrouk</a></h3>
                                    <p class="mb-0"><a href="{{ route('fooda6')}}" class="btn-custom">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('fooda5')}}" class="img d-flex align-items-end" style="background-image: url(images/new-image_5.jpg);">
                                    <div class="overlay"></div>
                                </a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('fooda5')}}">Cambodian Pumpkin Custard Recipe: Sangkhaya lapov with a Japanese Twist</a></h3>
                                    <p class="mb-0"><a href="{{ route('fooda5')}}" class="btn-custom">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
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
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('food3')}}" class="img-2"><img src="images/new-blog-3.jpg" class="img-fluid" alt="Colorlib Template"></a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('food3')}}">Soft Scrambled Eggs and Spicy Chorizo Breakfast Nachos</a></h3>
                                    <p class="mb-0"><a href="{{ route('food3')}}" class="btn btn-black py-2">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('food1')}}" class="img-2"><img src="images/new-blog-1.jpg" class="img-fluid" alt="Colorlib Template"></a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('food1')}}">Extra Fluffy, Super Soft and Custard-y Japanese Style Tamagoyaki French Toast</a></h3>
                                    <p class="mb-0"><a href="{{ route('food1')}}" class="btn btn-black py-2">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('food2')}}" class="img-2"><img src="images/new-blog-2.jpg" class="img-fluid" alt="Colorlib Template"></a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('food2')}}">Mile High Mini Japanese Soufflé Pancakes Recipe</a></h3>
                                    <p class="mb-0"><a href="{{ route('food2')}}" class="btn btn-black py-2">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
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
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-section-about ftco-no-pb bg-darken">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-9 order-md-last img py-5" style="background-image: url('images/bg_6.jpg');"></div>

                <div class="col-sm-6 col-md-6 col-lg-3 py-4 text d-flex align-items-center ftco-animate">
                    <div class="text-2 py-5 px-4">
                        <p class="mb-5"><a href="https://www.youtube.com/watch?v=tjbln230JX0" class="btn-custom popup-youtube">Watch Video <span class="ion-ios-play ml-4"></span></a></p>
                        <h1 class="mb-5">Veasna <br> The Internet Chef</h1>
                        <p class="mb-md-5">“I wanted to give people a true Khmer dining experience, to serve the type of food we ate at home when I was a child. Also, to be able to talk to people about my country, and culture.”</p>
                        <span class="signature">Veasna.Kay</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4"><span>Holiday Seasons Recipes</span></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-lg-6 ftco-animate">
                            <div class="blog-entry">
                                <div class="img img-big img-big-2 d-flex align-items-end" style="background-image: url(images/new-blog-5.jpg);">
                                    <div class="overlay"></div>
                                    <div class="text">
                                        <span class="subheading">Food</span>
                                        <h3><a href="{{ route('food5')}}">Basic Banana Chocolate Chip Muffin Recipe</a></h3>
                                        <p class="mb-0"><a href="#" class="btn-custom">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 ftco-animate">
                            <div class="blog-entry">
                                <div class="img img-big img-big-2 d-flex align-items-end" style="background-image: url(images/new-blog-7.jpg);">
                                    <div class="overlay"></div>
                                    <div class="text">
                                        <span class="subheading">Lifestyle</span>
                                        <h3><a href="{{ route('food7')}}">Sky-High Strawberry Muffin Recipe</a></h3>
                                        <p class="mb-0"><a href="#" class="btn-custom">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="sidebar-wrap pt-4">
                        <div class="sidebar-box categories text-center ftco-animate">
                            <h2 class="heading mb-4">Categories</h2>
                            <ul class="category-image">
                                <li>
                                    <a href="foods.html" class="img d-flex align-items-center justify-content-center text-center" style="background-image: url(images/category-1.jpg);">
                                        <div class="text">
                                            <h3>Foods</h3>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="lifestyle.html" class="img d-flex align-items-center justify-content-center text-center" style="background-image: url(images/category-2.jpg);">
                                        <div class="text">
                                            <h3>Lifestyle</h3>
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

    <section class="ftco-counter ftco-section ftco-no-pt ftco-no-pb img" id="section-counter">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 d-flex">
                    <div class="img d-flex align-self-stretch" style="background-image:url(images/about.jpg);"></div>
                </div>
                <div class="col-md-6 pl-md-5 py-5">
                    <div class="row justify-content-start pb-3">
                        <div class="col-md-12 heading-section ftco-animate">
                            <h2 class="mb-4">About KhmerRecipes</h2>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-5 bg-light mb-4">
                                <div class="text">
                                    <strong class="number" data-number="10">0</strong>
                                    <span>Years of Experienced</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-5 bg-light mb-4">
                                <div class="text">
                                    <strong class="number" data-number="200">0</strong>
                                    <span>Foods</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-5 bg-light mb-4">
                                <div class="text">
                                    <strong class="number" data-number="300">0</strong>
                                    <span>Lifestyle</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 justify-content-center counter-wrap ftco-animate">
                            <div class="block-18 text-center py-5 bg-light mb-4">
                                <div class="text">
                                    <strong class="number" data-number="40">0</strong>
                                    <span>Happy Customers</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
