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

    public function admin()
    {
        return view('pages.admin');
    }

    public function inventory()
    {
        return view('pages.inventory.inventory');
    }

    public function supplier()
    {
        return view('pages.supplier');
    }

    public function suppliercreate()
    {
        return view('pages.newSupplier');
    }

    public function invcreate()
    {
        return view('pages.inventory.create');
    }

    public function offerings()
    {
        return view('pages.offerings.offerings');
    }

    public function offcreate()
    {
        return view('pages.offerings.create');
    }
  
    public function dashboard()
    {
        return view('pages.dashboard.dashboard');
    }

    public function overview()
    {
        return view('pages.bws.overview');
    }

    public function bwscreate()
    {
        return view('pages.bws.create');
    }

    public function test()
    {
        return view('pages.test');
    }
}
