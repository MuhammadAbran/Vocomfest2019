@extends('user.layouts.main')

@extends('user.madc.menu')
@section('title', 'Team | MADC')



@section('content')
<div class="box">
    <!-- Team Member  -->
    <button class="btn btn-warning" style="margin-bottom: 20px;" data-toggle="modal" data-target="#kunciData"> <i class="fas fa-lock"></i>
        Kunci Data Tim</button>
    <div class="row team">
        <!-- Team Member Box -->
        <div class="column">
            <div class="card">
                <img src="{!! asset('assets/img/iu.jpg') !!}" alt="IU" style="width:100%">
                <div class="container">
                    <h2>{{$team[0]->leader_name}}</h2>
                    <p class="title">Ketua Tim</p>
                    <p>{{$leader[0]->leader_email}}</p>
                    <p>
                        <a href="{!! asset('assets/img/iu.jpg') !!}" data-rel="lightcase">
                            <button class="btn btn-custom">Lihat Identitas</button>
                        </a>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#leader">
                            Edit Data
                        </button>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Member Box -->

        <!-- Team Member Box -->
        <div class="column">
            <div class="card">
                <img src="{!! asset('assets/img/iu.jpg') !!}" alt="IU" style="width:100%">
                <div class="container">
                    <h2>{{$team[0] -> coleader_name}}</h2>
                    <p class="title">Ketua Tim</p>
                    <p>{{$team[0] -> coleader_email}}</p>
                    <p>
                        <a href="{!! asset('assets/img/iu.jpg') !!}" data-rel="lightcase">
                            <button class="btn btn-custom">Lihat Identitas</button>
                        </a>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#coleader">
                            Edit Data
                        </button>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Member Box -->

        <!-- Team Member Box -->
        <div class="column">
            <div class="card">
                <img src="{!! asset('assets/img/iu.jpg') !!}" alt="IU" style="width:100%">
                <div class="container">
                    <h2>{{$team[0] -> member1_name}}</h2>
                    <p class="title">Ketua Tim</p>
                    <p>{{$team[0] -> member1_email}}</p>
                    <p>
                        <a href="{!! asset('assets/img/iu.jpg') !!}" data-rel="lightcase">
                            <button class="btn btn-custom">Lihat Identitas</button>
                        </a>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#member1">
                            Edit Data
                        </button>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Member Box -->

        <!-- Team Member Box -->
        <div class="column">
            <div class="card">
                <img src="{!! asset('assets/img/iu.jpg') !!}" alt="IU" style="width:100%">
                <div class="container">
                    <h2>{{$team[0] -> member2_name}}</h2>
                    <p class="title">Ketua Tim</p>
                    <p>{{$team[0] -> member2_email}}</p>
                    <p>
                        <a href="{!! asset('assets/img/iu.jpg') !!}" data-rel="lightcase">
                            <button class="btn btn-custom">Lihat Identitas</button>
                        </a>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#member2">
                            Edit Data
                        </button>
                    </p>
                </div>
            </div>
        </div>
        <!-- End Member Box -->

    </div>
    <!-- End of Team member -->
</div>

<!--Kunci Data Modal -->
<div class="modal fade" id="kunciData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Kunci Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Apakah anda yakin ingin mengunci data tim <strong>Blabalba?</strong>
                <small>Note <span class="text-danger">*</span> Data yang telah dikunci tidak dapat di edit kembali</small>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-warning">Kunci Data</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Leader Edit Data Modal -->
<div class="modal fade" id="leader" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <form action="{{ route('madc.edit.team') }}" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Ketua</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="hidden" name="id" value={{$team[0]->id}}>                
              <input type="hidden" name="angka" value="1">
                Nama
                <input type="text" name = "name" value= {{$team[0]->leader_name}}><br>
                No. HP
                <input type="text" name = "phone" value= {{$team[0]->leader_phone}}><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input class="btn btn-primary" type="submit" value="Save Changes" name="">
            </div>
        </div>
    </div>
    @csrf
  </form>
</div>

<!-- Co Leader Edit Data Modal -->
<div class="modal fade" id="coleader" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <form action="{{ route('madc.edit.team') }}" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Ketua</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="hidden" name="id" value={{$team[0]->id}}>
              <input type="hidden" name="angka" value="2">
                Nama
                <input type="text" name = "name" value= {{$team[0]->coleader_name}}><br>
                Email
                <input type="text" name = "email" value= {{$team[0]->coleader_email}}><br>
                No. HP
                <input type="text" name = "phone" value= {{$team[0]->coleader_phone}}><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input class="btn btn-primary" type="submit" value="Save Changes" name="">
            </div>
        </div>
    </div>
    @csrf
  </form>
</div>

<!-- Edit Data member 1 Modal -->
<div class="modal fade" id="member1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <form action="{{ route('madc.edit.team') }}" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Ketua</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="hidden" name="id" value={{$team[0]->id}}>
              <input type="hidden" name="angka" value="3">
                Nama
                <input type="text" name = "name" value= {{$team[0]->member1_name}}><br>
                Email
                <input type="text" name = "email" value= {{$team[0]->member1_email}}><br>
                No. HP
                <input type="text" name = "phone" value= {{$team[0]->member1_phone}}><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input class="btn btn-primary" type="submit" value="Save Changes" name="">
            </div>
        </div>
    </div>
    @csrf
  </form>
</div>

<!-- Edit Data member 2 Modal -->
<div class="modal fade" id="member2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <form action="{{ route('madc.edit.team') }}" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Ketua</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <input type="hidden" name="id" value={{$team[0]->id}}>
              <input type="hidden" name="angka" value="4">
                Nama
                <input type="text" name = "name" value= {{$team[0]->member2_name}}><br>
                Email
                <input type="text" name = "email" value= {{$team[0]->member2_email}}><br>
                No. HP
                <input type="text" name = "phone" value= {{$team[0]->member2_phone}}><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <input class="btn btn-primary" type="submit" value="Save Changes" name="">
            </div>
        </div>
    </div>
    @csrf
  </form>
</div>


@endsection
