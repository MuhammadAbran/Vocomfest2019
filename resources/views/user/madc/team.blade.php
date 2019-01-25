@extends('user.layouts.main')

@extends('user.madc.menu')
@section('title', 'Team | MADC')



@section('content')
  <div class="box">
  <!-- Team Member  -->

  <!-- Tombol Kunci Data akan dsiabled kalau progress sudah 2 (Sudah kunci data) -->
    <button {{$tim->progress <=1?'' : 'disabled'}} class="btn btn-warning" style="margin-bottom: 20px;" data-toggle="modal" data-target="#kunciData"> <i class="fas fa-lock"></i> Kunci Data Tim</button>
  <!-- Tombol Kunci Data akan dsiabled kalau progress sudah 2 (Sudah kunci data) -->

    <div class="row team">
      <!-- Team Member Box -->

      {{-- pakai component member_box($title, $avatar,$name,$email,$button) --}}
      @component('components.member_box')
        @slot('title', 'Ketua Tim')
        @slot('avatar',$tim->leader_avatar)
        @slot('name',$tim->leader_name)
        @slot('email', $tim->leader_email)
        @slot('button')
          <button {{$tim->progress <=1?'' : 'disabled'}} type="button" class="btn btn-info" data-toggle="modal" data-target="#leader">Edit Data</button>
        @endslot
      @endcomponent

      @component('components.member_box')
        @slot('title', 'Anggota #1')
        @slot('avatar',$tim->co_leader_avatar)
        @slot('name',$tim->co_leader_name)
        @slot('email', $tim->co_leader_email)
        @slot('button')
        <button {{$tim->progress <=1?'' : 'disabled'}} type="button" class="btn btn-info" data-toggle="modal" data-target="#co_leader">Edit Data</button>
        @endslot
      @endcomponent

      @component('components.member_box')
        @slot('title', 'Anggota #2')
        @slot('avatar',$tim->member_1_avatar)
        @slot('name',$tim->member_1_name)
        @slot('email', $tim->member_1_email)
        @slot('button')
        <button {{$tim->progress <=1?'' : 'disabled'}} type="button" class="btn btn-info" data-toggle="modal" data-target="#member1">Edit Data</button>
        @endslot
      @endcomponent
      
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
        <form action="{{route('madc.updateProgress')}}" method="POST">
          @csrf
          <input type="hidden" name="progress" value="2">
          <input type="hidden" name="_method" value="PUT">
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
      <form action="{{ route('madc.team.edit') }}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="id" value="{{$tim->id}}">
          
      <!-- Biar tau yang diedit data ketua/wakil/anggota -->
          <input type="hidden" name="pos" value=1>
          Nama <br>
          <input type="text" name="name" value="{{$tim->leader_name}}"><br>
          Email<br>
          <input type="email" name="email" value="{{$tim->leader_email}}" disabled><br>
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
      <form action="{{ route('madc.team.edit') }}" method="post" enctype="multipart/form-data">
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
      <form action="{{ route('madc.team.edit') }}" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <input type="hidden" name="id" value="{{$tim->id}}">
          <input type="hidden" name="pos" value=3>
          Nama <br>
          <input type="text" name="name" value="{{$tim->member_1_name}}"><br>
          Email<br>
          <input type="email" name="email" value="{{$tim->member_1_email}}"><br>
          No.Hp<br>
          +62<input type="text" name="phone" value="{{$tim->member_1_phone}}">
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
