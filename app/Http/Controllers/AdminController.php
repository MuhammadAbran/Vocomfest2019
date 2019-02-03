<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;
use App\Madc;
use App\Submission;
use DB;
use Session;
use App\Setting;
use App\Payment;
use Yajra\Datatables\Datatables;

class AdminController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth', 'admin']);
   }

   public function index()
   {
      $data['total'] = User::count();
      $data['madc_all'] = User::where('role',2)->count();
      $data['wdc_all'] = User::where('role',3)->count();

      $data['wdc_activity'] = DB::table('users')
                              ->join('wdcs', 'users.id', '=', 'wdcs.user_id')
                              ->select('users.team_name', 'wdcs.updated_at','wdcs.progress')
                              ->limit(5)
                              ->orderBy('updated_at','desc')
                              ->get();

      $data['madc_activity'] = DB::table('users')
                              ->join('madcs', 'users.id', '=', 'madcs.user_id')
                              ->select('users.team_name', 'madcs.updated_at','madcs.progress')
                              ->limit(5)
                              ->orderBy('updated_at','desc')
                              ->get();

      return view('user.admin.dashboard',$data);
   }

   public function madcTeams()
   {

      return view('user.admin.madc_teams');
   }

   public function viewMadcTeams($id)
   {
      $tim = \App\User::find($id)->madc;
      return view('user.admin.view_madc', compact(['tim']));
   }

   public function madcUsers(Request $request)
   {
      if ($request->ajax()) {
         $madcs = \App\Madc::whereHas('user')->with('user')->get();
         $data = [];
         foreach ($madcs as $madc) {

            $data[] = [
               'id' => $madc->user->id,
               'team_name' => $madc->user->team_name,
               'progress' => $madc->progress
            ];

         }
         return Datatables::of($data)
              ->editColumn('progress', function($data){
                 if($data['progress'] == 0){
                     return '<span class="badge badge-danger">Belum Verifikasi Email</span>';
                 }
                  elseif($data['progress'] == 1){
                    return '<span class="badge badge-primary">Registered</span>';
                 }
                  elseif($data['progress'] == 2){
                     return '<span class="badge badge-danger">Belum Bayar</span>';
                  }
                  elseif($data['progress'] == 3){
                     return '<span class="badge badge-warning">Konfirmasi Pembayaran</span>';
                  }
                  elseif($data['progress'] == 4){
                     return '<span class="badge badge-success">Telah Membayar</span>';
                  }
                  elseif($data['progress'] == 5){
                     return '<span class="badge badge-info">Penyisihan #1</span>';
                  }
                  elseif($data['progress'] == 6){
                     return '<span class="badge badge-success">Lolos Penyisihan #1</span>';
                  }
                  elseif($data['progress'] == 7){
                     return '<span class="badge badge-success">Penyisihan #2</span>';
                  }
                  elseif($data['progress'] == 8){
                     return '<span class="badge badge-success">Lolos Kebabak FINAL</span>';
                  }
                  elseif($data['progress'] == 98){
                     return '<span class="badge badge-danger">Belum Membayar</span>';
                  }
                  elseif($data['progress'] == 99){
                     return '<span class="badge badge-danger">Tidak Lulus Seleksi</span>';
                  }
             })
             ->addColumn('action', function ($data){
                   return'
                      <a href="'. route('view.madc.team', $data['id']) .'" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                      <a href="#" name="'. $data['team_name'] .'" id="'. $data['id'] .'" class="btn-danger btn-sm delete_team" data-toggle="modal" data-target="#deleteTeam"><i class="fa fa-trash" ></i></a>
                   ';
             })
             ->addIndexColumn()
             ->rawColumns(['action', 'progress'])
             ->make(true);
      }
      return redirect('/');

   }

   public function madcUsersDelete(Request $req)
   {
      User::destroy($req->id);
   }

   public function viewWdcTeams($id)
   {
      $tim = \App\User::find($id)->wdc;
      return view('user.admin.view_wdc', compact(['tim']));
   }

   public function wdcUsers(Request $request)
   {
      if ($request->ajax()) {
         $wdcs = \App\Wdc::whereHas('user')->with('user')->get();
         $data = [];
         foreach ($wdcs as $wdc) {
               $data[] = [
                 'id' => $wdc->user->id,
                 'team_name' => $wdc->user->team_name,
                 'progress' => $wdc->progress
               ];
         }

              return Datatables::of($data)
              ->editColumn('progress', function($data){
              if($data['progress'] == 0){
                  return '<span class="badge badge-danger">Belum Verifikasi Email</span>';
              }
               elseif($data['progress'] == 1){
                 return '<span class="badge badge-primary">Registered</span>';
              }
               elseif($data['progress'] == 2){
                  return '<span class="badge badge-danger">Belum Bayar</span>';
               }
               elseif($data['progress'] == 3){
                  return '<span class="badge badge-warning">Konfirmasi Pembayaran</span>';
               }
               elseif($data['progress'] == 4){
                  return '<span class="badge badge-success">Telah Membayar</span>';
               }
               elseif($data['progress'] == 5){
                  return '<span class="badge badge-info">Penyisihan #1</span>';
               }
               elseif($data['progress'] == 6){
                  return '<span class="badge badge-success">Lolos Penyisihan #1</span>';
               }
               elseif($data['progress'] == 7){
                  return '<span class="badge badge-success">Penyisihan #2</span>';
               }
               elseif($data['progress'] == 8){
                  return '<span class="badge badge-success">Lolos Kebabak FINAL</span>';
               }
               elseif($data['progress'] == 98){
                  return '<span class="badge badge-danger">Belum Membayar</span>';
               }
               elseif($data['progress'] == 99){
                  return '<span class="badge badge-danger">Tidak Lulus Seleksi</span>';
               }

             })
             ->addColumn('action', function ($data){
                   return'
                      <a href="'. route('view.wdc.team', $data['id']) .'" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                      <a href="" name="'. $data['team_name'] .'" id="' . $data['id'] .'" class="btn-danger btn-sm deleteTeam" data-toggle="modal" data-target="#deleteTeam"><i class="fa fa-trash" ></i></a>
                   ';
             })
             ->addIndexColumn()
             ->rawColumns(['progress', 'action'])
             ->make(true);
      }

   }

   public function wdcUsersDelete(Request $req)
   {
      $user = User::destroy($req->id);
   }

   public function wdcTeams()
   {

      return view('user.admin.wdc_teams');
   }

   public function galleries()
   {
      // $gallary = \App\Gallary::find(11);
      // $data = [
      //    'title' => $gallary->title,
      //    'gallaries_path' => $gallary->gallaries_path
      // ];
      // dd(response()->json($data));
      return view('user.admin.galleries');
   }

   public function galleriesData(Request $request)
   {
      if ($request->ajax()) {
         $galleries = \App\Gallary::get();
         $data = [];
         foreach ($galleries as $g) {
            $data[] = [
               'id' => $g->id,
               'title' => $g->title,
               'gallaries_path' => $g->gallaries_path,
               'status' => $g->status,
               'updated_at' => (string)$g->updated_at,
            ];
         }
         return Datatables::of($data)
         ->editColumn('gallaries_path', function($data){
            return '<img data-title="'. $data['title'] .'" id="img001" src="'. url('storage/gallaries') ."/". $data['gallaries_path'] .'" alt="news" width=100px data-toggle="modal" data-target="#images" style="cursor:pointer; border-radius: 5px">';
         })
         ->addColumn('action', function($data){
            if($data['status'] === 1){
               $btn_status = '<a href="#" id="'. $data['id'] .'" class="btn-warning btn-sm publish-btn unpublish">Unpublish</a> ';
            }else{
               $btn_status = '<a href="#" id="'. $data['id'] .'" class="btn-success btn-sm publish-btn publish" publish>Publish</a> ';
            }
            return
            $btn_status.=
                '<a href="#" id="'. $data['id'] .'" class="btn-info btn-sm edit-gallary"  data-toggle="modal" data-target="#edit-gallary"><i class="fa fa-edit"></i></a>
                 <a href="" id="'. $data['id'] .'" class="btn-danger btn-sm delete-gallary" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash" ></i></a>
            ';
         })
         ->addIndexColumn()
         ->rawColumns(['action', 'gallaries_path'])
         ->make(true);
      }
   }

   // Input news data into database
   public function addGallary(Request $request){
      // Checking request submit data
      $publish = $request->submit == 'publish' ? 1 : 0;

      // instance News Model to model variable
      $gallary = new \App\Gallary();

      if ($request->hasFile('gallary')) {
         $image = $request->file('gallary');
         $name = time() . '.' . $image->getClientOriginalExtension();
         $path = public_path('storage/gallaries');
         $image->move($path, $name);
      }

      $gallary->title = $request->title;
      $gallary->gallaries_path = $name;
      $gallary->status = $publish;

      $gallary->save();

      return redirect()->back()->with(['message', 'Berita berhasil ditambahkan']);
   }

   public function editGallary(Request $request){
      $gallary = \App\Gallary::find($request->id);
      // dd();
      if ($request->hasFile('gallary')) {
         $image = $request->file('gallary');
         $name = time() . '.' . $image->getClientOriginalExtension();
         $path = public_path('storage/gallaries');
         $image->move($path, $name);
      }

      $gallary->title = $request->title;
      $gallary->gallaries_path = $name;

      $gallary->save();

      return redirect()->back()->with(['message', 'Berita berhasil ditambahkan']);
   }

   public function fetchGallary(Request $req)
   {
      $id = $req->id;
      $gallary = \App\Gallary::find($id);
      $path = public_path('storage/gallaries/' . $gallary->gallaries_path);
      $data = [
         'id' => $gallary->id,
         'title' => $gallary->title,
         'gallaries_path' => $path
      ];

      return response()->json($data, 200);
   }

   //publish Gallary
   public function publishGallary(Request $req)
   {
      $news = \App\Gallary::find($req->id);

      $news->status = 1;

      $news->save();
   }

   //unpublish News
   public function unpublishGallary(Request $req)
   {
      $news = \App\Gallary::find($req->id);

      $news->status = 0;

      $news->save();
   }


   public function deleteGallary(Request $req)
   {
      return \App\Gallary::destroy($req->id);
   }

   public function news()
   {

      return view('user.admin.news');
   }

   /* Get Data From Database */
   public function newsData(Request $request)
    {

        if($request->ajax()){
            $news = News::get();
            $data = [];
            foreach ($news as $new) {
               $data[] = [
                   'id' => $new->id,
                   'title' => $new->title,
                   'content' => $new->content,
                   'thumbnail' => $new->thumbnail,
                   'is_published' => $new->is_published,
                   'updated_at' => (string)$new->updated_at
               ];
            }
            return DataTables::of($data)
            ->editColumn('thumbnail', function($data){
               return '<img data-content="'. $data['content'] .'" data-title="'. $data['title'] .'" id="img0011" src="'. url('storage/news') ."/". $data['thumbnail'] .'" alt="news" width=100px data-toggle="modal" data-target="#images" style="cursor:pointer; border-radius: 5px">';
            })
            ->addColumn('action', function ($data){

               if($data['is_published'] === 1){
                  $btn_status = '<a href="#" id="'. $data['id'] .'" class="btn-warning btn-sm publish-btn unpublish">Unpublish</a> ';
               }else{
                  $btn_status = '<a href="#" id="'. $data['id'] .'" class="btn-success btn-sm publish-btn publish" publish>Publish</a> ';
               }
               return
               $btn_status.=
                   '<a href="'. route('newsPage',$data['id']) .'" class="btn-primary btn-sm" target="blank"><i class="fa fa-eye"></i></a>
                    <a href="'. route('edit.news', $data['id']) .'" class="btn-info btn-sm edit-news"><i class="fa fa-edit"></i></a>
                    <a href="#" id="'. $data['id'] .'" class="btn-danger btn-sm delete-news" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash" ></i></a>
               ';
          })
            ->addIndexColumn()
            ->rawColumns(['action', 'thumbnail'])
            ->make(true);

        }
        return redirect('');

    }

   //publish News
   public function publishNews(Request $req)
   {
      $news = \App\News::find($req->id);

      $news->is_published = 1;

      $news->save();
   }

   //unpublish News
   public function unpublishNews(Request $req)
   {
      $news = \App\News::find($req->id);

      $news->is_published = 0;

      $news->save();
   }


   // Display form for adding news
   public function addNews()
   {
      return view('user.admin.add_news');
   }

   // Input news data into database
   public function storeNews(Request $request){

      // Checking request submit data
      $publish = $request->submit == 'Terbitkan' ? 1 : 0;

      // instance News Model to model variable
      $model = new News();

      // binding data from request
      if ($request->hasFile('thumbnail')) {
         $image = $request->file('thumbnail');
         $name = time() . '.' . $image->getClientOriginalExtension();
         $path = public_path('storage/news');
         $image->move($path, $name);
      }

      $model->title = $request->title;
      $model->content = strip_tags($request->content);
      $model->is_published = $publish;
      $model->thumbnail = $name;

      //save into database
      $model->save();

      return redirect()->route('admin.news')->with(['message', 'Berita berhasil ditambahkan']);
   }

   public function updateNews(Request $request){

      // Checking request submit data
      $publish = $request->submit == 'Terbitkan' ? 1 : 0;
      $id = $request->id;
      // binding data from request
      if ($request->hasFile('thumbnail')) {
         $image = $request->file('thumbnail');
         $name = time() . '.' . $image->getClientOriginalExtension();
         $path = public_path('storage/news');
         $image->move($path, $name);
      }
      $data = [
         'title' => $request->title,
         'content' => strip_tags($request->content),
         'is_published' => $publish,
         'thumbnail' => $name
      ];
      // instance News Model to model variable
      $news = News::find($id)->update($data);
      return redirect()->route('admin.news')->with(['message', 'Berita berhasil ditambahkan']);
   }

   public function editNews($id)
   {
      $news = News::find($id);
      return view('user.admin.edit_news', compact(['news']));
   }

   public function deleteNews(Request $req)
   {
      if ($req->ajax()) {
         return \App\News::destroy($req->id);
      }
   }

   public function payments()
   {
      return view('user.admin.payment');
   }

   public function paymentsGetData()
   {
      $paymentsWdc = Payment::whereHas('user.wdc')->with('user.wdc')->get();
      $paymentsMadc = Payment::whereHas('user.madc')->with('user.madc')->get();
      $data = [];
      foreach ($paymentsWdc as $paymentW) {
         $progressW = (int)$paymentW->user->wdc->progress;
         if ($progressW == 3) {
            $data[] = [
                  'id' => $paymentW->user->id,
                  'payment_id' => $paymentW->id,
                  'team_name' => $paymentW->user->team_name,
                  'kompetisi' => "WDC Competition",
                  'payment_path' => $paymentW['payment_path'],
                  'updated_at' => (string)$paymentW['updated_at']
               ];
         }
      }

      foreach ($paymentsMadc as $paymentM) {
         $progressM = (int)$paymentM->user->madc->progress;
         if ($progressM == 3) {
         $data[] = [
               'id' => $paymentM->user->id,
               'payment_id' => $paymentM->id,
               'team_name' => $paymentM->user->team_name,
               'kompetisi' => "MADC Competition",
               'payment_path' => $paymentM['payment_path'],
               'updated_at' => (string)$paymentM['updated_at']
            ];
         }
      }

         return Datatables::of($data)
         ->addColumn('action', function ($data){
              return'
                  <a href="#" id="'. $data['id'] .'" class="btn-success btn-sm confirmed"><i class="fa fa-check" aria-hidden="true"></i></a>
                  <a href="#" id="'. $data['id'] .'" class="btn-warning btn-sm unconfirmed"><i class="fa fa-times" aria-hidden="true"></i></a>
                  <a href="#" id="'. $data['payment_id'] .'" class="btn-danger btn-sm delete-payment-data" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash" ></i></a>
              ';
         })
         ->rawColumns(['action'])
         ->addIndexColumn()
         ->make(true);

   }

   public function confirmedPayments(Request $req)
   {
      $users = \App\User::find($req->id);
      if ($users->wdc) {
         $users->wdc->update(['progress' => 4]);
      }else {
         $users->madc->update(['progress' => 4]);
      }
   }

   public function unconfirmedPayments(Request $req)
   {
      $users = \App\User::find($req->id);
      if ($users->wdc) {
         $users->wdc->update(['progress' => 98]);
      }else {
         $users->madc->update(['progress' => 98]);
      }
   }

   public function deletePayment(Request $req)
   {
      if ($req->ajax()) {
         return \App\Payment::destroy($req->id);
      }
   }

   public function submissions()
   {
      // dd($data);
      return view('user.admin.submission');
   }

   public function submissionsAll()
   {
      // dd($data);
      return view('user.admin.submissionAll');
   }

   public function submissionsGetData()
   {
      $submissionWdc = \App\Submission::whereHas('user.wdc')->with('user.wdc')->get();
      $submissionMadc = \App\Submission::whereHas('user.madc')->with('user.madc')->get();
      $data = [];
      foreach ($submissionMadc as $subM) {
         $progressSM = (int)$subM->user->madc['progress'];
         if ($subM->visible && $progressSM != 99) {
            $data[] = [
              'id' => $subM->user->id,
              'submission_id' => $subM->id,
              'team_name' => $subM->user->team_name,
              'kompetisi' => "MADC Competition",
              'theme' => $subM->theme,
              'progress' => $subM->user->madc['progress'],
              'submissions_path' => $subM['submissions_path'],
           ];
         }
      }
      foreach ($submissionWdc as $subW) {
         $progressSW = (int)$subW->user->wdc['progress'];
         if ($subW->visible && $progressSW != 99) {
            $data[] = [
              'id' => $subW->user->id,
              'submission_id' => $subW->id,
              'team_name' => $subW->user->team_name,
              'kompetisi' => "WDC Competition",
              'theme' => $subW->theme,
              'progress' => $subW->user->wdc['progress'],
              'submissions_path' => $subW['submissions_path'],
           ];
        }
      }
      return Datatables::of($data)
      ->editColumn('submissions_path', function($data){
         return '<a href="'. $data['submissions_path'] .'" class="btn-primary btn-sm" target="blank"><i class="fa fa-drive"></i> Link</a>';
      })
      ->addColumn('action', function($data){
         if ($data['progress'] == 6 || $data['progress'] == 8) {
            return'
            <a href="#" id="'. $data['submission_id'] .'" class="btn-danger btn-sm delete-submission" data-toggle="modal" data-target="#deleteTeam"><i class="fa fa-trash" ></i></a>
            ';
         }else {
            return'
            <a href="#" id="'. $data['id'] .'" class="btn-success btn-sm lolos"><i class="fa fa-check" aria-hidden="true"></i></a>
            <a href="#" id="'. $data['id'] .'" class="btn-warning btn-sm ndak-lolos"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" id="'. $data['submission_id'] .'" class="btn-danger btn-sm delete-submission" data-toggle="modal" data-target="#deleteTeam"><i class="fa fa-trash" ></i></a>
            ';
         }

      })
      ->addIndexColumn()
      ->rawColumns(['action', 'submissions_path'])
      ->make(true);
   }

   public function submissionsGetAllData()
   {
      $submissionWdc = \App\Submission::whereHas('user.wdc')->with('user.wdc')->get();
      $submissionMadc = \App\Submission::whereHas('user.madc')->with('user.madc')->get();
      $data = [];
      foreach ($submissionMadc as $subM) {
            $data[] = [
              'id' => $subM->user->id,
              'submission_id' => $subM->id,
              'team_name' => $subM->user->team_name,
              'kompetisi' => "MADC Competition",
              'theme' => $subM->theme,
              'progress' => $subM->user->madc['progress'],
              'submissions_path' => $subM['submissions_path'],
              'parent_id' => $subM['parent_id']
           ];
      }
      foreach ($submissionWdc as $subW) {
            $data[] = [
              'id' => $subW->user->id,
              'submission_id' => $subW->id,
              'team_name' => $subW->user->team_name,
              'kompetisi' => "WDC Competition",
              'theme' => $subW->theme,
              'progress' => $subW->user->wdc['progress'],
              'submissions_path' => $subW['submissions_path'],
              'parent_id' => $subW['parent_id']
           ];
      }
      return Datatables::of($data)
      ->editColumn('submissions_path', function($data){
         return '<a href="'. $data['submissions_path'] .'" class="btn-primary btn-sm" target="blank"><i class="fa fa-drive"></i> Link</a>';
      })
      ->addColumn('action', function($data){
         if ($data['progress'] == 6 || $data['progress'] == 8) {
            return'
            <a href="#" id="'. $data['submission_id'] .'" class="btn-danger btn-sm delete-submission" data-toggle="modal" data-target="#deleteTeam"><i class="fa fa-trash" ></i></a>
            ';
         }else {
            return'
            <a href="#" id="'. $data['id'] .'" class="btn-success btn-sm lolos"><i class="fa fa-check" aria-hidden="true"></i></a>
            <a href="#" id="'. $data['id'] .'" class="btn-warning btn-sm ndak-lolos"><i class="fa fa-times" aria-hidden="true"></i></a>
            <a href="#" id="'. $data['submission_id'] .'" class="btn-danger btn-sm delete-submission" data-toggle="modal" data-target="#deleteTeam"><i class="fa fa-trash" ></i></a>
            ';
         }

      })
      ->addIndexColumn()
      ->rawColumns(['action', 'submissions_path'])
      ->make(true);
   }

   public function lolosSubmisi(Request $req)
   {
      $users = \App\User::find($req->id);
      if ($users->wdc) {
         if ($users->wdc->progress == 5) {
            $users->wdc->update(['progress' => 6]);
         }elseif ($users->wdc->progress == 7) {
            $users->wdc->update(['progress' => 8]);
         }
      }else {
         if ($users->madc->progress == 5) {
            $users->madc->update(['progress' => 6]);
         }elseif ($users->madc->progress == 7) {
            $users->madc->update(['progress' => 8]);
         }
      }

   }

   public function ndakLolosSubmisi(Request $req)
   {
      $users = \App\User::find($req->id);
      if ($users->wdc) {
         $users->wdc->update(['progress' => 99]);
      }else {
         $users->madc->update(['progress' => 99]);
      }
   }

   public function deleteSubmission(Request $req)
   {
      if ($req->ajax()) {
         $sub = Submission::destroy($req->id);
      }
   }

   public function setting()
   {
      $data['settings'] = Setting::all();

      return view('user.admin.setting',$data);
   }
   public function settingUpdate(Request $request)
   {
      $data = Setting::find($request->id);

      $data->is_active = $request->is_active ;

       $data->save();
   }

}
