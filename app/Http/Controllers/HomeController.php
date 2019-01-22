<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('frontend.home');
    }

    public function wdcPage()
    {
        return view('frontend.wdc_page');
    }

    public function madcPage()
    {
        return view('frontend.madc_page');
    }
    public function icpcPage()
    {
        return view('frontend.icpc_page');
    }

    public function ntfPage()
    {
        return view('frontend.ntf_page');
    }

    public function newsPage()
    {
        return view('frontend.news_page');
    }
}
