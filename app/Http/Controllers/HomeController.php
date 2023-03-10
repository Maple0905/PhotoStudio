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

    public function prices() {
        return view('prices');
    }

    public function creatives() {
        return view('creatives');
    }

    public function contact() {
        return view('contact');
    }

    public function terms_and_conditions() {
        return view('terms_and_conditions');
    }
}
