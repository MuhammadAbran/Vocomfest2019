<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WdcController extends Controller
{
   public function __construct()
   {
     $this->middleware(['auth', 'wdc']);
  }

  public function index()
  {

     return view('user.wdc.dashboard');
  }
}
