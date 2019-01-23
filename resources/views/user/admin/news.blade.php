@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'MADC Teams | Admin')
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
    <div class="panel-heading" style="margin-bottom: 20px; margin-left: 1400px">
      <a href="{{route('admin.addNews')}}" class="btn btn-primary pull-right modal-show"  title="Create User"><i class="fa fa-plus"></i> Create</a>
    </div>
    <div class="panel-body">
          <table id="newsTable" class="table table-hover table-bordered table-striped">
              <thead>
                  <tr>
                      <th width="5%" align="center">No</th>
                      <th width="10%">Thumbnail</th>
                      <th width="25%">Title</th>
                      <th width="10%">Status</th>
                      <th width="15%">Update Date</th>
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
            <p>Anda yakin ingin <strong>menghapus</strong> berita?</p>
            <button type="button" class="btn btn-danger" name="button"> <i class="fa fa-check"></i> Ya</button>
            <button type="button" class="btn btn-secondary" name="button" data-dismiss="modal"> <i class="fa fa-times"></i> Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /modal -->
@endsection

@push('scripts')
    <script>
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
                   sortable: false,
                   render: function(data){
                      return '<img src="{{ url('storage/news') }}/' + data + '" alt="News" width=100px>';
                   }
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
                {data: 'updated_at',name: 'updated_at'},
                {data: 'action',name: 'action'}
            ]
        })

        $('body').on('click','.publish-btn',function(){

        });


    </script>
@endpush
