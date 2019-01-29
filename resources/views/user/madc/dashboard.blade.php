@extends('user.layouts.main')

@extends('user.madc.menu')
@section('title', 'Dashboard - Vocomfest 2019')



@section('content')
    <div class="box">
         <!-- Timeline -->
        <div class="timeline">
            <div class="timeline__group">
                <span class="timeline__year">Timeline</span>

                <!-- Timeline box -->
                <!-- Buat liat progress tim, kalo sudah lewat progressnya class timeline-danger berubah jadi time-line success -->
                
                @component('components.timeline_box')
                    @slot('status',' timeline-success')
                    @slot('title','register')
                    @slot('description','Registerasi telah berhasil')
                @endcomponent

                @component('components.timeline_box')
                    @slot('title','Verifikasi Email')
                    @if($user->progress == 0)
                        @slot('status',' timeline-warning')
                        @slot('description','Belum varifikasi')  
                    @else
                        @slot('status',' timeline-success')
                        @slot('description','Email berhasil di verifikasi')  
                    @endif
                @endcomponent

                @component('components.timeline_box')
                    @slot('title','Melengkapi Data Tim')

                    @if($user->progress  < 1)
                        @slot('status',' timeline-danger')
                        @slot('description','Belum bisa melengkapi data tim, silahkan verifikasi email terlebih dahulu')  
                    @elseif($user->progress <=1)
                        @slot('status',' timeline-warning')
                        @slot('description','Mohon untuk melengkapi data tim dan mengunci data tim')  
                    @elseif($user->progress >=1)
                        @slot('status',' timeline-success')
                        @slot('description','Data tim berhasil dikunci')  
                    @endif
                @endcomponent

                @component('components.timeline_box')
                    @slot('title','Pembayaran')
                    @if($user->progress  < 2)
                        @slot('status',' timeline-danger')
                        @slot('description','Lengkapi Pembayaran terlebih dahulu')  
                    @elseif($user->progress == 2)
                        @slot('status',' timeline-danger')
                        @slot('description','Mohon untuk segera upload bukti pembayaran')  
                        
                    @elseif($user->progress == 3)
                        @slot('status',' timeline-warning')
                        @slot('description','Berhasil di upload, menunggu konfirmasi admin')  

                     @elseif($user->progress >=4)
                        @slot('status',' timeline-success')
                        @slot('description','Pembayaran telah selesai')  
                    @endif
                @endcomponent

                @component('components.timeline_box')
                    @slot('title','Submission #1')
                    @if($user->progress  < 4)
                        @slot('status',' timeline-danger')
                        @slot('description','Lengkapi Pembayaran terlebih dahulu')  
                    @elseif($user->progress == 4)
                        @slot('status',' timeline-danger')
                        @slot('description','Belum upload submission #1')  
                        
                    @elseif($user->progress == 5)
                        @slot('status',' timeline-warning')
                        @slot('description','Berhasil di upload, menunggu pengumuman')  

                     @elseif($user->progress <= 5 || $user->progress == 99)
                        @slot('status',' timeline-danger')
                        @slot('description','Mohon maaf, anda tidak lolos seleksi tahap #1')  

                    @elseif($user->progress >= 6)
                        @slot('status',' timeline-success')
                        @slot('description','Selamat Anda lolos tahap #1')  
                    @endif
                @endcomponent

                @if($user->progress > 5 & $user->progress < 99)
                @component('components.timeline_box')
                    @slot('title','Submission #2')
                    @if($user->progress == 6)
                        @slot('status',' timeline-danger')
                        @slot('description','Belum upload Submission #2')  
                        
                    @elseif($user->progress == 7)
                        @slot('status',' timeline-warning')
                        @slot('description','Berhasil di upload, menunggu pengumuman')  

                     @elseif($user->progress <= 7 || $user->progress == 99)
                        @slot('status',' timeline-danger')
                        @slot('description','Mohon maaf, anda tidak lolos seleksi tahap #2')  

                    @elseif($user->progress >= 8)
                        @slot('status',' timeline-success')
                        @slot('description','Selamat Anda lolos tahap #2')  
                    @endif
                @endcomponent
                @endif
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
