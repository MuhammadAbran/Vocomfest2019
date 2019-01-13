<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Madc;
use App\User;
use App\Payment;

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
      $team = Madc::get();
      $leader = User::get();

      return view('user.madc.team', compact('team', 'leader'));
   }

   public function edit_team(Request $req)
   {

      if($req->angka == 1){
         $data = [
            'leader_name' => $req->name,
            'leader_phone' => $req->phone,
         ];
      }
      elseif ($req->angka == 2) {
         $data = [
            'coleader_name' => $req->name,
            'coleader_phone' => $req->phone,
            'coleader_email' =>$req->email,
         ];
      }
      elseif ($req->id == 3) {
         $data = [
            'member1_name' => $req->name,
            'member1_phone' => $req->phone,
            'member1_email' => $req->email,
         ];
      }
      else{
         $data = [
            'member2_name' => $req->name,
            'member2_phone' => $req->phone,
            'member2_email' => $req->email,
         ];
      }

      Madc::find($req->id)->update($data);

      return redirect()->back();
   }

   public function payment()
   {
      $tim = User::get();
      $pay = Madc::get();

      return view('user.madc.payment', compact('tim', 'pay'));
   }

   public function payment_store(Request $req){
      $id = $req->id;
      $tim = Madc::where('id', $id)->first();

      if ($files = $req->file('photo')) {
         $name =  $files->getClientOriginalName();
         $files->move('assets/payments', $name);
         
         $pay = new Payment();
         $pay->payment_path = $name;
         $pay->user_id = $id;
         $tim->progress = 3;

         $tim->save();
         $pay->save();
      }

      return redirect()->back();
   }

   public function submission()
   {
      return view('user.madc.submission');
   }
}
