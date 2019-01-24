@extends('user.layouts.main')

@extends('user.wdc.menu')
@section('title', 'Payment | MADC')



@section('content')
  <div class="box">
  <!-- Team Member  -->
    @if ($tim->progress == 1)
    <button class="btn btn-warning" style="margin-bottom: 20px;" data-toggle="modal" data-target="#kunciData"> <i class="fas fa-lock"></i> Kunci Data Tim</button>
    @endif
    <div class="row team">
      <!-- Team Member Box -->
      <div class="column">
        <div class="card">
          <img src="{{url('/')}}/assets/img/{{$tim->leader_avatar}}" alt="IU" style="width:100%">
          <div class="container">
            <h2>{{$tim->leader_name}}</h2>
            <p class="title">Ketua Tim</p>
            <p>{{$tim->leader_email}}</p>
            <p>
              <a href="{{url('/')}}/assets/img/{{$tim->leader_avatar}}" data-rel="lightcase">
                <button class="btn btn-custom">Lihat Identitas</button>
              </a>
              @if($tim->progress == 1)
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#leader">
                Edit Data
              </button>
              @endif
            </p>
          </div>
        </div>
      </div> 
      <!-- End Member Box -->

      <!-- Team Member Box -->
      <div class="column">
        <div class="card">
          <img src="{{url('/')}}/assets/img/{{$tim->co_leader_avatar}}" alt="IU" style="width:100%">
          <div class="container">
            <h2>{{$tim->co_leader_name}}</h2>
            <p class="title">Wakil Ketua</p>
            <p>{{$tim->co_leader_email}}</p>
            <p>
              <a href="{{url('/')}}/assets/img/{{$tim->co_leader_avatar}}" data-rel="lightcase">
                <button class="btn btn-custom">Lihat Identitas</button>
              </a>
              @if($tim->progress == 1)
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#co_leader">
                Edit Data
              </button>
              @endif
            </p>
          </div>
        </div>
      </div> 
      <!-- End Member Box -->

      <!-- Team Member Box -->
      <div class="column">
        <div class="card">
          <img src="{{url('/')}}/assets/img/{{$tim->member_avatar}}" alt="IU" style="width:100%">
          <div class="container">
            <h2>{{$tim->member_name}}</h2>
            <p class="title">Anggota</p>
            <p>{{$tim->member_email}}</p>
            <p>
              <a href="{{url('/')}}/assets/img/{{$tim->member_avatar}}" data-rel="lightcase">
                <button class="btn btn-custom">Lihat Identitas</button>
              </a>
              @if($tim->progress == 1)
              <button type="button" class="btn btn-info" data-toggle="modal" data-target="#member1">
                Edit Data
              </button>
              @endif
            </p>
          </div>
        </div>
      </div> 
      <!-- End Member Box -->

    </div>
        <!-- End of Team member -->
  </div>

  <!--Kunci Data Modal -->
  <div class="modal fade" id="kunciData" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Kunci Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah anda yakin ingin mengunci data tim <strong>{{$tim->team_name}}?</strong><br>
        <small>Note <span class="text-danger">*</span> Data yang telah dikunci tidak dapat di edit kembali</small>
      </div>
      <div class="modal-footer">
        <form action="{{route('wdc.payment')}}">
          <input type="hidden" name="id" value="{{$tim->id}}">
          <button type="submit" class="btn btn-warning">Kunci Data</button>
        </form>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Leader Edit Data Modal -->
<div class="modal fade" id="leader" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Ketua</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('wdc.team.edit') }}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="id" value="{{$tim->id}}">
          
      <!-- Biar tau yang diedit data ketua/wakil/anggota -->
          <input type="hidden" name="pos" value=1>
          Nama <br>
          <input type="text" name="name" value="{{$tim->leader_name}}"><br>
          Email<br>
          <input type="email" name="email" value="{{$tim->leader_email}}"><br>
          No.Hp<br>
          +62<input type="text" name="phone" value="{{$tim->leader_phone}}">
          <div class="form-group">
            <label for="identitas">Identitas Diri</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        @csrf
      </form>
    </div>
  </div>
</div>

<!-- Wakil Ketua Edit Data Modal -->
<div class="modal fade" id="co_leader" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Member #1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('wdc.team.edit') }}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="id" value="{{$tim->id}}">
          <input type="hidden" name="pos" value=2>
          Nama <br>
          <input type="text" name="name" value="{{$tim->co_leader_name}}"><br>
          Email<br>
          <input type="email" name="email" value="{{$tim->co_leader_email}}"><br>
          No.Hp<br>
          +62<input type="text" name="phone" value="{{$tim->co_leader_phone}}">
          <div class="form-group">
            <label for="identitas">Identitas Diri</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        @csrf
      </form>
    </div>
  </div>
</div>

<!-- Edit Data member 1 Modal -->
<div class="modal fade" id="member1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Member #2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('wdc.team.edit') }}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="id" value="{{$tim->id}}">
          <input type="hidden" name="pos" value=3>
          Nama <br>
          <input type="text" name="name" value="{{$tim->member_name}}"><br>
          Email<br>
          <input type="email" name="email" value="{{$tim->member_email}}"><br>
          No.Hp<br>
          +62<input type="text" name="phone" value="{{$tim->member_phone}}">
          <div class="form-group">
            <label for="identitas">Identitas Diri</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        @csrf
      </form>
    </div>
  </div>
</div>


@endsection
