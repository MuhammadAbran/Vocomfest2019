@extends('user.layouts.main')

@extends('user.madc.menu')
@section('title', 'Team | MADC')



@section('content')
  <div class="box">
  <!-- Team Member  -->
    <button class="btn btn-warning" style="margin-bottom: 20px;" data-toggle="modal" data-target="#kunciData"> <i class="fas fa-lock"></i> Kunci Data Tim</button>
    <div class="row team">
      <!-- Team Member Box -->
      <div class="column">
        <div class="card">
          <img src="{!! asset('assets/img/iu.jpg') !!}" alt="IU" style="width:100%">
          <div class="container">
            <h2>Jane Doe</h2>
            <p class="title">Ketua Tim</p>
            <p>example@example.com</p>
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
            <h2>Jane Doe</h2>
            <p class="title">Ketua Tim</p>
            <p>example@example.com</p>
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
            <h2>Jane Doe</h2>
            <p class="title">Ketua Tim</p>
            <p>example@example.com</p>
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
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Ketua</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Member 1 Edit Data Modal -->
<div class="modal fade" id="member1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Member #1</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Data member 2Modal -->
<div class="modal fade" id="member2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Edit Data Member #2</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


@endsection
