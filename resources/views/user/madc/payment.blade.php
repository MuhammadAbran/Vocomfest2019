@extends('user.layouts.main')

@extends('user.madc.menu')
@section('title', 'Team | MADC')



@section('content')
	<div class="box">
         <!-- Payment Box -->
     	<div class="payment">
         	<h1 class="title">Pembayaran</h1>
            <?php if ($pay[0]->progress < 3) : ?>
                <div class="status">Status : <span class="text-danger" >Belum melakukan pembayaran</span></div>
            <?php elseif ($pay[0]->progress == 3) : ?>
         	    <div class="status">Status : <span class="text-warning" >Menunggu Konfirmasi Admin</span></div>
            <?php elseif ($pay[0]->progress > 3) : ?>
                <div class="status">Status : <span class="text-success" >Telah Melakukan Pembayaran</span></div>
            <?php endif ?>
            <div class="row payment-info ">
                <div class="col-md-2">
                    <strong>Kompetisi</strong>
                </div>
                <div class="col-md-10">:
                    <span>Mobile Apps Design Competition</span>
                </div>
            </div>

            <div class="row payment-info ">
                <div class="col-md-2">
                    <strong>Nama Tim</strong>
                </div>
                <div class="col-md-10">:
                     <span>{{$tim[0]->team_name}}</span>
                </div>
            </div>

            <div class="row payment-info ">
                <div class="col-md-2">
                    <strong>Total Pembayaran</strong>
                </div>
                <div class="col-md-10">:
                     <span>Rp. 50.000</span>
                </div>
            </div>
            <?php if ($pay[0]->progress < 4) : ?>
                <button  type="button" data-toggle="modal" data-target="#uploadPayment" class="btn btn-custom"><i class="fas fa-upload"></i> Unggah Bukti Pembayaran</button>
            <?php endif ?>
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
                <form action ="{{route('madc.payment.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <input type="hidden" value="{{$tim[0]->id}}" name="id">
                    <div class="form-group">
                        <label for="tim">Nama Tim :</label>
                        <input type="text" class="form-control" name="tim" value="{{$tim[0]->team_name}}" disabled>
                     </div>
                     <div class="form-group">
                        <label for="amount">Total :</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">Rp.</span>
                            </div>
                            <input name="amount" type="text" class="form-control" value="500000" disabled>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="bukti">Bukti Pembayaran</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
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
