<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
   public function __construct()
   {
      // $this->middleware(['auth', 'role']);
   }


   //  public function index()
   //  {
   //    $i = 1;
   //    $ii = 1;
   //    $madc = \App\Madc::all();
   //    $wdc = \App\Wdc::all();
   //    $users = \App\User::all();
   //    // dd($users);
   //    return view('admin.dashboard', compact(['ii', 'i', 'users','madc', 'wdc']));
   // }


   public function index()
   {
      // $users = User::get(['role']);
      // $a = [];
      // foreach ($users as $user) {
      //    $a[] = $user['role'];
      // }
      // dd($a);
      $user = User::find(2);
      dd($user['role']);

      return view('user.admin.dashboard');
   }

   public function madcTeams()
   {
      return view('user.admin.madc_teams');
   }

   public function wdcTeams()
   {
      return view('user.admin.wdc_teams');
   }

   public function galleries()
   {
      return view('user.admin.galleries');
   }

   public function news()
   {
      return view('user.admin.news');
   }

   public function addNews()
   {
      return view('user.admin.add_news');
   }

   public function editNews()
   {
      return view('user.admin.edit_news');
   }

   public function payments()
   {
      return view('user.admin.payment');
   }

   public function submissions()
   {
      return view('user.admin.submission');
   }
}
