<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Payment;
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
         $data[] = [
                     'id' => $k[0]['id'],
                     'i' => $i++,
                     'team_name' => $k[0]['team_name'],
                     'progress' => $k[0]['progress']
                ];
      }

           return Datatables::of($data)
           ->editColumn('progress', function($data){
            if($data['progress'] == 1){
              return '<span class="badge badge-primary">Registered</span>';
           }
            elseif($data['progress'] == 2){
               return '<span class="badge badge-info">Waiting for Confirm</span>';
            }
            elseif($data['progress'] == 3){
               return '<span class="badge badge-info">Submitted</span>';
            }
            elseif($data['progress'] == 4){
               return '<span class="badge badge-warning">confirmed</span>';
            }
            elseif($data['progress'] == 5){
               return '<span class="badge badge-warning">Waiting for Selection</span>';
            }
            elseif($data['progress'] == 6){
               return '<span class="badge badge-info">Waiting</span>';
            }
            elseif($data['progress'] == 7){
               return '<span class="badge badge-success">Lulus Seleksi</span>';
            }
          })
          ->addColumn('action', function ($data){
                return'
                   <a href="#" class="btn-success btn-sm"><i class="fa fa-check"></i></a>
                   <a href="./view-team.html" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                   <a href="#" class="btn-danger btn-sm" data-toggle="modal" data-target="#deleteTeam"><i class="fa fa-trash" ></i></a>
                ';
          })
          ->make(true);

   }

   public function wdcUsers()
   {
      $users = User::all();
      $a = [];
      foreach ($users as $user) {
         if ($user->wdc['progress'] != null) {
            $a[] = $user->wdc()
            ->join('users', 'users.id', '=', 'wdcs.user_id')
            ->get(['users.id', 'team_name', 'progress']);
         }
      }
      $data = [];
      $i = 1;
      foreach ($a as $k) {
         $data[] = [
                     'id' => $k[0]['id'],
                     'i' => $i++,
                     'team_name' => $k[0]['team_name'],
                     'progress' => $k[0]['progress']
                ];
      }

           return Datatables::of($data)
           ->editColumn('progress', function($data){
            if($data['progress'] == 1){
              return '<span class="badge badge-primary">Registered</span>';
           }
            elseif($data['progress'] == 2){
               return '<span class="badge badge-info">Waiting for Confirm</span>';
            }
            elseif($data['progress'] == 3){
               return '<span class="badge badge-info">Submitted</span>';
            }
            elseif($data['progress'] == 4){
               return '<span class="badge badge-warning">confirmed</span>';
            }
            elseif($data['progress'] == 5){
               return '<span class="badge badge-warning">Waiting for Selection</span>';
            }
            elseif($data['progress'] == 6){
               return '<span class="badge badge-info">Waiting</span>';
            }
            elseif($data['progress'] == 7){
               return '<span class="badge badge-success">Lulus Seleksi</span>';
            }
          })
          ->addColumn('action', function ($data){
                return'
                   <a href="#" class="btn-success btn-sm"><i class="fa fa-check"></i></a>
                   <a href="./view-team.html" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                   <a href="#" class="btn-danger btn-sm" data-toggle="modal" data-target="#deleteTeam"><i class="fa fa-trash" ></i></a>
                ';
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

   /* Get Data From Database */
   public function newsData(Request $request)
    {   
     
        //if($request->ajax()){
            $model = News::query();
            return DataTables::of($model)
            ->addColumn('action', function ($model){

               if($model->is_published === 1){
                  $btn_status = '<a href="'.route('homePage').'" class="btn-warning btn-sm publish-btn">Unpublish</a> ';
               }else{
                  $btn_status = '<a href="#" class="btn-success btn-sm publish-btn">Publish</a> ';
               }
               return
               $btn_status.
                   '<a href="#" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                   <a href="" class="btn-danger btn-sm" data-toggle="modal" data-target="#deleteTeam"><i class="fa fa-trash" ></i></a>
               ';
          })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);

       // }
        //return redirect('');
        
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

   public function paymentsGetData()
   {
      $payments = Payment::all();
      $data = [];
      $i = 1;
      foreach ($payments as $payment) {
         if ($payment->user->wdc) {
            $data[] = [
                  'id' => $payment->user->id,
                  'i' => $i++,
                  'team_name' => $payment->user->team_name,
                  'kompetisi' => "WDC Competition",
                  'payment_path' => $payment['payment_path']
               ];
         }else {
            $data[] = [
                  'id' => $payment->user->id,
                  'i' => $i++,
                  'team_name' => $payment->user->team_name,
                  'kompetisi' => "MADC Competition",
                  'payment_path' => $payment['payment_path']
               ];
         }
      }

      return Datatables::of($data)
      ->addColumn('action', function ($data){
           return'
               <a href="#" class="btn-success btn-sm"><i class="fa fa-check"></i></a>
               <a href="./view-team.html" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
               <a href="#" class="btn-danger btn-sm" data-toggle="modal" data-target="#deleteTeam"><i class="fa fa-trash" ></i></a>
           ';
      })
      ->make(true);
   }

   public function submissions()
   {
      // dd($data);
      return view('user.admin.submission');
   }

   public function submissionsGetData()
   {
      $submission = \App\Submission::all();
      $data = [];
      $i = 1;
      foreach ($submission as $sub) {
         if ($sub->user->wdc) {
            $data[] = [
              'id' => $sub->user->id,
              'i' => $i++,
              'team_name' => $sub->user->team_name,
              'kompetisi' => "WDC Competition",
              'progress' => $sub->user->wdc['progress'],
              'submissions_path' => $sub['submissions_path'],
           ];
        }else {
           $data[] = [
             'id' => $sub->user->id,
             'i' => $i++,
             'team_name' => $sub->user->team_name,
             'kompetisi' => "MADC Competition",
             'progress' => $sub->user->madc['progress'],
             'submissions_path' => $sub['submissions_path'],
          ];
        }
      }

      return Datatables::of($data)
      ->editColumn('submissions_path', function($data){
         return '<a href="'. $data['submissions_path'] .'" class="btn-success btn-sm">Link</a>';
      })
      ->addColumn('action', function($data){
         return'
             <a href="#" class="btn-success btn-sm"><i class="fa fa-check"></i></a>
             <a href="./view-team.html" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
             <a href="#" class="btn-danger btn-sm" data-toggle="modal" data-target="#deleteTeam"><i class="fa fa-trash" ></i></a>
         ';
      })
      ->make(true);
   }

   
}
