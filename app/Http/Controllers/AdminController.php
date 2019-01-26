<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\News;
use Session;
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
      return view('user.admin.dashboard');
   }

   public function madcTeams()
   {

      return view('user.admin.madc_teams');
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
                   return '<span class="badge badge-danger">XXX</span>';
               }
               elseif($data['progress'] == 1){
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
                  return '<span class="badge badge-danger">XXX</span>';
              }
               elseif($data['progress'] == 1){
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

      return view('user.admin.wdc_teams', compact(['users', 'i']));
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
         ->addColumn('action', function($data){
            if($data['status'] === 1){
               $btn_status = '<a href="#" id="'. $data['id'] .'" class="btn-warning btn-sm publish-btn unpublish">Unpublish</a> ';
            }else{
               $btn_status = '<a href="#" id="'. $data['id'] .'" class="btn-success btn-sm publish-btn publish" publish>Publish</a> ';
            }
            return
            $btn_status.=
                '<a href="#" id="'. $data['id'] .'" class="btn-info btn-sm edit-gallary"  data-toggle="modal" data-target="#add-gallary"><i class="fa fa-edit"></i></a>
                 <a href="" id="'. $data['id'] .'" class="btn-danger btn-sm delete-gallary" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash" ></i></a>
            ';
         })
         ->addIndexColumn()
         ->rawColumns(['action'])
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

   public function fetchGallary(Request $req)
   {
      $id = $req->id;
      $gallary = \App\Gallary::find($id);
      $data = [
         'title' => $gallary->title,
         'gallaries_path' => realpath($gallary->gallaries_path)
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
            ->addColumn('action', function ($data){

               if($data['is_published'] === 1){
                  $btn_status = '<a href="#" id="'. $data['id'] .'" class="btn-warning btn-sm publish-btn unpublish">Unpublish</a> ';
               }else{
                  $btn_status = '<a href="#" id="'. $data['id'] .'" class="btn-success btn-sm publish-btn publish" publish>Publish</a> ';
               }
               return
               $btn_status.=
                   '<a href="'. route('newsPage') .'" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                    <a href="" id="'. $data['id'] .'" class="btn-danger btn-sm delete-news" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash" ></i></a>
               ';
          })
            ->addIndexColumn()
            ->rawColumns(['action'])
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
      // dd($request->thumbnail);
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

   public function editNews()
   {
      return view('user.admin.edit_news');
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
      $i = 1;
      foreach ($paymentsWdc as $paymentW) {
            $data[] = [
                  'id' => $paymentW->user->id,
                  'i' => $i++,
                  'team_name' => $paymentW->user->team_name,
                  'kompetisi' => "WDC Competition",
                  'payment_path' => $paymentW['payment_path']
               ];
      }
      foreach ($paymentsMadc as $paymentM) {
         $data[] = [
               'id' => $paymentM->user->id,
               'i' => $i++,
               'team_name' => $paymentM->user->team_name,
               'kompetisi' => "MADC Competition",
               'payment_path' => $paymentM['payment_path']
            ];
      }

      return Datatables::of($data)
      ->addColumn('action', function ($data){
           return'
               <a href="#" class="btn-success btn-sm"><i class="fa fa-check"></i></a>
               <a href="" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
               <a href="#" id="'. $data['id'] .'" class="btn-danger btn-sm delete-payment-data" data-toggle="modal" data-target="#delete-modal"><i class="fa fa-trash" ></i></a>
           ';
      })
      ->make(true);
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

   public function submissionsGetData()
   {
      $submissionWdc = \App\Submission::whereHas('user.wdc')->with('user.wdc')->get();
      $submissionMadc = \App\Submission::whereHas('user.madc')->with('user.madc')->get();
      $data = [];
      foreach ($submissionMadc as $subM) {
         $data[] = [
           'id' => $subM->user->id,
           'team_name' => $subM->user->team_name,
           'kompetisi' => "MADC Competition",
           'progress' => $subM->user->madc['progress'],
           'submissions_path' => $subM['submissions_path'],
        ];
      }
      foreach ($submissionWdc as $subW) {
            $data[] = [
              'id' => $subW->user->id,
              'team_name' => $subW->user->team_name,
              'kompetisi' => "WDC Competition",
              'progress' => $subW->user->wdc['progress'],
              'submissions_path' => $subW['submissions_path'],
           ];
        }
      return Datatables::of($data)
      ->editColumn('submissions_path', function($data){
         return '<a href="'. $data['submissions_path'] .'" class="btn-warning btn-sm" target="blank"><i class="fa fa-drive"></i> Link</a>';
      })
      ->addColumn('action', function($data){
         return'
             <a href="#" class="btn-success btn-sm"><i class="fa fa-check"></i></a>
             <a href="./view-team.html" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
             <a href="#" class="btn-danger btn-sm" data-toggle="modal" data-target="#deleteTeam"><i class="fa fa-trash" ></i></a>
         ';
      })
      ->addIndexColumn()
      ->rawColumns(['action', 'submissions_path'])
      ->make(true);
   }


}
