@extends('user.layouts.main')

@extends('user.madc.menu')
@section('title', 'Submssion')



@section('content')
    <div class="box">
                     <!-- Payment Box -->
        <div class="submission">
            <h1 class="title">Unggah Berkas</h1>

            @if($setting->is_active == false || $submission_2->is_active == false)
                <p class="text-danger"><strong>Mohon maaf, priode submission telah lewat!</strong></p>
            @else
                @if($user-> madc['progress'] < 4)
                    <div class="status">Status : <span class="text-danger" >Harap melakukan pembayaran terlebih dahulu</span></div>
                @elseif($user-> madc['progress'] == 4 || $user-> madc['progress'] == 6)
                    <div class="status">Status : <span class="text-danger" >Berkas Belum di Unggah</span></div>
                @elseif($user-> madc['progress'] == 5 || $user-> madc['progress'] == 7)
                    <div class="status">Status : <span class="text-warning" >Berkas Sudah di Unggah, Menunggu Pengumuman</span></div>
                @endif
            @endif

             <div class="row submission-info ">
                 <div class="col-md-2">
                    <strong>Kompetisi</strong>
                </div>
                <div class="col-md-10">:
                        <span>Mobile Apps Design Competition</span>
                </div>
            </div>

            <div class="row submission-info ">
                <div class="col-md-2">
                    <strong>Nama Tim</strong>
                </div>
                <div class="col-md-10">:
                        <span>{{$user->team_name}}</span>
                </div>
            </div>

            <div class="row submission-info ">
                <div class="col-md-2">
                    <strong>Proposal</strong>
                </div>
                <div class="col-md-10">: 
                        <span>Hello world</span>
                </div>
            </div>
            @if($setting->is_active == true && $submission_2->is_active == true)
                @if($user-> madc['progress'] == 4 || $user-> madc['progress'] == 6)
                <button  type="button" data-toggle="modal" data-target="#uploadProposal" class="btn btn-custom"><i class="fas fa-upload"></i> Unggah Berkas</button>
                @endif
            @endif
        </div>
                     <!-- End Payment  Box-->
    </div>
         <!-- End Content Box -->



    <!-- Payment Modal -->
    <div class="modal fade" id="uploadProposal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Unggah Berkas</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('madc.submission.upload') }}" method="post">
                    <div class="form-group">
                        <label for="tim">Tema :</label>
                        <select name="tema" id="" class="form-control">
                            <option value="Makanan dan Minuman">Makanan dan Minuman</option>
                            <option value="Kimia">Kimia</option>
                            <option value="Furniture">Furniture</option>
                            <option value="Otomotif">Otomotif</option>
                            <option value="Elektronik">Elektronik</option>
                            <option value="Tekstil">Tekstil</option>
                        </select>
                     </div>

                     <div class="form-group">
                        <label for="tim">Link :</label>
                        <input type="text" class="form-control" name="link" placeholder="http://drive.google.com" required oninvalid="this.setCustomValidity('Harap isi dengan link submission')" oninput="this.setCustomValidity('')">
                    </div>
                    
                    <button type="submit" class="btn btn-custom">Kirim</button>
                    @csrf
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
