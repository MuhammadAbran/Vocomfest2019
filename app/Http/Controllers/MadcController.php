<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MadcController extends Controller
{
   //  public function __construct()
   //  {
   //    $this->middleware(['auth', 'madc']);
   // }

   public function index()
   {
      return view('user.madc.dashboard');
   }

   public function team()
   {
      return view('user.madc.team');
   }

   public function payment()
   {
      return view('user.madc.payment');
   }

   public function submission()
   {
      return view('user.madc.submission');
   }
}
