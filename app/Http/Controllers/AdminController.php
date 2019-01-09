<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
   public function __construct()
   {
      // $this->middleware(['auth', 'role']);
   }


    public function index()
    {
      $i = 1;
      $ii = 1;
      $madc = \App\MadcTeams::all();
      $wdc = \App\WdcTeams::all();
      $users = \App\User::all();
      // dd($users);
      return view('admin.dashboard', compact(['ii', 'i', 'users','madc', 'wdc']));
   }
}
