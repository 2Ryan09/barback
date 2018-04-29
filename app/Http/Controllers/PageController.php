<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function inventory()
    {
    	return view('pages.inventory');
    }

    public function bws()
    {
    	return view('pages.bws');
    }
}
