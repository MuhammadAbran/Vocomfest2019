<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WdcController extends Controller
{
//    public function __construct()
//    {
//      $this->middleware(['auth', 'wdc']);
//   }

    public function index()
    {
        // Buat nyari progress tim, biar timeline jalan 

        // $user_id = Auth::user()->id;
        // $progress = Madc::where('user_id',$user_id)->first();
      
        // return view('user.madc.dashboard', compact('progress'));
        return view('user.wdc.dashboard');
    }

    public function team()
    {
        //Ambil user_id
        $user_id = Auth::user()->id;
        //Gabungin tabel users + madcs, lalu cari yang user_idnya sama
        $tim = DB::table('users')->join('madcs','users.id','=','madcs.user_id')->where('user_id', $user_id)->first();
        return view('user.wdc.team');
    }

    public function payment()
    {
        // Buat ambil progress dari tim (udah upload atau belum, udah di approve atau belum)
        // $id = Auth::user()->id;
        // $progress = Madc::where('user_id',$user_id)->first();
        return view('user.wdc.payment');
    }

    public function submission()
    {
        return view('user.wdc.submission');
    }
}
