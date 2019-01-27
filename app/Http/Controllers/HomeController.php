<?php

namespace App\Http\Controllers;

use App\News;
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
        $data['news_all'] = News::where('is_published','1')->get();

        return view('frontend.home',$data);
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

    public function newsPage($id)
    {   
        $data['news'] = News::find($id);

        $data['news_all'] = News::where('is_published','1')->limit(3)->get();

       return view('frontend.news_page',$data);
    }
}
