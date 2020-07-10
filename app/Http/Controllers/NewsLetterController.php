<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsLetterController extends Controller
{
    //

    public function store(Request $request){

        if(! Newsletter::isSubscribed($request->email)){

            Newsletter::subscribePending($request->email);

            return redirect('/')->with('success', 'Check your email for next steps');
        }

        return redirect('/')->with('failure', 'Sorry you are already subscribed');
    }
}
