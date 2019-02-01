@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'News | Admin')
@section('breadcrumbs')
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-light"  style="color:#7386D5;margin: 1px 0 0 30px">
         <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">News</li>
      </ol>
     </nav>
@endsection


@section('content')

<div class="box">

  <div class="panel panel-primary">
    <div class="panel-heading" style="margin-bottom: 20px;">
      <a href="{{route('admin.addNews')}}" class="btn btn-primary pull-right modal-show"  title="Create"><i class="fa fa-plus"></i> Create</a>
    </div>
    <div class="panel-body">
          <table id="newsTable" class="table table-hover table-bordered table-striped">
              <thead>
                  <tr>
                      <th width="5%" align="center">No</th>
                      <th width="10%">Thumbnail</th>
                      <th width="25%">Title</th>
                      <th width="10%">Status</th>
                      <th width="8%">Update Date</th>
                      <th width="10%">Action</th>
                  </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
      </div>
  </div>
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
            <p>Anda yakin ingin <strong>menghapus</strong> berita ini?</p>
            <button id="" type="button" class="btn btn-danger delete_news" name="button" data-dismiss="modal"> <i class="fa fa-check"></i> Ya</button>
            <button type="button" class="btn btn-secondary" name="button" data-dismiss="modal"> <i class="fa fa-times"></i> Batal</button>
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
         <a href="{{ route('homePage') }}" class="modal-title" style="" target="_blank"><h5 style="margin-top:8px" class="modal-title"><span id="titleNews"></span></h5></a> &nbsp;<a href="{{ route('homePage') }}" class="modal-title" style="font-size:20px; color:#3498db " target="_blank"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="modal-body">
         <img src="" alt="" id="img002" width="768px">
       </div>
       <div class="modal-footer">
        <span id="contentNews"></span>
      </div>
     </div>
   </div>
 </div>
  <!-- /modal -->
@endsection

@push('scripts')
   <script type="text/javascript" src="{{ asset('assets/vendor/moment/moment.js') }}"></script>
    <script>
      //Delete News
      $(document).on('click', '.delete-news', function(){
          var id = $(this).attr("id");
          $('.delete_news').attr("id", id);
      });

      $(document).on('click', '.delete_news', function(){
            var id = $(this).attr("id");
            $.ajax({
               headers:{
                  'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
               },
               url: "{{ route('delete.news') }}",
               method: "GET",
               data: {id: id},
               success: function(){

                  /* Add success modal*/
                  Swal.fire({
                     type: 'success',
                     title: 'Berhasil dihapus!',
                     text: 'Berita yang anda pilih telah dihapus',
                  });
                  $('#newsTable').DataTable().ajax.reload();
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
            url: "{{ route('publish.news') }}",
            method: "GET",
            data: {id: id},
            success: function(){

                /* Add success modal*/
                Swal.fire({
                     type: 'success',
                     title: 'Published!',
                     text: 'Berita yang anda pilih telah di publish',
                  });
               $('#newsTable').DataTable().ajax.reload();
            }
         });
      });

      $(document).on('click', '.unpublish', function(){
         var id = $(this).attr("id");
         $.ajax({
            headers:{
               'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            },
            url: "{{ route('unpublish.news') }}",
            method: "GET",
            data: {id: id},
            success: function(){

                /* Add success modal*/
                Swal.fire({
                     type: 'success',
                     title: 'Unpublished!',
                     text: 'Berita yang anda pilih telah di unpublish',
                  });

               $('#newsTable').DataTable().ajax.reload();
            }
         });
      });

      //title news
      $(document).on('click', '#img0011', function(){
         var title = $(this).attr("data-title");
         $('#titleNews').html(title);
      });

      //content news
      $(document).on('click', '#img0011', function(){
         var title = $(this).attr("data-content");
         $('#contentNews').html(title);
      });

      // image News
      $(document).on('click', '#img0011', function(){
         var src = $(this).attr("src");
         $('#img002').attr("src", src);
      });


      //GET DATA
        $('#newsTable').DataTable({
            order: [[ 4, "desc" ]],
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.newsData') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {
                   data: 'thumbnail',
                   name: 'thumbnail',
                   sortable: false
                },
                {data: 'title', name: 'title'},
                {
                   data: 'is_published',
                   name: 'is_published',
                   render: function(data){
                      if (data == 1) {
                         return '<span class="badge badge-primary">Published</span>';
                      }

                      return '<span class="badge badge-danger">Not published yet</span>'
                   }
                },
                {
                   data: 'updated_at',
                   name: 'updated_at',
                   render: function(data){
                      return moment(data).format('DD-MM-YYYY');
                   }
                },
                {data: 'action',name: 'action'}
            ]
        })


    </script>
@endpush
