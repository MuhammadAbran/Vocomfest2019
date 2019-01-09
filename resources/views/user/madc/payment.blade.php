<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mobile apps development serta ICPC untuk mahasiswa, dan ditutup dengan sebuah seminar nasional.">
  <meta name="keywords" content="vocomfest, ugm, himakomsi, computer, festival, lomba">
  <meta name="author" content="Vocomfest Technical Support Team">
  <meta name="robots" content="index,follow">

  <title>Dashboard | Pembayaran</title>

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
  <!-- Modal -->
  <div class="modal fade" id="payment-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Unggah Bukti Pembayaran</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Tim</label>
              <input type="text" class="form-control" aria-describedby="timName" value="Maju Mapan" disabled>
            </div>
            <div class="form-group">
							<label for="amout" class="control-label">Total : </label>
							<div class="input-group">
								<span class="input-group-addon">Rp</span>
								<input type="text" name="amount" id="" value="75000" class="form-control" disabled>
							</div>
						</div>
            <div class="form-group">
              <label for="exampleFormControlFile1">Bukti Pembayaran</label>
              <input type="file" class="form-control-file" id="">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- /Modal -->

<div id="dashboard">
    <!--Header-->
    <div id="header">
      <nav class="navbar navbar-expand-lg px-4 navbar-dark">
        <a class="navbar-brand" href="./index.html">
          <img src="../assets/img/icon.png" alt="">
          <span>Vocomfest</span>
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
          <h5 class="wh">Team Name</h5>
          <h6>WDC Team</h6>
        </div>

        <ul id="nav" class="text-left">
          <li>
            <a href="./dashboard.html" class="col-sm-12">
              <i class="fa fa-desktop"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li>
            <a href="./member.html" class="col-sm-12">
              <i class="fa fa-users"></i>
              <span>Team Members</span>
            </a>
          </li>
          <li>
            <a href="../index.html#events" class="col-sm-12">
              <i class="fa fa-microphone"></i>
              <span>Events</span>
            </a>
          </li>
          <li>
            <a href="../news-list.html" class="col-sm-12">
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

        <!--mulai bigbox -->
          <div class="row bigbox">
            <div class="col-sm-12">
              <div class="row m-0 pd-bt-15">
                <div class="col-sm-12 text-left">
                  <h3 class="title-event-db">Pembayaran</h3>
                </div>
                  <div class="col-sm-12 text-left event-db">
                    <p>Status : <span class="font-weight-bold">Belum melakukan pembayaran</span>
                    </p>
                    <h5 class="mg-t-20">Data</h5>
                    <hr>
                    <div class="row mg-bt-10">
                      <div class="col-md-2">
                        <strong>Kompetisi</strong>
                      </div>
                      <div class="col-md-10">
                        : <span>Web Design Competition</span>
                      </div>
                    </div>
                    <hr>
                    <div class="row mg-bt-10">
                      <div class="col-md-2">
                        <strong>Nama Tim</strong>
                      </div>
                      <div class="col-md-10">
                        : <span>Hmmm</span>
                      </div>
                    </div>
                    <hr>
                    <div class="row mg-bt-10">
                      <div class="col-md-2">
                        <strong>Total Pembayaran</strong>
                      </div>
                      <div class="col-md-10">
                        : Rp <span>50.000</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-12 text-left pd-bt-20">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#payment-modal"><i class="fa fa-upload"></i> Unggah Bukti Pembayaran</button>
                  </div>
                </div>
              </div>
            </div>
          <!--akhir bigbox -->

        </div>
      </div>
      <!--akhir content section-->

    </div>
  </div>
</div>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/popper.js"></script>
<script type="text/javascript" src="../assets/vendor/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="../assets/vendor/lightcase/lightcase.js"></script>
<!-- <script type="text/javascript" src="../assets/vendor/nicescroll/jquery.nicescroll.min.js"></script> -->
<script type="text/javascript" src="../assets/js/main-for-dashboard.js"></script>
</body>
</html>
