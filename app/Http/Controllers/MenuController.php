<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        return view('beranda');
    }
    public function show_product()
    {
        return view('show_product');
    }
    public function about()
    {
        return view('about');
    }
}
