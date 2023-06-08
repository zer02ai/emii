<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $page_name = 'Home';
        return view('index',compact('page_name'));
    }

    public function about_us()
    {
        $page_name = 'About Us';
        return view('about',compact('page_name'));
    }

    public function contact_us()
    {
        $page_name = 'Contact Us';
        return view('contact',compact('page_name'));
    }
}
