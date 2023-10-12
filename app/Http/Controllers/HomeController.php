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
}
