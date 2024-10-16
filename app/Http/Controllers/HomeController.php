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

    public function agents()
    {
        return view('frontend.agents');
    }

    public function agentsDetail()
    {
        return view('frontend.agents-detail');
    }

    public function agentsSidebarv1()
    {
        return view('frontend.agents-sidebar-v1');
    }

    public function agentsSidebarv2()
    {
        return view('frontend.agents-sidebar-v2');
    }

    public function agencies()
    {
        return view('frontend.agencies');
    }
    public function agenciesDetail()
    {
        return view('frontend.agencies-detail');
    }

    public function agenciesSidebarv1()
    {
        return view('frontend.agencies-sidebar-v1');
    }

    public function agenciesSidebarv2()
    {
        return view('frontend.agencies-sidebar-v2');
    }

    public function blog()
    {
        return view('frontend.blog');
    }

}
