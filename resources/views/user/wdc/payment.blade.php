@extends('user.layouts.main')

@extends('user.wdc.menu')
@section('title', 'Pembayaran')

@section('content')
	<div class="box">
         <!-- Payment Box -->
     	<div class="payment">
         	<h1 class="title">Pembayaran</h1>
        <!-- Tulisan berubah sesuai progress tim -->
            @if($setting->is_active == false)
                <p class="text-danger"><strong>Mohon maaf, priode pembayaran telah lewat!</strong></p>
            @else
                @if($user->wdc['progress'] < 2)
                    <div class="status">Status : <span class="text-danger" >Belum bisa pembayaran, kunci data tim terlebih dahulu!</span></div>
                @elseif($user->wdc['progress'] == 2)
                    <div class="status">Status : <span class="text-danger" >Mohon untuk segera upload pembayaran</span></div>
                @elseif($user->wdc['progress'] == 3)
                    <div class="status">Status : <span class="text-warning" >Menunggu Konfirmasi</span></div>
                @elseif($user->wdc['progress'] > 3)
                    <div class="status">Status : <span class="text-success" >Sudah melakukan pembayaran</span></div>
                @endif
            @endif

            <div class="row payment-info ">
                <div class="col-md-2">
                    <strong>Kompetisi</strong>
                </div>
                <div class="col-md-10">:
                    <span>Web Design Competition</span>
                </div>
            </div>

            <div class="row payment-info ">
                <div class="col-md-2">
                    <strong>Nama Tim</strong>
                </div>
                <div class="col-md-10">:
                     <span>{{$user->team_name}}</span>
                </div>
            </div>

            <div class="row payment-info ">
                <div class="col-md-2">
                    <strong>Total Pembayaran</strong>
                </div>
                <div class="col-md-10">:
                     <span>Rp 80.000,- </span>
                </div>
            </div>
        <!-- Button upload akan hilang kalau Pembayaran sudah dikonfirmasi admin -->
        @if($user->wdc['progress'] == 2 && $setting->is_active == true)
            <button  type="button" data-toggle="modal" data-target="#uploadPayment" class="btn btn-custom"><i class="fas fa-upload"></i> Unggah Bukti Pembayaran</button>
        @endif
        @if($errors->has('photo'))
            <br><strong>{{ $errors->first('photo') }}</strong>
        @endif

        </div>
        <!-- End Payment  Box-->
    </div>

     <!-- Payment Modal -->
    <div class="modal fade" id="uploadPayment" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Unggah Bukti Pembayaran</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('wdc.payment.upload') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="form-group">
                        <label for="tim">Nama Tim :</label>
                        <input type="text" class="form-control" name="tim" value="{{$user->team_name}}" disabled>
                     </div>
                     <div class="form-group">
                        <label for="amount">Total :</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input name="amount" type="text" class="form-control" value="800000" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bukti">Bukti Pembayaran</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo" required>
                    </div>
                    <button type="submit" class="btn btn-custom">Kirim</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
    <!-- End of Payment Modal -->
@endsection
