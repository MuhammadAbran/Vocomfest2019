@extends('user.layouts.main')

@extends('user.madc.menu')
@section('title', 'Team Member')



@section('content')
  <div class="box">
  <!-- Team Member  -->

    @if($tim->progress == 0)
    <strong>Harap verifikasi email terlebih dahulu</strong><br>
    @endif
    <!-- Tombol Kunci Data akan dsiabled kalau progress sudah 2 (Sudah kunci data) -->
    <button {{$tim->progress ==1? '' : 'disabled'}} class="btn btn-warning" style="margin-bottom: 20px;" data-toggle="modal" data-target="#kunciData"> <i class="fas fa-lock"></i> Kunci Data Tim</button>
    <!-- Tombol Kunci Data akan dsiabled kalau progress sudah 2 (Sudah kunci data) -->

    @if($tim->co_leader_name == null)
    <button type="button" class="btn btn-info" data-toggle="modal" data-target="#co_leader" style="margin-bottom: 20px;">Tambah Anggota</button>

    @else
      @if($tim->member_name == null)
        <button style="margin-bottom: 20px;" type="button" class="btn btn-info" data-toggle="modal" data-target="#member1">Tambah Anggota</button>
      @endif
    @endif

    @if($errors->has('photo'))
      <br><strong>{{ $errors->first('photo') }}</strong>
    @endif

    <div class="row team">
      <!-- Team Member Box -->

      {{-- pakai component member_box($title, $avatar,$name,$email,$button) --}}
      @component('components.member_box')
        @slot('title', 'Ketua Tim')
        @slot('avatar',$tim->leader_avatar)
        @slot('name',$tim->leader_name)
        @slot('telp',$tim->leader_phone)
        @slot('email', $tim->email)
        @slot('button')
          <button {{$tim->progress <=1?'' : 'disabled'}} type="button" class="btn btn-info" data-toggle="modal" data-target="#leader">Edit Data</button>
        @endslot
      @endcomponent

      @if($tim->co_leader_name != null)
      @component('components.member_box')
        @slot('title', 'Anggota #1')
        @slot('avatar',$tim->co_leader_avatar)
        @slot('name',$tim->co_leader_name)
        @slot('telp',$tim->co_leader_phone)
        @slot('email', $tim->co_leader_email)
        @slot('button')
        <button {{$tim->progress <=1?'' : 'disabled'}} type="button" class="btn btn-info" data-toggle="modal" data-target="#co_leader">Edit Data</button>
        @endslot
      @endcomponent
      @endif

      @if($tim->member_name != null)
      @component('components.member_box')
        @slot('title', 'Anggota #2')
        @slot('avatar',$tim->member_avatar)
        @slot('name',$tim->member_name)
        @slot('telp',$tim->member_phone)
        @slot('email', $tim->member_email)
        @slot('button')
        <button {{$tim->progress <=1?'' : 'disabled'}} type="button" class="btn btn-info" data-toggle="modal" data-target="#member1">Edit Data</button>
        @endslot
      @endcomponent
      @endif

    </div>
        <!-- End of Team member -->

        <p>
          <ul><span style="margin-left:-20px;">Note<span class="text-danger">*</span></span>
            <li>Kartu Pelajar Wajib di upload!</li>
            <li>Dimohon untuk mengisi data dengan benar!</li>
          </ul>
        </p>
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
        @if($tim->leader_avatar == 'avatar.png')
            <strong>Kartu Pelajar</strong> wajib di upload
          @else
            Apakah anda yakin ingin mengunci data tim <strong>{{$tim->team_name}}?</strong><br>
            <small>Note <span class="text-danger">*</span> Data yang telah dikunci tidak dapat di edit kembali</small>
          @endif
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
          <div class="form-group">
            <label for="name">Nama</label>
            <input class="form-control" type="text" name="name" value="{{$tim->leader_name}}">
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email"  value="{{$tim->email}}" disabled>
            <input class="form-control" type="hidden" name="email" value="{{$tim->email}}">
          </div>

          <div class="form-group">
            <label for="phone">No. Hp</label>
            <input class="form-control" type="number" name="phone" value="{{$tim->leader_phone}}">
          </div>

          <div class="form-group">
            <label for="identitas">Kartu Tanda Mahasiswa</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Simpan</button>
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

          <div class="form-group">
            <label for="name">Nama</label>
            <input class="form-control" type="text" name="name" value="{{$tim->co_leader_name}}" required>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" value="{{$tim->co_leader_email}}" required>
          </div>

          <div class="form-group">
            <label for="phone">No. Hp</label>
            <input class="form-control" type="number" name="phone" value="{{$tim->co_leader_phone}}" required>
          </div>

          <div class="form-group">
            <label for="identitas">Kartu Tanda Mahasiswa</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Simpan</button>
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

          <div class="form-group">
            <label for="name">Nama</label>
            <input class="form-control" type="text" name="name" value="{{$tim->member_name}}" required>
          </div>

          <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="email" name="email" value="{{$tim->member_email}}" required>
          </div>

          <div>
            <label for="phone">No. Hp</label>
            <input class="form-control" type="number" name="phone" value="{{$tim->member_phone}}" required>
          </div>

          <div class="form-group">
            <label for="identitas">Kartu Tanda Mahasiswa</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success">Simpan</button>
        </div>
        @csrf
      </form>
    </div>
  </div>
</div>


@endsection
