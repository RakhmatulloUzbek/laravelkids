<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.index');
    }

    public function aboutus(){
        return view('home.aboutus');
    }

    public function contactus(){
        return view('home.contactus');
    }

    public function blog(){
        return view('home.blog');
    }

    public function services(){
        return view('home.services');
    }

    public function ourstaffs(){
        return view('home.ourstaffs');
    }

    public function portfolio(){
        return view('home.portfolio');
    }

    public function portfolio_detail($id){
        return view('home.portfolio_detail');
    }
    public function signin(){
        return view('home.signin');
    }

    public function signup(){
        return view('home.signup');
    }
}
