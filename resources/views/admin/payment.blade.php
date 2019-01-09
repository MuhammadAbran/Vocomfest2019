<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mobile apps development serta ICPC untuk mahasiswa, dan ditutup dengan sebuah seminar nasional.">
  <meta name="keywords" content="vocomfest, ugm, himakomsi, computer, festival, lomba">
  <meta name="author" content="Vocomfest Technical Support Team">
  <meta name="robots" content="index,follow">

  <title>Admin Dashboard | Payment</title>

  <link rel="shortcut icon" type="x-icon" href="../assets/img/icon.png">

  <!-- CSS HERE -->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/vendor/lightcase/lightcase.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vocom-main-style.css">

</head>
<body>
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
            <p>Anda yakin ingin <strong>menghapus</strong> data?</p>
            <button type="button" class="btn btn-danger" name="button"> <i class="fa fa-check"></i> Ya</button>
            <button type="button" class="btn btn-secondary" name="button" data-dismiss="modal"> <i class="fa fa-times"></i> Batal</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /modal -->

<div id="dashboard">
    <!--Header-->
    <div id="header">
      <nav class="navbar navbar-expand-lg px-4 navbar-dark">
        <a class="navbar-brand" href="./dashboard.html">
          <img src="../assets/img/icon.png" alt="">
          <span>admin panel</span>
        </a>
        <div>
             <a href="#" class="btn btn-ye-full"><i class="fa fa-sign-out"></i> Sign Out</a>
        </div>
      </nav>

    </div>

  <div class="container-fluid text-center margin-zero">
    <div class="row content">

      <!--mulai sidenav bar-->
      <div class="col-lg-2 col-md-3 col-sm-12 sidenav">
        <div class="col-sm-12 profil-title pd-t-20">
          <h2 class="mg-bt-20"><i class="fa fa-user-circle wh fa-2x"></i></h2>
          <h6>Hello</h6>
          <h5 class="wh">Admin</h5>
        </div>

        <ul id="nav" class="text-left">
          <li>
            <a href="./dashboard.html" class="col-sm-12">
              <i class="fa fa-desktop"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="./teams.html" class="col-sm-12">
              <i class="fa fa-users"></i>
              <span>Teams</span>
            </a>
          </li>
          <li>
            <a href="./gallery.html" class="col-sm-12">
              <i class="fa fa-camera"></i>
              <span>Gallery</span>
            </a>
          </li>
          <li>
            <a href="./news.html" class="col-sm-12">
              <i class="fa fa-hourglass-half"></i>
              <span>News</span>
            </a>
          </li>
          <li>
            <a href="./payment.html" class="active col-sm-12">
              <i class="fa fa-credit-card-alt"></i>
              <span>Payment</span>
            </a>
          </li>
          <li>
            <a href="./upload.html" class="col-sm-12">
              <i class="fa fa-upload"></i>
              <span>Upload</span>
            </a>
          </li>
        </ul>
      </div>
      <!--akhir sidenav bar-->

      <!--mulai content section-->
      <div class="col-lg-10 col-md-9 col-sm-12 box-db">
        <div class="container-fluid px-3">
          <div class="row">
            <div class="col-md-12">
              <section class="bigbox pd-20">
                  <h4 class="text-left title-event-db">Pembayaran</h4>
                  <!-- table -->
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
                        <div class="form-group mx-sm-2 mb-2">
                          <label for="search" class="sr-only">Pencarian</label>
                          <input type="text" class="form-control" id="" placeholder="Pencarian">
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Cari</button>
                      </form>
                    </div>
                    <table class="table table-striped">
                      <caption class="smaller">Menampilkan 1 hingga 4 dari total 4 data</caption>
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Nama Tim</th>
                          <th scope="col">Kompetisi</th>
                          <th scope="col">Bukti Bayar</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>
                            <figure class="w-200">
                              <img src="../assets/img/bg-img.png" alt="" style="background-image: url('../assets/img/wallpaper2.jpg')">
                            </figure>
                          </td>
                          <td class="py-1">
                            <a href="#" class="btn-sm btn-success"><i class="fa fa-check"></i></a>
                            <a href="../assets/img/wallpaper2.jpg" data-rel="lightcase" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="" data-toggle="modal" data-target="#delete-modal" class="btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>
                            <figure class="w-200">
                              <img src="../assets/img/bg-img.png" alt="" style="background-image: url('../assets/img/wallpaper2.jpg')">
                            </figure>
                          </td>
                          <td class="py-1">
                            <a href="#" class="btn-sm btn-success"><i class="fa fa-check"></i></a>
                            <a href="../assets/img/wallpaper2.jpg" data-rel="lightcase" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="" data-toggle="modal" data-target="#delete-modal" class="btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Larry</td>
                          <td>the Bird</td>
                          <td>
                            <figure class="w-200">
                              <img src="../assets/img/bg-img.png" alt="" style="background-image: url('../assets/img/wallpaper2.jpg')">
                            </figure>
                          </td>
                          <td class="py-1">
                            <a href="#" class="btn-sm btn-success"><i class="fa fa-check"></i></a>
                            <a href="../assets/img/wallpaper2.jpg" data-rel="lightcase" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
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
                  <!-- /table -->
              </section>
            </div>
          </div>

        </div>
      </div>
      <!--akhir content section-->

    </div>
  </div>
</div>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/popper.js"></script>
<script type="text/javascript" src="../assets/vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/vendor/chartjs/chart.js"></script>
<script type="text/javascript" src="../assets/vendor/lightcase/lightcase.js"></script>
<!-- <script type="text/javascript" src="../assets/vendor/nicescroll/jquery.nicescroll.min.js"></script> -->
<script type="text/javascript" src="../assets/js/main-for-dashboard.js"></script>
</body>
</html>
