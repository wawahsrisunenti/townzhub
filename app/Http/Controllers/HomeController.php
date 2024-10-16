<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function home02()
    {
        return view('frontend.home02');
    }

    public function home03()
    {
        return view('frontend.home03');
    }

    public function home04()
    {
        return view('frontend.home04');
    }

    public function home05()
    {
        return view('frontend.home05');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function faq()
    {
        return view('frontend.faq');
    }
}
