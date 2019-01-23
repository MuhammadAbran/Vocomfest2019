<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Wdc;
use App\Payment;
use App\Submission;

class WdcController extends Controller
{
//    public function __construct()
//    {
//      $this->middleware(['auth', 'wdc']);
//   }

    public function index()
    {
    // Cari user 
      $user = Auth::user();
      
      return view('user.wdc.dashboard', compact('user'));
    }

    public function team()
    {
        //Ambil user_id
        $user_id = Auth::user()->id;
        //Gabungin tabel users + madcs, lalu cari yang user_idnya sama
        $tim = DB::table('users')->join('wdcs','users.id','=','wdcs.user_id')->where('user_id', $user_id)->first();

        return view('user.wdc.team', compact('tim'));
    }

    public function teamEdit(Request $req)
    {
       $leader = Auth::user();
       $id = $req->id;
       $tim = Wdc::find($id);
 
       //$req->pos biar tau yang diganti data ketua/wakil/anggota
 
       if ($req->pos == 1) {
          $leader->leader_email = $req->email;
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
       }else {
          $tim->member_email = $req->email;
          $tim->member_name = $req->name;
          $tim->member_phone = $req->phone;
          if($file = $req->file('photo')){
             $photo = $leader->team_name . '_' . time() . '.' . $file->getClientOriginalExtension();
             $file->move('foto', $photo);
             $tim->member_avatar = $photo;
 
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

      return view('user.wdc.payment', compact('user'));
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
 
       $user->wdc()->update(['progress' => 3]);
 
       return redirect()->back();
    }

    public function submission()
    {
        $user = Auth::user();

        return view('user.wdc.submission', compact('user'));
    }

    public function submissionUpload(Request $req)
    {
       $user= Auth::user();
 
       $submit = new Submission([
          'submissions_path' => $req->link,
          'type' => $req->tema,
          'user_id' => $user->id
       ]);
       
       $user->wdc()->update(['progress' => 5]);
 
       $submit->save();
 
       return redirect()->back();
    }
}
