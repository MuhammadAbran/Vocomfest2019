<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Yajra\Datatables\Datatables;

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
      // $user = User::find(2);

      return view('user.admin.dashboard');
   }

   public function madcTeams()
   {
      // $users = User::get();
      // dd($users->madc);
      // $users = User::all();
      // $a = [];
      // foreach ($users as $user) {
      //    if ($user->madc['progress'] != null) {
      //       $a[] = $user->madc()
      //       ->join('users', 'users.id', '=', 'madcs.user_id')
      //       ->get(['users.id', 'team_name', 'progress']);
      //    }
      // }
      // $data = [];
      // foreach ($a as $k) {
      //    $data[] = ['id' => $k[0]['id'],
      //              'team_name' => $k[0]['team_name'],
      //              'progress' => $k[0]['progress']
      //           ];
      // }
      // dd($data);
      return view('user.admin.madc_teams');
   }

   public function madcUsers()
   {
      $users = User::all();
      $a = [];
      foreach ($users as $user) {
         if ($user->madc['progress'] != null) {
            $a[] = $user->madc()
            ->join('users', 'users.id', '=', 'madcs.user_id')
            ->get(['users.id', 'team_name', 'progress']);
         }
      }
      $data = [];
      $i = 1;
      foreach ($a as $k) {
         $data[] = ['id' => $i++,
                   'team_name' => $k[0]['team_name'],
                   'progress' => $k[0]['progress']
                ];
      }
           return Datatables::of($data)
           ->editColumn('progress', function($data){
            if($data['progress'] == 1){
              return strip_tags('<span class="badge badge-primary">Registered</span>');
           }
            elseif($data['progress'] == 2){
               return strip_tags('<span class="badge badge-info">Waiting for Confirm</span>');
            }
            elseif($data['progress'] == 3){
               return strip_tags('<span class="badge badge-info">Submitted</span>');
            }
            elseif($data['progress'] == 4){
               return strip_tags('<span class="badge badge-warning">confirmed</span>');
            }
            elseif($data['progress'] == 5){
               return strip_tags('<span class="badge badge-warning">Waiting for Selection</span>');
            }
            elseif($data['progress'] == 6){
               return strip_tags('<span class="badge badge-info">Waiting</span>');
            }
            elseif($data['progress'] == 7){
               return strip_tags('<span class="badge badge-success">Lulus Seleksi</span>');
            }
          })
           ->make(true);

   }

   public function wdcTeams()
   {
      $users = User::all();
      $i = 1;

      return view('user.admin.wdc_teams', compact(['users', 'i']));
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
