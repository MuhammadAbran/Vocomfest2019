@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'MADC Teams | Admin')



@section('content')
  <div class="box">
    <section class="row py-2">
      <div class="col-md-6 px-0 text-left">
        <label>
          <select class="form-control input-sm">
            <option value="5">5</option>
            <option value="10">10</option>
            <option value="15">15</option>
            <option value="20">20</option>
          </select>
        </label>
        <span class="small">rekaman per halaman</span>
      </div>

      <div class="col-md-6 px-0 text-right">
        <form class="form-inline">
          <div class="form-group mx-sm-2">
            <label for="search" class="sr-only">Pencarian</label>
            <input type="text" class="form-control" id="" placeholder="Pencarian">
          </div>
          <button type="submit" class="btn btn-primary">Cari</button>
        </form>
      </div>
      <a href="{{route('admin.addNews')}}"><button class="btn btn-info mtb10"><i class="fa fa-edit"></i> Tambah Artikel</button></a>
      <table class="table table-striped">
        <caption  class="smaller">Menampilkan 1 hingga 4 dari total 4 data</caption>
        <thead>
          <tr>
            <th scope="col"> </th>
            <th scope="col" class="judul">Judul</th>
            <th scope="col">Pembuat</th>
            <th scope="col">Kategori</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><input type="checkbox" name="" value="1"></th>
            <td>Lorem ipsum dolor sit amet. <span>(draft)</span></td>
            <td>admin</td>
            <td>tt</td>
            <td>18/01/2017</td>
            <td class="py-1">
              <a href="{{route('admin.editNews')}}" class="btn-primary btn-sm"><i class="fa fa-edit"></i></a>
              <a href="" data-toggle="modal" data-target="#delete-modal" class="btn-danger btn-sm"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
        
        </tbody>
      </table>
      
      <div class="">
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
      </div>          
    </section>
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
