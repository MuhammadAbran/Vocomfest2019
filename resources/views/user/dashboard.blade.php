<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mobile apps development serta ICPC untuk mahasiswa, dan ditutup dengan sebuah seminar nasional.">
  <meta name="keywords" content="vocomfest, ugm, himakomsi, computer, festival, lomba">
  <meta name="author" content="Vocomfest Technical Support Team">
  <meta name="robots" content="index,follow">

  <title>Dashboard</title>

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
        <a class="navbar-brand" href="./index.html">
          <img src="../assets/img/icon.png" alt="">
          <span>Vocomfest</span>
        </a>
        <form action="{{ route('logout') }}" method="post">
           @csrf
           @method('POST')
           <div>
                <button type="submit" class="btn btn-ye-full"><i class="fa fa-sign-out"></i> Sign Out</button>
           </div>
        </form>
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
            <a href="./dashboard.html" class="active col-sm-12">
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

        <!--mulai bigbox event-->
          <div class="row bigbox">
            <div class="col-sm-12">
              <div class="row m-0 pd-bt-15">
                <div class="col-sm-12 text-left">
                  <h3 class="title-event-db">Welcome</h3>
                </div>
                  <div class="col-sm-12 text-left event-db">
                    <p><span class="font-weight-bold">Congrats, you've been registered!</span> And now, next step is Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim, veniam! Lorem ipsum dolor sit amet, consectetur adipisicing elit. A, rem!
                    </p>
                  </div>
                </div>
              </div>
            </div>
          <!--akhir bigbox event-->

          <!--mulai big box news-->
          <div class="row bigbox">
            <div class="col-sm-12">
              <div class="row m-0 pd-bt-15">
                <div class="col-sm-12 text-left"><h3 class="title-db">Progress</h3></div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-sm-12 news-db">
                      <h1>  <i class="fa fa-user-plus fa-2x"></i></h1>
                    </div>
                    <div class="col-sm-12">
                      <p class="fr-bold">Registration</p>
                      <p>Status : Registered</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-sm-12 news-db">
                      <h1>  <i class="fa fa-credit-card fa-2x"></i></h1>
                    </div>
                    <div class="col-sm-12">
                      <p class="fr-bold">Payment</p>
                      <p>Status : - </p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="row">
                    <div class="col-sm-12 news-db">
                      <h1>  <i class="fa fa-upload fa-2x"></i></h1>
                    </div>
                    <div class="col-sm-12">
                      <p class="fr-bold">Upload</p>
                      <p>Status : - </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--akhir bigbox news-->

        </div>
      </div>
      <!--akhir content section-->

    </div>
  </div>
</div>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="../assets/vendor/nicescroll/jquery.nicescroll.min.js"></script> -->
<script type="text/javascript" src="../assets/js/main-for-dashboard.js"></script>
</body>
</html>
