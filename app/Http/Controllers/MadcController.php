<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Madc;
use Illuminate\Support\Facades\Auth;
use App\Payment;
use DB;

class MadcController extends Controller
{
   //  public function __construct()
   //  {
   //    $this->middleware(['auth', 'madc']);
   // }

   public function index()
   {
      // Buat nyari progress tim, biar timeline jalan 

      // $user_id = Auth::user()->id;
      // $progress = Madc::where('user_id',$user_id)->first();
      
      // return view('user.madc.dashboard', compact('progress'));
      return view('user.madc.dashboard');
   }

   public function team()
   {
      //Ambil user_id
      $user_id = Auth::user()->id;
      //Gabungin tabel users + madcs, lalu cari yang user_idnya sama
      $tim = DB::table('users')->join('madcs','users.id','=','madcs.user_id')->where('user_id', $user_id)->first();

      return view('user.madc.team', compact('leader', 'tim'));
   }

   public function teamEdit(Request $req)
   {
      $leader = Auth::user();
      $id = $req->id;
      $tim = Madc::find($id);

      //$req->pos biar tau yang diganti data ketua/wakil/anggota

      if ($req->pos == 1) {
         $leader->leader_email = $req->email;
         $tim->leader_name = $req->name;
         $tim->leader_phone = $req->phone;
         if($file = $req->file('photo')){
            $photo = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/img', $photo);
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
            $photo = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/img', $photo);
            $tim->co_leader_avatar = $photo;

            $tim->update();
         }
         $tim->update();
      }elseif ($req->pos == 3) {
         $tim->member_1_email = $req->email;
         $tim->member_1_name = $req->name;
         $tim->member_1_phone = $req->phone;
         if($file = $req->file('photo')){
            $photo = time() . '.' . $file->getClientOriginalExtension();
            $file->move('assets/img', $photo);
            $tim->member_1_avatar = $photo;

            $tim->update();
         }
         $tim->update();
      }else {
         $tim->member_2_email = $req->email;
         $tim->member_2_name = $req->name;
         $tim->member_2_phone = $req->phone;
         if($file = $req->file('photo')){
            $photo = 'namatim_' . time() . '.' . $file->getClientOriginalExtension();
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
      // Buat ambil progress dari tim (udah upload atau belum, udah di approve atau belum)
      // $id = Auth::user()->id;
      // $progress = Madc::where('user_id',$user_id)->first();

      return view('user.madc.payment');
   }

   public function paymentUpload(Request $req)
   {
      // Ambil user_id buat dimasukin ke tabel payments
      // $user_id = Auth::user()->id;
      $user_id = 1;

      if($file = $req->file('photo')){
         $photo = 'namatim_' . time() . '.' . $file->getClientOriginalExtension();
         $file->move('payment', $photo);

         $pay = new Payment([
            'payment_path' => $photo,
            'user_id' => $user_id,
         ]);

         $pay->save();
      }


      return redirect()->back();
   }

   public function submission()
   {
      return view('user.madc.submission');
   }
}
