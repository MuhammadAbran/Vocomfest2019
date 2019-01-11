<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WdcController extends Controller
{
//    public function __construct()
//    {
//      $this->middleware(['auth', 'wdc']);
//   }

    public function index()
    {
        return view('user.wdc.dashboard');
    }

    public function team()
    {
        return view('user.wdc.team');
    }

    public function payment()
    {
        return view('user.wdc.payment');
    }

    public function submission()
    {
        return view('user.wdc.submission');
    }
}
