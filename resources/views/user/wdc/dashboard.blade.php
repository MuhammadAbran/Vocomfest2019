@extends('user.layouts.app')

@section('title', 'Dashboard | WDC')
@section('teamName', 'Nama Team')
@section('team', 'WDC Team')

@section('content')
<div class="col-lg-10 col-md-9 col-sm-12 box-db">
 <div class="container-fluid px-3">

 <!--mulai bigbox event-->
    <div class="row bigbox">
      <div class="col-sm-12">
        <div class="row m-0 pd-bt-15">
          <div class="col-sm-12 text-left">
            <h3 class="title-event-db">Welcome</h3>
          </div>
            <div class="col-sm-12 text-left event-db">
              <p><span class="font-weight-bold">Congrats, you've been registered!</span> And now, next step is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, veniam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, rem!
              </p>
            </div>
          </div>
        </div>
      </div>
    <!--akhir bigbox event-->

    <!--mulai big box news-->
    <div class="row bigbox">
      <div class="col-sm-12">
        <div class="row m-0 pd-bt-15">
          <div class="col-sm-12 text-left"><h3 class="title-db">Progress</h3></div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-sm-12 news-db">
                <h1>  <i class="fa fa-user-plus fa-2x"></i></h1>
              </div>
              <div class="col-sm-12">
                <p class="fr-bold">Registration</p>
                <p>Status : Registered</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-sm-12 news-db">
                <h1>  <i class="fa fa-credit-card fa-2x"></i></h1>
              </div>
              <div class="col-sm-12">
                <p class="fr-bold">Payment</p>
                <p>Status : - </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="row">
              <div class="col-sm-12 news-db">
                <h1>  <i class="fa fa-upload fa-2x"></i></h1>
              </div>
              <div class="col-sm-12">
                <p class="fr-bold">Upload</p>
                <p>Status : - </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--akhir bigbox news-->

 </div>
</div>
<!--akhir content section-->
@endsection
