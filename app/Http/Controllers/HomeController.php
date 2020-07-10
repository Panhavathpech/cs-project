<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function food()
    {
        return view('food');
    }

    public function foodarticle2()
    {
        return view('foodarticle2');
    }

    public function foodarticle3()
    {
        return view('foodarticle3');
    }

    public function foodarticle4()
    {
        return view('foodarticle4');
    }

    public function foodarticle5()
    {
        return view('foodarticle5');
    }

    public function article()
    {
        return view('article');
    }
   
    public function article2()
    {
        return view('article2');
    }

    public function article3()
    {
        return view('article3');
    }

    public function article4()
    {
        return view('article4');
    }

    public function article5()
    {
        return view('article5');
    }

    public function contact()
    {
        return view('contact');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function verify()
    {
        return view('verify');
    }

    public function food1()
    {
        return view('foods.food1');
    }

    public function food2()
    {
        return view('foods.food2');
    }
    public function food3()
    {
        return view('foods.food3');
    }
    public function food4()
    {
        return view('foods.food4');
    }
    public function food5()
    {
        return view('foods.food5');
    }
    public function food6()
    {
        return view('foods.food6');
    }
    public function food7()
    {
        return view('foods.food7');
    }
    public function food8()
    {
        return view('foods.food8');
    }
    public function food9()
    {
        return view('foods.food9');
    }
    public function fooda1()
    {
        return view('foodsarticle.fooda1');
    }
    public function fooda2()
    {
        return view('foodsarticle.fooda2');
    }
    public function fooda3()
    {
        return view('foodsarticle.fooda3');
    }
    public function fooda4()
    {
        return view('foodsarticle.fooda4');
    }
    public function fooda5()
    {
        return view('foodsarticle.fooda5');
    }
    public function fooda6()
    {
        return view('foodsarticle.fooda6');
    }
}
