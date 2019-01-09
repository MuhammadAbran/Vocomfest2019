<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mobile apps development serta ICPC untuk mahasiswa, dan ditutup dengan sebuah seminar nasional.">
  <meta name="keywords" content="vocomfest, ugm, himakomsi, computer, festival, lomba">
  <meta name="author" content="Vocomfest Technical Support Team">
  <meta name="robots" content="index,follow">

  <title>Dashboard | Team Members</title>

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
  <div class="modal fade" id="new-member" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Tambahkan Member</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Member</label>
              <input type="text" class="form-control" aria-describedby="timName" placeholder="Nama Member">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text" class="form-control" aria-describedby="timName" placeholder="Email Member">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Nomor HP</label>
              <input type="text" class="form-control" aria-describedby="timName" placeholder="Nomor HP">
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
            <a href="./member.html" class="active col-sm-12">
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
      <div class="col-lg-10 col-md-9 col-sm-12 box-db" id="member-page">
        <div class="container-fluid px-3">

        <!--mulai bigbox -->
          <div class="row bigbox">
            <div class="col-sm-12 border">
              <div class="row m-0 pd-bt-15">
                <div class="col-sm-12 text-left">
                  <h3 class="title-event-db">Team Members</h3>
                  <p>Nama Tim : <span class="font-weight-bold">Remahan Biskuit Roma</span>
                </div>
              </div>
            </div>

          <!--akhir bigbox -->
          <div class="row mg-bt-20 mg-t-0 pd-lr-20">
            <div class="col-lg-3 col-md-6">
              <div class="bigbox member-sq">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <img class="photo" alt="" src="../assets/img/photo-people.png">
                  </div>
                </div>
                <p class="status">
                  Leader
                </p>
                <p>
                  <span>Nama Peserta</span>
                </p>
                <p class="mg-t-15">
                  mail@mail.com
                </p>
                <p class="pd-b-15 small">
                  08125468975
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="bigbox member-sq">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <img class="photo" alt="" src="../assets/img/photo-people.png">
                  </div>
                </div>
                <p class="status">
                  Member
                </p>
                <p>
                  <span>Nama Peserta</span>
                </p>
                <p class="mg-t-15">
                  mail@mail.com
                </p>
                <p class="pd-b-15 small">
                  08125468975
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="bigbox member-sq">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <img class="photo" alt="" src="../assets/img/photo-people.png">
                  </div>
                </div>
                <p class="status">
                  Member
                </p>
                <p>
                  <span>Nama Peserta</span>
                </p>
                <p class="mg-t-15">
                  mail@mail.com
                </p>
                <p class="pd-b-15 small">
                  08125468975
                </p>
              </div>
            </div>
            <div class="col-lg-3 col-md-6">
              <div class="bigbox no-border">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                      <button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#new-member"><i class="fa fa-user-plus fa-2x new-memb"></i></button>
                  </div>
                </div>

              </div>
            </div>

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
<script type="text/javascript" src="../assets/vendor/slick/slick.min.js"></script>
<script type="text/javascript" src="../assets/vendor/lightcase/lightcase.js"></script>
<!-- <script type="text/javascript" src="../assets/vendor/nicescroll/jquery.nicescroll.min.js"></script> -->
<script type="text/javascript" src="../assets/js/main-for-dashboard.js"></script>
</body>
</html>
