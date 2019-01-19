@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'MADC Teams | Admin')



@section('content')
  <div class="box">
    <div class="row">
        <div class="col-md-12 pull-right">
           <nav aria-label="breadcrumb">
              <ol class="breadcrumb"  style="background-color:white;color:#7386D5">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">MADC Teams</li>
              </ol>
            </nav>
        </div>
     </div>

    <table class="table table-hover table-bordered table-striped" id="madc-tables">
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
            <p>Anda yakin ingin <strong>menghapus</strong> Tim blabla?</p>
            <button type="button" class="btn btn-danger" name="button"> <i class="fa fa-check"></i> Ya</button>
            <button type="button" class="btn btn-secondary" name="button" data-dismiss="modal"> <i class="fa fa-times"></i> Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /modal -->

  @push('scripts')
      <script>
         $(function() {
            $('#madc-tables').DataTable({
               prossessing: true,
               serverSide: true,
               ajax: '{!! route('data.madc.users') !!}',
               columns: [
                  { data: 'i', name: 'i' },
                  { data: 'team_name', name: 'team_name' },
                  {
                        name: '',
                        data: null,
                        sortable: false,
                        render: function (data) {
                               return "MADC Competition";
                        }
                    },
                 {
                    name: 'progress',
                    data: 'progress',
                    render: function(data){
                       function htmlDecode(input){
                          var e = document.createElement('span');
                          e.innerHTML = input;
                          return e.childNodes[0].nodeValue;
                        }

                       return htmlDecode(data);
                    }
                 },
                  {
                     data: 'action',
                     name: 'action',
                     sortable: false
                  },
               ]
            });

         });
      </script>
  @endpush
@endsection
