<?php

namespace App\Http\Controllers;

use App\Services\Newsletter;

class NewsLetterController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Newsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            // (new Newsletter())->subscribe(request('email'));
            $newsletter->subscribe(request('email'));
        } catch(\Exception $e) {
            return redirect('/')->with('unsuccess', "This email could not be added to our newsletter list");
        }
        
        return redirect('/')->with('success', "You are now signed up for our newsletter!");
    }
}