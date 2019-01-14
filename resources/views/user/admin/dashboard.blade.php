@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'Dashboard | Admin')

@section('breadcrumbs')




@endsection

@section('content')
    <div class="box">
         <!-- Timeline -->
        <div class="timeline">
            <div class="timeline__group">
                <span class="timeline__year">Timeline</span>

                <!-- Timeline box -->
                <div class="timeline__box  timeline-danger">
                    <div class="timeline__date">
                        <span class="timeline__day">1-30</span>
                        <span class="timeline__month">Feb</span>
                    </div>
                    <div class="timeline__post">
                        <div class="timeline__content">
                        <h1>Register</h1>
                        <p>Attends the Philadelphia Museum School of Industrial Art. Studies design with Alexey Brodovitch, art director at Harper's Bazaar, and works as his assistant.</p>
                        </div>
                    </div>
                </div> 

                <div class="timeline__box  timeline-danger">
                    <div class="timeline__date">
                        <span class="timeline__day">1-30</span>
                        <span class="timeline__month">Feb</span>
                    </div>
                    <div class="timeline__post">
                        <div class="timeline__content">
                        <h1>Verifikasi Email</h1>
                        <p>Attends the Philadelphia Museum School of Industrial Art. Studies design with Alexey Brodovitch, art director at Harper's Bazaar, and works as his assistant.</p>
                        </div>
                    </div>
                </div>        
                  
                 <!-- End Timeline box -->  
             </div>
        </div>

        <!-- End Of timeline -->
        <ul class="timeline-info">
            <div class="danger"><span>Belum Selesai</span></div>
            <div class="warning"><span>Menunggu Konfirmasi</span></div>
            <div class="success"><span>Selesai</span></div>
        </ul>
    </div>
@endsection