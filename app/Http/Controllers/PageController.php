<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home () {
        return view('home');
    }

    public function produk () {
        return view('produk');
    }

    public function about () {
        return view('about');
    }

    public function create () {
        return view('create');
    }

    
    public function kontak () {
        return view('kontak');
    }

}
