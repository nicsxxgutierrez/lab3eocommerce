<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class shopController extends BaseController
{
    public function index()
    {
        //
    }
    public function view()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function perfumes()
    {
        return view('perfumes');
    }
    public function shop()
    {
        return view('shop');
    }
    public function contact()
    {
        return view('contact');
    }
}