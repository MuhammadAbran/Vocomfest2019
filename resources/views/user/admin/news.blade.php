@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'MADC Teams | Admin')



@section('content')

<div class="box">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">User Table
      <a href="{{route('admin.addNews')}}" class="btn btn-info pull-right modal-show"  title="Create User"><i class="icon-plus"></i> Create</a>
      </h3>
    </div>
    <div class="panel-body">
          <table id="newsTable" class="table table-hover" style="width:100%">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Status</th>
                      <th>Update Date</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              </tbody>
              <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Update Date</th>
                    <th>Action</th>
                  </tr>
              </tfoot>
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
          "order": [[ 3, "desc" ]],
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('admin.newsData') }}",
            columns: [
                {data: 'DT_RowIndex', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'is_published',name: 'is_published'},
                {data: 'updated_at',name: 'updated_at'},
                {data: 'action',name: 'action'}
            ]
        })

        $('body').on('click','.publish-btn',function(){
            
        });


    </script>
@endpush 