<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Wdc;
use App\Setting;
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

      // ambil data user berdasarkan id di auth
      $user = Wdc::where('user_id', Auth::user()->id)->first();

      return view('user.wdc.dashboard', compact('user'));
    }

    public function team()
    {
        //Ambil user_id
        $user_id = Auth::user()->id;
        //Gabungin tabel users + wdcs, lalu cari yang user_idnya sama
        $tim = DB::table('users')->join('wdcs','users.id','=','wdcs.user_id')->where('user_id', $user_id)->first();

        return view('user.wdc.team', compact('tim'));
    }

    public function teamEdit(Request $req)
    {
       $leader = Auth::user();
       $id = $req->id;
       $tim = Wdc::find($id);
       $this->validate($req,[
         'photo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
       ]);
       //$req->pos biar tau yang diganti data ketua/wakil/anggota

       if ($req->pos == 1) {
          $tim->leader_name = $req->name;
          $tim->leader_phone = $req->phone;
          if($file = $req->file('photo')){
             $photo = $leader->team_name . '_' . time() . '.' . $file->getClientOriginalExtension();
             $file->move(public_path('storage/foto'), $photo);
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
             $file->move(public_path('storage/foto'), $photo);
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
             $file->move(public_path('storage/foto'), $photo);
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
      $data['user'] = Auth::user();
      $data['setting'] = Setting::find(2);

      return view('user.wdc.payment', $data);
    }

    public function paymentUpload(Request $req)
    {
       // Ambil user_id buat dimasukin ke tabel payments
       $user = Auth::user();

       $this->validate($req,[
         'photo' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048'
       ]);

       if($file = $req->file('photo')){
          $photo = $user->team_name . '_' . time() . '.' . $file->getClientOriginalExtension();
          $file->move(public_path('storage/payments'), $photo);

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
         $data['user'] = Auth::user();
         $data['setting'] = Setting::find(3);
         $data['submission_2'] = Setting::find(4);
         return view('user.wdc.submission', $data);
    }

    public function submissionUpload(Request $req)
    {
       $user = Auth::user();
       $UserSubmitID = Submission::where(['user_id' => $user->id])->first();
       if ($UserSubmitID) {
          $idFirstSub = $UserSubmitID->id;
          $submit = new Submission([
             'submissions_path' => $req->link,
             'theme' => $req->tema,
             'user_id' => $user->id,
             'parent_id' => $idFirstSub,
          ]);
          $visible = Submission::find($idFirstSub);
          $visible->visible = 0;
          $visible->save();
       }else {
          $submit = new Submission([
             'submissions_path' => $req->link,
             'theme' => $req->tema,
             'user_id' => $user->id,
          ]);
       }

       if ($user->wdc->progress == 4) {
         $user->wdc->update(['progress' => 5]);
       }elseif ($user->wdc->progress == 6) {
         $user->wdc->update(['progress' => 7]);
       }

       $submit->save();

       return redirect()->back();
    }

    public function updateProgress(Request $request)
    {
       //get user id from auth session
       $data = Wdc::where('user_id', Auth::user()->id)->first();
       /* Update Progress */
       $data->progress = $request->progress;

       $data->update();
       return redirect()->route('wdc.dashboard');
    }
}
