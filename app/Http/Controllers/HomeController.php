<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function project()
    {
        return view('project');
    }

    public function product()
    {
        return view('product');
    }
    public function automaticSlidingDoors()
    {
        return view('automatic-sliding-doors');
    }

    public function about()
    {
        return view('about');
    }
    public function aboutId()
    {
        return view('id/about');
    }

    public function contact()
    {
        return view('contact');
    }
}
