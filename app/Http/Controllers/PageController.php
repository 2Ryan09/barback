<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function inventory()
    {
        return view('pages.inventory.inventory');
    }
  
    public function dashboard()
    {
        return view('pages.dashboard.dashboard');
    }

    public function overview()
    {
        return view('pages.inventory.overview');
    }

    public function test()
    {
        return view('pages.test');
    }
}