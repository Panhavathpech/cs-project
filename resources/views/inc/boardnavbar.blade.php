<!DOCTYPE html>
<html lang="en">
<head>
    <title>KhmerRecipes - Spice Up Your Asian Cuisines</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animate.css')}}">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">

    <link rel="stylesheet" href="{{ asset("css/ionicons.min.css")}}">

    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/icomoon.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <script src="https://cdn.tiny.cloud/1/j7fj7nxx3ctx5cvykt987eu4t5rrxr7866gpzqs1lrtq7b4n/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea'});</script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-darken" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home')}}">KhmerRecipes Dashboard<span>.</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('home')}}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/dashboard" class="nav-link">Dashboard</a></li>
                <li class="nav-item"><a href="/posts" class="nav-link">Posts</a></li>
                <li class="nav-item"><a href="#" class="nav-link"><i class="glyphicon-user"></i>User: {{ Auth::user()->name}}</a></li>
                <li class=""><a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form></li>
            </ul>
            <ul class="nav ml-auto navbar-nav navbar-right">
                <li class="nav-item"><a href="/posts/create">Create Post</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@include('inc.messages')
@yield('content')

<footer class="ftco-footer ftco-footer-2 ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">KhmerRecipes</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-5">
                    <h2 class="ftco-heading-2">Information</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Terms of Uses</a></li>
                        <li><a href="#" class="py-2 d-block">About Stories</a></li>
                        <li><a href="#" class="py-2 d-block">Privacy Policy</a></li>
                        <li><a href="#" class="py-2 d-block">Accessibility Help</a></li>
                        <li><a href="#" class="py-2 d-block">Advertise with us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Categories</h2>
                    <ul class="list-unstyled">
                        <li><a href="#" class="py-2 d-block">Food</a></li>
                        <li><a href="#" class="py-2 d-block">Restaurant</a></li>
                        <li><a href="#" class="py-2 d-block">Dessert</a></li>
                        <li><a href="#" class="py-2 d-block">Lifestyle</a></li>
                        <li><a href="#" class="py-2 d-block">Recipes</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Have a Questions?</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon icon-map-marker"></span><span class="text">Old Market, St.724, A8 & A9 The, Krong Kampot 07000</span></li>
                            <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
                            <li><a href="{{ route('contact')}}"><span class="icon icon-envelope"></span><span class="text">info@khmerrecipes.com</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | KhmerRecipes.
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>

<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


<script src="{{ asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{ asset('js/popper.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js')}}"></script>
<script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{ asset('js/owl.carousel.min.js')}}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{ asset('js/aos.js')}}"></script>
<script src="{{ asset('js/jquery.animateNumber.min.js')}}"></script>
<script src="{{ asset('js/scrollax.min.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('js/google-map.js')}}"></script>
<script src="{{ asset('js/main.js')}}"></script>

</body>