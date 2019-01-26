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
      <div class="panel-heading" style="margin-bottom: 20px; margin-left: 1400px">
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
	          <button id="deleteGallary" type="button" class="btn btn-danger delete_gallary" name="button" data-dismiss="modal"> <i class="fa fa-check"></i> Ya</button>
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
	        <form>
             <input type="text" class="form-control" name="title" placeholder="Judul" style="margin-bottom:18px">
	          Image : <input type="file" class="form-control" name="gallaries_path" style="margin-bottom:20px">
	          <button type="submit" class="btn btn-secondary" name="button" data-dismiss="modal"> <i class="fa fa-save"></i> Simpan Ke Draft</button>
	          <button type="submit" class="btn btn-primary" name="button" data-dismiss="modal"> <i class="fa fa-cloud-upload-alt"></i> Publish</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- /modal -->

@endsection

@push('scripts')
   <script type="text/javascript" src="{{ asset('assets/vendor/moment/moment.js') }}"></script>
   <script type="text/javascript">
      //delete Gallary
      $(document).on('click', '.delete-gallary', function(){
         var id = $(this).attr("id");
         $('#deleteGallary').attr("id", id);
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
               $('#galleries-table').DataTable().ajax.reload();
            }
         });
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
                  render: function(data){
                     return '<img src="{{ url('storage/gallaries') }}/' + data + '" alt="Gallaies" width=160px>'
                  }
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
