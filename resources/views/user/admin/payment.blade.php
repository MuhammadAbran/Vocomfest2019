@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'Dashboard | Admin')
@push('styles')
<style>
      #myImg22022 {
        border-radius: 5px;
        cursor: pointer;
        transition: 0.3s;
      }

      #myImg22022:hover {opacity: 0.7;}

      /* The Modal (background) */
      .modalIMG {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
      }

      /* Modal Content (image) */
      .modal-contentIMG {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
      }

      /* Caption of Modal Image */
      #caption {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
        text-align: center;
        color: #ccc;
        padding: 10px 0;
        height: 150px;
      }

      /* Add Animation */
      .modal-contentIMG, #caption {
        -webkit-animation-name: zoom;
        -webkit-animation-duration: 0.6s;
        animation-name: zoom;
        animation-duration: 0.6s;
      }

      @-webkit-keyframes zoom {
        from {-webkit-transform:scale(0)}
        to {-webkit-transform:scale(1)}
      }

      @keyframes zoom {
        from {transform:scale(0)}
        to {transform:scale(1)}
      }

      /* The Close Button */
      .closeIMG {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
      }

      .closeIMG:hover,
      .closeIMG:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
      }

      /* 100% Image Width on Smaller Screens */
      @media only screen and (max-width: 700px){
        .modal-contentIMG {
          width: 100%;
        }
      }
</style>
@endpush
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
              <p>Anda yakin ingin <strong>menghapus</strong> berita ini?</p>
              <button id="deletePayment" type="button" class="btn btn-danger delete_payment" name="button" data-dismiss="modal"> <i class="fa fa-check"></i> Ya</button>
              <button type="button" class="btn btn-secondary" name="button" data-dismiss="modal"> <i class="fa fa-times"></i> Batal</button>

          </div>
        </div>
      </div>
    </div>

    <!-- Image Modal -->

      <div id="myModalIMG" class="modalIMG">
         <span class="closeIMG">&times;</span>
         <img class="modal-contentIMG" id="img01">
         <div id="caption"></div>
      </div>

  <!-- /modal -->
  </div>

  @push('scripts')
      <script type="text/javascript">
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

      //GET DATA
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
                        return '<img id="myImg22022" src="{{ url('storage/payments') }}/'+data+'" alt="payment" width=200px>';
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

         // Get the modal
         var modal = document.getElementById('myModalIMG');

         // Get the image and insert it inside the modal - use its "alt" text as a caption
         var img = document.getElementById('myImg22022');
         var modalImg = document.getElementById("img01");
         var captionText = document.getElementById("caption");
         img.onclick = function(){
           modal.style.display = "block";
           modalImg.src = this.src;
           captionText.innerHTML = this.alt;
         }

         // Get the <span> element that closes the modal
         var span = document.getElementsByClassName("closeIMG")[0];

         // When the user clicks on <span> (x), close the modal
         span.onclick = function() {
           modal.style.display = "none";
         }
      </script>
  @endpush

@endsection
