<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    public function index() {
        return view('home');
    }

    public function products() {
        return view('products');
    }

    public function about_us() {
        return view('about_us');
    }

    public function what_we_do() {
        return view('what_we_do');
    }
}
