@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'Dashboard | Admin')

@section('breadcrumbs')
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-light"  style="color:#7386D5;margin: 1px 0 0 30px">
         <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
         <li class="breadcrumb-item active" aria-current="page">Payments</li>
      </ol>
     </nav>
@endsection
@section('content')
  <div class="box">
    <table class="table table-hover table-bordered table-striped" id='payment-tables'>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Tim</th>
          <th>Kompetisi</th>
          <th>Bukti Pembayaran</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
    </table>

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
              <p>Anda yakin ingin <strong>menghapus</strong> Pembayaran ini?</p>
              <button id="deletePayment" type="button" class="btn btn-danger delete_payment" name="button" data-dismiss="modal"> <i class="fa fa-check"></i> Ya</button>
              <button type="button" class="btn btn-secondary" name="button" data-dismiss="modal"> <i class="fa fa-times"></i> Batal</button>

          </div>
        </div>
      </div>
    </div>

    <!-- Image -->
   <div class="modal fade bd-example-modal-lg" id="images" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-lg" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5>Bukti Pembayaran</h5>
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
  </div>

  @push('scripts')
      <script type="text/javascript" src="{{ asset('assets/vendor/moment/moment.js') }}"></script>
      <script type="text/javascript">
      //Confirmed Payment
      $(document).on('click', '.confirmed', function(){
         var id = $(this).attr("id");
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            },
            url: "{{ route('confirmed.payments') }}",
            method: "GET",
            data: {id: id},
            success: function(){
               $('#payment-tables').DataTable().ajax.reload();
            }
         });
      });

      //Unconfirmed Payment
      $(document).on('click', '.unconfirmed', function(){
         var id = $(this).attr("id");
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            },
            url: "{{ route('unconfirmed.payments') }}",
            method: "GET",
            data: {id: id},
            success: function(){
               $('#payment-tables').DataTable().ajax.reload();
            }
         });
      });


      //Delete Payments
      $(document).on('click', '.delete-payment-data', function(){
         var id = $(this).attr("id");
         $('#deletePayment').attr("id", id);
      });

      $(document).on('click', '.delete_payment', function(){
         var id = $(this).attr("id");
         $.ajax({
            headers: {
               'X-CSRF-TOKEN': $('meta[name=csrf-token]').attr('content')
            },
            url: "{{ route('delete.payments') }}",
            method: "GET",
            data: {id: id},
            success: function(){
               $('#payment-tables').DataTable().ajax.reload();
            }
         });
      });

      // image Gallary
      $(document).on('click', '#img001', function(){
         var src = $(this).attr("src");
         $('#img002').attr("src", src);
      });

      //GET DATA
         $(function(){
            $('#payment-tables').DataTable({
               order: [[ 4, "desc" ]],
               prossessing: true,
               serverside: true,
               ajax: '{!! route('data.payments.users') !!}',
               columns: [
                  { name: 'id', data: 'DT_RowIndex' },
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
                        return '<img id="img001" src="{{ url('storage/payments') }}/'+data+'" alt="payment" width=200px  data-toggle="modal" data-target="#images" style="cursor:pointer; border-radius: 8px">';
                     }
                  },
                  {
                     name: 'updated_at',
                     data: 'updated_at',
                     render: function(data){
                        return moment(data).format("DD-MM-YYYY");
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
