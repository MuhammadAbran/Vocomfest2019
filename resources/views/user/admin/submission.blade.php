@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'Berkas Tim')
@section('breadcrumbs')
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-light"  style="color:#7386D5;margin: 1px 0 0 30px">
         <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Submissions</li>
      </ol>
     </nav>
@endsection
@section('content')
  <div class="box">
    <table class="table table-hover table-bordered table-striped" id="submission-table">
      <thead>
        <tr>
          <th width="5%">No</th>
          <th>Nama Tim</th>
          <th>Kompetisi</th>
          <th>Tema</th>
          <th>Tahap</th>
          <th>file</th>
          <th width="10%">Status</th>
          <th>Aksi</th>
        </tr>
      </thead>
    </table>
  </div>

  <!-- modal -->
  <div class="modal fade" id="deleteTeam" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
          <p>Anda yakin ingin <strong>menghapus</strong> Submisi ini?</p>
          <button id="" type="button" class="btn btn-danger delete_submission" name="button" data-dismiss="modal"> <i class="fa fa-check"></i> Ya</button>
          <button type="button" class="btn btn-secondary" name="button" data-dismiss="modal"> <i class="fa fa-times"></i> Batal</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- /modal -->

@push('scripts')
   <script type="text/javascript">
   //submisi Lolos
   $(document).on('click', '.lolos', function(){
      var id = $(this).attr("id");
      $.ajax({
         headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
         },
         url: "{{ route('lolos.submisi') }}",
         method: "GET",
         data: {id: id},
         success: function(){
            Swal.fire({
               type: 'success',
               title: 'LOLOS!',
               text: 'Sumbisi yang anda pilih berhasil anda loloskan!',
            });
            $('#submission-table').DataTable().ajax.reload();
         }
      });
   });

   //Sumbisi Ndak Lolos
   $(document).on('click', '.ndak-lolos', function(){
      var id = $(this).attr("id");
      $.ajax({
         headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
         },
         url: "{{ route('ndakLolos.submisi') }}",
         method: "GET",
         data: {id: id},
         success: function(){
            Swal.fire({
               type: 'error',
               title: 'Tidak LOLOS!',
               text: 'Sumbisi yang anda pilih berhasil tidak anda loloskan!',
            });
            $('#submission-table').DataTable().ajax.reload();
         }
      });
   });


   //Delete Submission
   $(document).on('click', '.delete-submission', function(){
      var id = $(this).attr("id");
      console.log(id);
      $('.delete_submission').attr("id", id);
   });

   $(document).on('click', '.delete_submission', function(){
      var id = $(this).attr("id");
      $.ajax({
         headers: {
            'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
         },
         url: "{{ route('delete.submission') }}",
         method: "GET",
         data: {id: id},
         success: function(){
            Swal.fire({
               type: 'success',
               title: 'Berhasil Dihapus!',
               text: 'Sumbisi yang anda pilih berhasil anda Hapus!',
            });
            $('#submission-table').DataTable().ajax.reload();
         }
      });
   });

      //GET DATA
      $(function(){
         $('#submission-table').DataTable({
            order: [[ 4, "asc" ]],
            prossessing: true,
            serverSide: true,
            ajax: '{!! route('data.submissions.users') !!}',
            columns: [
               { name: 'id', data: 'DT_RowIndex' },
               {
                  name: 'team_name',
                  data: 'team_name'
               },
               {
                  name: 'kompetisi',
                  data: 'kompetisi'
               },
               {
                 name: 'theme',
                 data: 'theme'
               },
               {
                  name: 'progress',
                  data: 'progress',
                  render: function(data){
                     if (data == 5) {
                        return '<span class="badge badge-primary">Penyisihan 1</span>';
                     }

                     else if (data == 7) {
                        return '<span class="badge badge-success">Penyisihan 2</span>';
                     }
                     if (data == 6) {
                        return '<span class="badge badge-primary">Menuju Penyisihan #2</span>';
                     }

                     else if (data == 8) {
                        return '<span class="badge badge-success">FINAL</span>';
                     }
                  }
               },
               {
                  name: 'submissions_path',
                  data: 'submissions_path'
               },
               {
                  name: 'progress',
                  data: 'progress',
                  render: function(data){
                     if (data == 5) {
                        return '<span class="badge badge-danger">Belum Lolos</span>';
                     }else if (data == 6) {
                        return '<span class="badge badge-success">Lolos Penyisihan #1</span>';
                     }else if (data == 7) {
                        return '<span class="badge badge-danger">Belum Lolos #2</span>';
                     }else if (data == 8) {
                        return '<span class="badge badge-success">Lolos FINAL</span>';
                     }
                  }
               },
               {
                  name: 'action',
                  data: 'action'
               }
            ]
         });
      });
   </script>
@endpush

@endsection
