@extends('layouts.default')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_4.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h1 class="mb-3 bread">Western Dessert</h1>
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Foods <i class="ion-ios-arrow-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>


    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
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
                                <a href="{{ route('food4')}}" class="img-2"><img src="images/new-blog-4-2.jpg" class="img-fluid" alt="Colorlib Template"></a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('food4')}}">Small Batch Grapefruit Olive Oil Yogurt Baked Donuts Recipe</a></h3>
                                    <p class="mb-0"><a href="{{ route('food4')}}" class="btn btn-black py-2">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('food5')}}" class="img-2"><img src="images/new-blog-5.jpg" class="img-fluid" alt="Colorlib Template"></a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('food5')}}">Basic Banana Chocolate Chip Muffin Recipe</a></h3>
                                    <p class="mb-0"><a href="{{ route('food5')}}" class="btn btn-black py-2">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('food6')}}" class="img-2"><img src="images/new-blog-6.jpg" class="img-fluid" alt="Colorlib Template"></a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('food6')}}">Extra Flaky Sky High Cheddar Scallion Biscuits</a></h3>
                                    <p class="mb-0"><a href="{{ route('food6')}}" class="btn btn-black py-2">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('food7')}}" class="img-2"><img src="images/new-blog-7.jpg" class="img-fluid" alt="Colorlib Template"></a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('food7')}}">Sky-High Strawberry Muffin Recipe</a></h3>
                                    <p class="mb-0"><a href="{{ route('food7')}}" class="btn btn-black py-2">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('food8')}}" class="img-2"><img src="images/new-blog-8.jpg" class="img-fluid" alt="Colorlib Template"></a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('food8')}}">Small Batch Baking: How to Create a Small Sourdough Starter and Bake a Small Sourdough Loaf</a></h3>
                                    <p class="mb-0"><a href="{{ route('food8')}}" class="btn btn-black py-2">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 ftco-animate">
                            <div class="blog-entry">
                                <a href="{{ route('food9')}}" class="img-2"><img src="images/new-blog-9.jpg" class="img-fluid" alt="Colorlib Template"></a>
                                <div class="text pt-3">
                                    <p class="meta d-flex"><span class="pr-3">Dessert</span><span class="ml-auto pl-3">March 01, 2018</span></p>
                                    <h3><a href="{{ route('food9')}}">Mini Everything Pretzel Dogs Recipe</a></h3>
                                    <p class="mb-0"><a href="{{ route('food9')}}" class="btn btn-black py-2">Read More <span class="icon-arrow_forward ml-4"></span></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col text-center">
                            <div class="block-27">
                                <ul>
                                    <li><a href="{{ route('food')}}">1</a></li>
                                    <li><a href="{{ route('foodarticle2')}}">2</a></li>
                                    <li><a href="{{ route('foodarticle3')}}">3</a></li>
                                    <li class="active"><span>4</span></li>
                                    <li><a href="{{ route('foodarticle5')}}">5</a></li>
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

    @endsection
