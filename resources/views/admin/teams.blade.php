<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mobile apps development serta ICPC untuk mahasiswa, dan ditutup dengan sebuah seminar nasional.">
  <meta name="keywords" content="vocomfest, ugm, himakomsi, computer, festival, lomba">
  <meta name="author" content="Vocomfest Technical Support Team">
  <meta name="robots" content="index,follow">

  <title>Admin Dashboard</title>

  <link rel="shortcut icon" type="x-icon" href="../assets/img/icon.png">

  <!-- CSS HERE -->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/vendor/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="../assets/vendor/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vocom-main-style.css">

</head>
<body>

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

  <div class="container-fluid margin-zero">
    <div class="row content">

      <!--mulai sidenav bar-->
      <div class="col-lg-2 col-md-3 col-sm-12 sidenav">
        <div class="col-sm-12 profil-title pd-t-20 text-center">
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
            <a href="./teams.html" class="active col-sm-12">
              <i class="fa fa-users"></i>
              <span>Teams</span>
            </a>
          </li>
          <li>
            <a href="./news.html" class="col-sm-12">
              <i class="fa fa-hourglass-half"></i>
              <span>News</span>
            </a>
          </li>
          <li>
            <a href="./gallery.html" class="col-sm-12">
              <i class="fa fa-camera"></i>
              <span>Gallery</span>
            </a>
          </li>
          <li>
            <a href="./payment.html" class="col-sm-12">
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
                  <h4 class="text-left title-event-db">Daftar Tim</h4>
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
                    <table class="table table-hover table-bordered table-striped">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama Tim</th>
                          <th>Kategori</th>
                          <th>Status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td><a href="./view-team.html" class="blue">Lorem Ipsum Dolorsit Amet</a></td>
                          <td>Web Design Competition</td>
                          <td><span class="badge badge-primary">Registered</span></td>
                          <td>
                            <a href="#" class="btn-success btn-sm"><i class="fa fa-check"></i></a>
                            <a href="./view-team.html" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td><a href="./view-team.html" class="blue">Lorem Ipsum Dolorsit Amet</a></td>
                          <td>Web Design Competition</td>
                          <td><span class="badge badge-danger">Confirm</span></td>
                          <td>
                            <a href="#" class="btn-sm btn-success"><i class="fa fa-check"></i></a>
                            <a href="./view-team.html" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td><a href="./view-team.html" class="blue">Lorem Ipsum Dolorsit Amet</a></td>
                          <td>Web Design Competition</td>
                          <td><span class="badge badge-info">Batch 1 Passed</span></td>
                          <td>
                            <a href="#" class="btn-success btn-sm"><i class="fa fa-check"></i></a>
                            <a href="./view-team.html" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td><a href="./view-team.html" class="blue">Lorem Ipsum Dolorsit Amet</a></td>
                          <td>Web Design Competition</td>
                          <td><span class="badge badge-warning">Paid</span></td>
                          <td>
                            <a href="#" class="btn-success btn-sm"><i class="fa fa-check"></i></a>
                            <a href="./view-team.html" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                          </td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td><a href="./view-team.html" class="blue">Lorem Ipsum Dolorsit Amet</a></td>
                          <td>Web Design Competition</td>
                          <td><span class="badge badge-success">Finalist</span></td>
                          <td>
                            <a href="#" class="btn-success btn-sm"><i class="fa fa-check"></i></a>
                            <a href="./view-team.html" class="btn-primary btn-sm"><i class="fa fa-eye"></i></a>
                            <a href="#" class="btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
<script type="text/javascript" src="../assets/js/main-for-dashboard.js"></script>
</script>
</body>
</html>
