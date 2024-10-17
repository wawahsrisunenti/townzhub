<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function property()
    {
        return view('frontend.property-detail-v1');
    }

    public function propertyGrid()
    {
        return view('frontend.properties-grid');
    }

    public function propertyMap()
    {
        return view('frontend.properties-map-v1');
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function faq()
    {
        return view('frontend.faq');
    }

    public function agents()
    {
        return view('frontend.agents');
    }

    public function agentsDetail()
    {
        return view('frontend.agents-detail');
    }

    public function agencies()
    {
        return view('frontend.agencies');
    }
    public function agenciesDetail()
    {
        return view('frontend.agencies-detail');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

    public function blogDetail()
    {
        return view('frontend.blog-detail');
    }

    public function contact()
    {
        return view('frontend.contact');
    }
}
