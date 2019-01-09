<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MadcController extends Controller
{
    public function __construct()
    {
      $this->middleware(['auth', 'madc']);
   }

   public function index()
   {

      return view('user.madc.dashboard');
   }
}
