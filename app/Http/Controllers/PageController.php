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

    public function welcome()
    {
    	return view('pages.welcome');
    }

    public function inventory()
    {
    	return view('pages.inventory');
    }
  
    public function dashboard() 
    {
    	return view('pages.dashboard');
    }
}
