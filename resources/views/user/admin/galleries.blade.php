@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'MADC Teams | Admin')
@section('breadcrumbs')
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-light"  style="color:#7386D5;margin: 1px 0 0 30px">
         <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Galleries</li>
      </ol>
     </nav>
@endsection
@section('content')
@section('content')

	<div class="box">
      <div class="panel-heading" style="margin-bottom: 20px;">
        <a href="" class="btn btn-primary pull-right modal-show"  data-toggle="modal" data-target="#add-gallary"><i class="fa fa-plus"></i> Add</a>
      </div>
	    <table class="table table-striped" id="galleries-table">
         <thead>
	        <tr>
	          <th scope="col">No</th>
             <th scope="col">Images</th>
             <th scope="col" class="judul">Judul</th>
	          <th scope="col">Status</th>
	          <th scope="col">Tanggal</th>
	          <th scope="col">Aksi</th>
	        </tr>
	      </thead>
	    </table>
	</div>

	  <!-- modal -->
	<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Hapus Data</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form>
	          <p>Anda yakin ingin <strong>menghapus</strong> Gambar Ini?</p>
	          <button id="" type="button" class="btn btn-danger delete_gallary" name="button" data-dismiss="modal"> <i class="fa fa-check"></i> Ya</button>
	          <button type="button" class="btn btn-secondary" name="button" data-dismiss="modal"> <i class="fa fa-times"></i> Batal</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

   <!-- Add Gallaries -->
   <div class="modal fade" id="add-gallary" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Gallary</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data">
             @csrf
             <input type="hidden" name="id" id="gallary-id" value="">
             <input id="title-gallary" type="text" class="form-control" name="title" placeholder="Judul" style="margin-bottom:18px" required>
	          Image : <input id="image-gallary" type="file" class="form-control" name="gallary" style="margin-bottom:20px" required>
	          <button type="submit" class="btn btn-secondary" name="submit" value="draft"> <i class="fa fa-save"></i> Simpan Ke Draft</button>
	          <button type="submit" class="btn btn-primary" name="submit" value="publish"> <i class="fa fa-cloud-upload-alt"></i> Terbitkan</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>


   <!-- Image -->
   <div class="modal fade bd-example-modal-lg" id="images" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <a href="{{ route('homePage') }}" class="modal-title" style="" target="_blank"><h5 style="margin-top:8px" class="modal-title"><span id="titleGallay"></span></h5></a> &nbsp;<a href="{{ route('homePage') }}" class="modal-title" style="font-size:20px; color:#3498db " target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <img src="" alt="" id="img002" width="768px">
	      </div>
	    </div>
	  </div>
	</div>
	<!-- /modal -->

@endsection

@push('scripts')
   <script type="text/javascript" src="{{ asset('assets/vendor/moment/moment.js') }}"></script>
   <script type="text/javascript">
      //Edit Gallary
      $(document).on('click', '.edit-gallary', function(){
         var id = $(this).attr("id");
         $.ajax({
            url: "{{ route('fetch.edit.gallary') }}",
            method: "GET",
            data: {id: id},
            dataType: 'json',
            success: function(data)
            {
               $('#title-gallary').val(data.title);
               $('#image-gallary').val(data.gallaries_path);
               $('#gallary-id').val(id);
               $('.modal-title').html("Edit Gallary");
               $('#galleries-table').DataTable().ajax.reload();
            }
         });
      });

      //delete Gallary
      $(document).on('click', '.delete-gallary', function(){
         var id = $(this).attr("id");
         $('.delete_gallary').attr("id", id);
      });

      $(document).on('click', '.delete_gallary', function(){
         var id = $(this).attr("id");

         $.ajax({
            headers:{
               'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            },
            url: "{{ route('delete.gallary') }}",
            method: "GET",
            data: {id:id},
            success: function(){
                  Swal.fire({
                     type: 'success',
                     title: 'Berhasil dihapus!',
                     text: 'Gallery yang anda pilih telah dihapus',
                  });
               $('#galleries-table').DataTable().ajax.reload();
            }
         });
      });

      //publish and unpublish News
      $(document).on('click', '.publish', function(){
         var id = $(this).attr("id");
         $.ajax({
            headers:{
               'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            },
            url: "{{ route('publish.gallary') }}",
            method: "GET",
            data: {id: id},
            success: function(){
               /* Add success modal*/
               Swal.fire({
                    type: 'success',
                    title: 'Published!',
                    text: 'Gallery yang anda pilih telah di publish!',
                 });
               $('#galleries-table').DataTable().ajax.reload();
            }
         });
      });

      $(document).on('click', '.unpublish', function(){
         var id = $(this).attr("id");
         $.ajax({
            headers:{
               'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            },
            url: "{{ route('unpublish.gallary') }}",
            method: "GET",
            data: {id: id},
            success: function(){
               Swal.fire({
                    type: 'success',
                    title: 'Unpublished!',
                    text: 'Gallery yang anda pilih telah di un-publish!',
                 });
               $('#galleries-table').DataTable().ajax.reload();
            }
         });
      });

      //title Gallary
      $(document).on('click', '#img001', function(){
         var title = $(this).attr("data-title");
         $('#titleGallay').html(title);
      });

      // image Gallary
      $(document).on('click', '#img001', function(){
         var src = $(this).attr("src");
         $('#img002').attr("src", src);
      });


      //GET DATA
      $(function(){
         $('#galleries-table').DataTable({
            order: [[ 4, 'desc' ]],
            responsive: true,
            serverSide: true,
            prossessing: true,
            ajax: "{{ route('galleries.data') }}",
            columns: [
               {
                 name: 'id',
                 data: 'DT_RowIndex'
               },
               {
                  name: 'gallaries_path',
                  data: 'gallaries_path',
                  sortable: false
               },
               {
                  name: 'title',
                  data: 'title'
               },
               {
                  name: 'status',
                  data: 'status',
                  render: function(data){
                        if (data == 1) {
                           return '<span class="badge badge-primary">Published</span>';
                        }

                        return '<span class="badge badge-danger">Not published yet</span>';

                  }
               },
               {
                  name: 'updated_at',
                  data: 'updated_at',
                  render: function(data){
                     return moment(data).format('DD-MM-YYYY');
                  }
               },
               {
                  name: 'action',
                  data: 'action'
               }
            ]
         })
      })
   </script>
@endpush
