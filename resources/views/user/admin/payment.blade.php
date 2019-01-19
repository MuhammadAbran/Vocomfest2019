@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'Dashboard | Admin')

@section('content')
  <div class="box">
    <div class="row">
      <div class="col-md-12 pull-right">
          <nav aria-label="breadcrumb">
             <ol class="breadcrumb"  style="background-color:white;color:#7386D5">
               <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
               <li class="breadcrumb-item active" aria-current="page">Payments</li>
             </ol>
           </nav>
      </div>
     </div>
    <table class="table table-hover table-bordered table-striped" id='payment-tables'>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Tim</th>
          <th>Kompetisi</th>
          <th>Bukti Pembayaran</th>
          <th>Aksi</th>
        </tr>
      </thead>
    </table>

    <!-- pagination -->
    <!-- <div class="">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
          <li class="disabled page-item">
            <a class="page-link" href="#" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
              <span class="sr-only">Previous</span>
            </a>
          </li>
          <li class="active page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
              <span class="sr-only">Next</span>
            </a>
          </li>
        </ul>
      </nav>
    </div> -->
    <!-- End of pagination -->
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
  </div>

  @push('scripts')
      <script type="text/javascript">
         $(function(){
            $('#payment-tables').DataTable({
               prossessing: true,
               serverside: true,
               ajax: '{!! route('data.payments.users') !!}',
               columns: [
                  { name: 'i', data: 'i' },
                  {
                     name: 'team_name',
                     data: 'team_name'
                  },
                  {
                     name: 'kompetisi',
                     data: 'kompetisi',
                  },
                  {
                     name: 'payment_path',
                     data: 'payment_path',
                     sortable: false,
                     render: function(data){
                        return '<img src="{{ url('storage/payments') }}/'+data+'" alt="payment" width=200px>';
                     }
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
