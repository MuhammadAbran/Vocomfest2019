@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'Dashboard')

@section('breadcrumbs')
<nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-light"  style="color:#7386D5;margin: 1px 0 0 30px">
       <li class="breadcrumb-item active">Dashboard /</li>
    </ol>
   </nav>
@endsection

@section('content')
    <div class="box" style="margin-top: -20px;">
         <!-- Chart -->
         <div class="row" style="margin-bottom: 15px; margin-top: -12px">
            <div class="col-md-3 card" style="margin-right: 15px; margin-bottom: 12px">
               <div class="card-body">
                <h5 class="card-title"><i class="fa fa-credit-card"></i> Total Pemasukan</h5><hr>
                <h2 style="color:#7386D5;">Rp. {{ format_uang($pembayaran) }}</h2>
                <small class="text-muted" style="font-size: 11px">WDC: Rp. {{ format_uang($wdc_bayar_data * 80000) }} | MADC: Rp. {{ format_uang($madc_bayar_data * 100000) }}</small>
              </div>
            </div>
            <div class="col-md-4 card" style="margin-right: 15px; margin-bottom: 12px">
               <div class="card-body">
                  <h5 class="card-title"><i class="fa fa-lock"></i> Telah Kunci Data</h5><hr>
                  <div class="row">
                     <div class="col-md-5 card" style="margin-right: 20px">
                        <div class="car-body">
                           <h6 class="card-title" style="margin-top: 10px;"><i class="fa fa-users"></i> WDC</h5>
                         <h5 style="color:#7386D5;">{{ $wdc_kunci_data }} Team</h4>
                        </div>
                     </div>
                     <div class="col-md-5 card" style="margin-right: 20px">
                        <div class="car-body">
                           <h6 class="card-title" style="margin-top: 10px;"><i class="fa fa-users"></i> MADC</h5>
                         <h5 style="color:#7386D5;">{{ $madc_kunci_data }} Team</h4>
                        </div>
                     </div>
                  </div>
              </div>
            </div>
            <div class="col-md-4 card" style="margin-right: 15px; margin-bottom: 12px">
               <div class="card-body">
                <h5 class="card-title"><i class="fa fa-check-circle"></i> Telah Bayar</h5><hr>
                <div class="row">
                   <div class="col-md-5 card" style="margin-right: 20px">
                      <div class="car-body">
                        <h6 class="card-title" style="margin-top: 10px;"><i class="fa fa-users"></i> WDC</h5>
                       <h5 style="color:#7386D5;">{{ $wdc_bayar_data }} Team</h4>
                      </div>
                   </div>
                   <div class="col-md-5 card" style="margin-right: 20px">
                      <div class="car-body">
                        <h6 class="card-title" style="margin-top: 10px;"><i class="fa fa-users"></i> MADC</h5>
                       <h5 style="color:#7386D5;">{{ $madc_bayar_data }} Team</h4>
                      </div>
                   </div>
                </div>
              </div>
            </div>
         </div>
         <div class="row">
             <div class="col-md-8">
                    <div >
                         <canvas id="myChart" width="400" height="300"></canvas>
                    </div>
             </div>
             <div class="col-md-4">
                 <div class="row">
                    <div class="col-md-12">
                            <span style="font-size:14px;" class="text-danger">WDC User Activity</span>
                            <table class="table striped" style="font-size:14px !important">
                                <thead>
                                    <tr>
                                        <th>Nama Tim</th>
                                        <th>Progress</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wdc_activity as $activity)
                                        <tr>
                                            <td>{{$activity->team_name}}</td>
                                            <td>
                                            @component('components.progress')
                                                @slot('progress',$activity->progress)
                                            @endcomponent
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                    <div style="margin-top:40px;"></div>
                    <div class="col-md-12">
                        <span style="font-size:14px;" class="text-danger">Madc User Activity</span>
                            <table class="table striped" style="font-size:14px !important">
                                <thead>
                                    <tr>
                                        <th>Nama Tim</th>
                                        <th>Activity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($madc_activity as $activity)
                                        <tr>
                                            <td>{{$activity->team_name}}</td>
                                            <td>
                                            @component('components.progress')
                                                @slot('progress',$activity->progress)
                                            @endcomponent
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                    </div>
                 </div>
             </div>
         </div>

    </div>
@endsection
@push('scripts')
<script>
    var ctx = document.getElementById("myChart").getContext('2d');

    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["MADC", "WDC", "NTF", "ICPC","Total Peserta"],
            datasets: [{
                label: '# Pendaftar',
                data: [{{$madc_all}}, {{$wdc_all}}, 0, 0, {{$total-1}}],
                backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                'rgba(255,99,132,1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
@endpush
