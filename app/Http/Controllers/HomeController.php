<?php

namespace ptyshoes\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home.index');
    }

    public function contact()
    {
        return view('home.contact');
    }

    public function checkout()
    {
    	return view('home.checkout');
    }

    public function about()
    {
        return view('home.about');
    }

    public function single()
    {
        return view('home.single');
    }

    public function register()
    {
        return view('membership.register');
    }

    public function login()
    {
        return view('membership.login');
    }
    

    
}
