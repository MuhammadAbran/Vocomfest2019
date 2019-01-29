@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'WDC Teams | Admin')
@section('breadcrumbs')
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-light"  style="color:#7386D5;margin: 1px 0 0 30px">
         <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">WDC Teams</li>
      </ol>
     </nav>
@endsection
@section('content')
  <div class="box">
    <table class="table table-hover table-bordered table-striped" id="wdc-tables">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Tim</th>
          <th>Kategori</th>
          <th>Status</th>
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
            <p>Anda yakin ingin <strong>menghapus</strong> Tim <span id="teamName"></span>?</p>
            <button id="" type="button" class="btn btn-danger delete_team" name="button" data-dismiss="modal"> <i class="fa fa-check"></i> Ya</button>
            <button type="button" class="btn btn-secondary" name="button" data-dismiss="modal"> <i class="fa fa-times"></i> Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /modal -->

  @push('scripts')
      <script type="text/javascript">
      //delete Team
      $(document).on('click', '.deleteTeam', function(){
         var id = $(this).attr("id");
         var name = $(this).attr("name");
         // console.log(name);
         $('.delete_team').attr("id", id);
         $("#teamName").html(name);
      });

      $(document).on('click', '.delete_team', function(){
         var id = $(this).attr("id");
         $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
            url: "{{ route('delete.wdc.users')  }}",
            method: "GET",
            data: {id:id},
            success: function(data){
               $('#wdc-tables').DataTable().ajax.reload();
            }
         });
      });


      //GET DATA
         $(function(){
            $('#wdc-tables').DataTable({
               columnDefs: [{
                   defaultContent: "-",
                   targets: "_all"
                }],
               responsive: true,
               prossessing: true,
               serverSide: true,
               ajax: '{!! route('data.wdc.users') !!}',
               columns: [
                  { name: 'id', data: 'DT_RowIndex' },
                  { name: 'team_name', data: 'team_name' },
                  {
                     name: '',
                     data: null,
                     sortable: false,
                     render: function(){
                        return "WDC Competition";
                     }
                  },
                  {
                    name: 'progress',
                    data: 'progress'
                 },
                  {
                     name: 'action',
                     data: 'action',
                     sortable: false
                  },
               ]
            });
         });
      </script>
  @endpush

@endsection
