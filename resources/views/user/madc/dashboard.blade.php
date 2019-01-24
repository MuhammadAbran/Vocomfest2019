@extends('user.layouts.main')

@extends('user.madc.menu')
@section('title', 'Dashboard | MADC')



@section('content')
    <div class="box">
         <!-- Timeline -->
        <div class="timeline">
            <div class="timeline__group">
                <span class="timeline__year">Timeline</span>

                <!-- Timeline box -->
                <!-- Buat liat progress tim, kalo sudah lewat progressnya class timeline-danger berubah jadi time-line success -->
                @if($user->madc['progress'] < 0)
                <div class="timeline__box  timeline-danger">
                @else
                <div class="timeline__box  timeline-success">
                @endif
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
            
                @if($user->email_verified_at != null)
                <div class="timeline__box  timeline-danger">
                @else
                <div class="timeline__box  timeline-success">
                @endif
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
