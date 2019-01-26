<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Madc;
use Illuminate\Support\Facades\Auth;
use App\Payment;
use DB;
use App\Submission;

class MadcController extends Controller
{
   //  public function __construct()
   //  {
   //    $this->middleware(['auth', 'madc']);
   // }

   public function index()
   {
      // ambil data user berdasarkan id di auth
      $user = Madc::where('user_id', Auth::user()->id)->first();
      
      return view('user.madc.dashboard', compact('user'));
   }

   public function team()
   {
      //Ambil user_id
      $user_id = Auth::user()->id;
      //Gabungin tabel users + madcs, lalu cari yang user_idnya sama
      $tim = DB::table('users')->join('madcs','users.id','=','madcs.user_id')->where('user_id', $user_id)->first();

      return view('user.madc.team', compact('tim'));
   }

   public function teamEdit(Request $req)
   {
      $leader = Auth::user();
      $id = $req->id;
      $tim = Madc::find($id);

      //$req->pos biar tau yang diganti data ketua/wakil/anggota

      if ($req->pos == 1) {

         $tim->leader_name = $req->name;
         $tim->leader_phone = $req->phone;
         if($file = $req->file('photo')){
            $photo = $leader->team_name . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('foto', $photo);
            $tim->leader_avatar = $photo;

            $tim->update();
         }
         $leader->save();
         $tim->update();         
      }elseif ($req->pos == 2) {
         $tim->co_leader_email = $req->email;
         $tim->co_leader_name = $req->name;
         $tim->co_leader_phone = $req->phone;
         if($file = $req->file('photo')){
            $photo = $leader->team_name . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('foto', $photo);
            $tim->co_leader_avatar = $photo;

            $tim->update();
         }
         $tim->update();
      }elseif ($req->pos == 3) {
         $tim->member_1_email = $req->email;
         $tim->member_1_name = $req->name;
         $tim->member_1_phone = $req->phone;
         if($file = $req->file('photo')){
            $photo = $leader->team_name . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('foto', $photo);
            $tim->member_1_avatar = $photo;

            $tim->update();
         }
         $tim->update();
      }else {
         $tim->member_2_email = $req->email;
         $tim->member_2_name = $req->name;
         $tim->member_2_phone = $req->phone;
         if($file = $req->file('photo')){
            $photo = $leader->team_name . '_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move('foto', $photo);
            $tim->member_2_avatar = $photo;

            $tim->update();
         }
         $tim->update();
      }


      return redirect()->back();
   }

   public function payment()
   {
      // Buat ambil user
      $user = Auth::user();

      return view('user.madc.payment', compact('user'));
   }

   public function paymentUpload(Request $req)
   {
      // Ambil user_id buat dimasukin ke tabel payments
      $user = Auth::user();

      if($file = $req->file('photo')){
         $photo = $user->team_name . '_' . time() . '.' . $file->getClientOriginalExtension();
         $file->move('payment', $photo);

         $pay = new Payment([
            'payment_path' => $photo,
            'user_id' => $user->id,
         ]);

         $pay->save();
      }
      $updateProgress = Madc::where('user_id', Auth::user()->id)->first();
      $updateProgress = $updateProgress->update(['progress' => 3]);

      return redirect()->back();
   }

   public function submission()
   {
      $user = Auth::user();

      return view('user.madc.submission', compact('user'));
   }

   public function submissionUpload(Request $req)
   {
      $user= Auth::user();

      $submit = new Submission([
         'submissions_path' => $req->link,
         'theme' => $req->tema,
         'user_id' => $user->id
      ]);
      
      if ($user->madc->progress == 4) {
         $user->madc()->update(['progress' => 5]);
      }elseif ($user->madc->progress == 7) {
         $user->madc()->update(['progress' => 8]);
      }

      $submit->save();

      return redirect()->back();
   }

   public function updateProgress(Request $request)
   {
      //get user id from auth session
      $data = Madc::where('user_id', Auth::user()->id)->first();
      /* Update Progress */
      $data->progress = $request->progress;

      $data->update();
      return redirect()->route('madc.dashboard');
   }

}
