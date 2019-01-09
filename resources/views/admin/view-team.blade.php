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

        <!--mulai bigbox detail teams-->
          <div class="row bigbox">
            <div class="col-sm-3 text-center">
              <div class="row m-0 pd-bt-20">
                <div class="col-sm-12">
                  <i class="fa fa-user-circle fa-5x"></i>
                  <h3 class="title-event-db">Team Name</h3>
                </div>
                  <div class="col-sm-12 event-db">
                    <label for="" class="font-weight-bold">username@mail.com</label>
                  <div class="col-sm-12">
                    <label for="" class="badge badge-success">Registered</label>
                  </div>

                  </div>
                </div>
              </div>
              <div class="col-sm-9">
                <div class="row m-0 pd-bt-5">
                  <div class="col-sm-12 text-center pd-t-15">
                    <h3>About Team</h3>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        Team Name
                      </div>
                      <div class="panel-body text-left">
                        <div class="row">
                          <div class="col-sm-6 pd-bt-5">
                            <span class="font-weight-bold">Email</span> : mail@mail.com
                          </div>
                          <div class="col-sm-6 pd-bt-5">
                            <span class="font-weight-bold">Category </span>: Web Design Competition
                          </div>
                          <div class="col-sm-6 pd-bt-5">
                            <span class="font-weight-bold">Contact Person</span> : +628329239874
                          </div>
                          <div class="col-sm-6 pd-bt-5">
                            <span class="font-weight-bold">Asal Sekolah</span> : indonesia
                          </div>
                          <div class="col-sm-12 pd-t-15">
                            <span class="font-weight-bold">Alamat Sekolah</span> : Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!--akhir bigbox detail teams-->

        <!--mulai big box members-->
          <div class="row bigbox">
            <div class="col-sm-12">
              <div class="row m-0 pd-bt-5">
                <div class="col-sm-12 text-left"><h3 class="title-db">Members</h3></div>
                <div class="col-md-4 text-center">
                  <div class="row">
                    <div class="col-sm-12 news-db">
                      <h1><i class="fa fa-user-circle fa-3x"></i></h1>
                    </div>
                    <div class="col-sm-12">
                      <p class="fr-bold">Leader</p>
                      <p>Full Name</p>
                      <p>mail@mail.com</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-center">
                  <div class="row">
                    <div class="col-sm-12 news-db">
                      <h1>  <i class="fa fa-user-circle fa-3x"></i></h1>
                    </div>
                    <div class="col-sm-12">
                      <p class="fr-bold">Member 1</p>
                      <p>Full Name</p>
                      <p>mail@mail.com</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 text-center">
                  <div class="row">
                    <div class="col-sm-12 news-db">
                      <h1>  <i class="fa fa-user-circle fa-3x"></i></h1>
                    </div>
                    <div class="col-sm-12">
                      <p class="fr-bold">Member 2</p>
                      <p>Full Name</p>
                      <p>mail@mail.com</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--akhir bigbox members-->

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
