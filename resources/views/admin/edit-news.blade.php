<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mobile apps development serta ICPC untuk mahasiswa, dan ditutup dengan sebuah seminar nasional.">
  <meta name="keywords" content="vocomfest, ugm, himakomsi, computer, festival, lomba">
  <meta name="author" content="Vocomfest Technical Support Team">
  <meta name="robots" content="index,follow">

  <title>Admin Dashboard | Sunting Berita</title>

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
            <a href="./news.html" class="active col-sm-12">
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
      <div class="col-lg-10 col-md-9 col-sm-12 box-db" id="edit-news">
        <div class="container-fluid px-3">
          <div class="bigbox mg-l-15 mg-r-15">
          <div class="row">
            <div class="col-md-12">
              <div class="title-event-db">
                <h2 class="mg-b-5 mg-t-25">Sunting Berita</h2>
              </div>
            </div>
            <div class="row mg-b-10">
              <div class="col-md-8">
                <input type="text" name="title" id="title" value="Ini Judul Berita" class="form-control">
              </div>
              <div class="col-md-4 text-right">
                <span>Kategori : </span>
                <label>
                  <select class="form-control" id="categories">
                    <option value="1">Kategori 1</option>
                    <option value="2">Kategori 2</option>
                    <option value="3">Kategori 3</option>
                    <option value="4">Kategori 4</option>
                  </select>
                </label>
              </div>
            </div>
          <div class="row">
            <div class="col-md-12">
              <textarea class="tinymce">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
										proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

									<p>
                    Nam posuere ultricies sapien sed imperdiet. Fusce a euismod eros. Nam tincidunt nunc hendrerit dapibus ultricies. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec ultricies egestas diam, quis condimentum metus porta ac. Etiam vel semper nunc. Nam venenatis aliquet felis nec feugiat. Pellentesque sit amet auctor tortor, volutpat consequat arcu. Ut diam quam, vehicula a mollis in, varius vitae justo. Nunc aliquet leo eu purus condimentum, in ultrices dolor interdum. Praesent vestibulum pretium leo eget hendrerit. Vestibulum orci ex, mattis sit amet finibus vel, feugiat non tortor. Curabitur pellentesque velit vitae sapien porta posuere. Aenean dapibus vehicula lectus, a suscipit arcu tempor in. Suspendisse potenti.
                </p>
              </textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <input type="submit" value="Simpan Draft" name="" class="btn btn-le btn-sm btn-default">
              <input type="submit" value="Pratinjau" name="" class="btn btn-le btn-sm btn-default">
              <input type="submit" value="Terbitkan" name="" class="btn btn-le btn-ye btn-sm btn-default">
            </div>
          </div>
        </div>
        <!--mulai bigbox event-->
        </div>
      </div>
      <!--akhir content section-->

    </div>
  </div>
</div>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/vendor/chartjs/chart.js"></script>
<!-- <script type="text/javascript" src="../assets/vendor/nicescroll/jquery.nicescroll.min.js"></script> -->
<script type="text/javascript" src="../assets/js/main-for-dashboard.js"></script>
<script type="text/javascript" src="../assets/vendor/tinymce/tinymce.min.js" ></script>
<script type="text/javascript" src="../assets/vendor/tinymce/init-tinymce.js" ></script>

</body>
</html>
