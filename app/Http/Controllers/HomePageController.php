<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function index() {
        return view('homepage.index');
    }

    public function about() {
        return view('homepage.about');
    }

    public function services() {
        return view('homepage.service');
    }

    public function portfolio() {
        return view('homepage.portfolio');
    }

    public function contact() {
        return view('homepage.contact');
    }

    public function blog() {
        return view('homepage.blog');
    }




}
