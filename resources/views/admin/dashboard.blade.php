@extends('admin.layouts.app')

@section('title', 'Admin Dashboard')
@section('content')
<!--mulai content section-->
<div class="col-lg-10 col-md-9 col-sm-12 box-db">
  <div class="container-fluid px-3">

  <!--mulai bigbox event-->
    <div class="row report">
      <div class="col-md-3">
        <section class="bigbox pd-30">
          <div class="flex flex-center">
            <h1 class="mg-center"><i class="fa fa-laptop fa-2x"></i></h1>
            <div class="text-center">
              <h2 class="mt-bold mg-b-5">{{ count($wdc) }}</h2>
              <p class="smaller">Pendaftar WDC</p>
            </div>
          </div>
        </section>
      </div>
      <div class="col-md-3">
        <section class="bigbox pd-30">
          <div class="flex flex-center">
            <h1 class="mg-center"><i class="fa fa-mobile fa-2x"></i></h1>
            <div class="text-center">
              <h2 class="mt-bold mg-b-5">{{ count($madc) }}</h2>
              <p class="smaller">Pendaftar MADC</p>
            </div>
          </div>
        </section>
      </div>
      <div class="col-md-3">
        <section class="bigbox pd-30">
          <div class="flex flex-center">
            <h1 class="mg-center"><i class="fa fa-code fa-2x"></i></h1>
            <div class="text-center">
              <h2 class="mt-bold mg-b-5">n/a</h2>
              <p class="smaller">Pendaftar ICPC</p>
            </div>
          </div>
        </section>
      </div>
      <div class="col-md-3">
        <section class="bigbox pd-30">
          <div class="flex flex-center">
            <h1 class="mg-center"><i class="fa fa-microphone fa-2x"></i></h1>
            <div class="text-center">
              <h2 class="mt-bold mg-b-5">n/a</h2>
              <p class="smaller">Pendaftar SemNas</p>
            </div>
          </div>
        </section>
      </div>
    </div>
  <!--akhir bigbox event-->

    <!--mulai big box news-->
    <div class="row">
      <div class="col-sm-12">
        <section class="bigbox pd-20">
          <canvas id="chartPendaftar"></canvas>
        </section>
      </div>
    </div>
    <!--akhir bigbox news-->
    <div class="row">
      <div class="col-md-6">
        <section class="bigbox pd-20">
            <h4 class="text-left title-event-db">Aktivitas Terbaru</h4>
            <h6 class="text-left mg-bt-20">Tim yang Terdaftar</h6>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Tim</th>
                  <th scope="col">Kompetisi</th>
                  <th scope="col">Status Terbaru</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $user)
                <tr>
                  <th scope="row">{{ $i++ }}</th>
                  <td>{{ $user->name }}</td>
                  @if($user->has('MadcTeam'))
                     <td>MADC</td>
                  @else
                     <td>WDC</td>
                  @endif
                  <td><span class="badge badge-primary">Registered</span></td>
                </tr>
                @endforeach
              </tbody>
            </table>
        </section>
      </div>
      <div class="col-md-6">
        <section class="bigbox pd-20">
            <h4 class="text-left title-event-db">Aktivitas Terbaru</h4>
            <h6 class="text-left mg-bt-20">Pembayaran</h6>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama Tim</th>
                  <th scope="col">Kompetisi</th>
                  <th scope="col">Jumlah</th>
                  <th scope="col">Status Terbaru</th>
                </tr>
              </thead>
              <tbody>
                 @foreach($users as $user)
                 <tr>
                   <th scope="row">{{ $ii++ }}</th>
                   <td>{{ $user->name }}</td>
                   @if($user->has('MadcTeam'))
                      <td>MADC</td>
                   @else
                      <td>WDC</td>
                   @endif
                   <td>Rp 50.000</td>
                   <td><span class="badge badge-danger">Confirm</span></td>
                 </tr>
                 @endforeach

              </tbody>
            </table>
        </section>
      </div>
    </div>

  </div>
</div>
<!--akhir content section-->
@endsection
