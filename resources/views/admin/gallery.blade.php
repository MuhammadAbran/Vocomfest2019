<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mobile apps development serta ICPC untuk mahasiswa, dan ditutup dengan sebuah seminar nasional.">
  <meta name="keywords" content="vocomfest, ugm, himakomsi, computer, festival, lomba">
  <meta name="author" content="Vocomfest Technical Support Team">
  <meta name="robots" content="index,follow">

  <title>Admin Dashboard | Gallery</title>

  <link rel="shortcut icon" type="x-icon" href="../assets/img/icon.png">

  <!-- CSS HERE -->
  <link rel="stylesheet" type="text/css" href="../assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/vendor/lightcase/lightcase.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/vocom-main-style.css">

</head>
<body>
  <!-- Modal -->
  <div class="modal fade" id="upload-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Upload Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Title :</label>
              <input type="text" class="form-control" aria-describedby="timName" placeholder="Enter title here">
            </div>
            <div class="form-group">
              <label for="amout" class="control-label">Image : </label>
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

  <div class="container-fluid margin-zero">
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
            <a href="./news.html" class="col-sm-12">
              <i class="fa fa-hourglass-half"></i>
              <span>News</span>
            </a>
          </li>
          <li>
            <a href="./gallery.html" class="active col-sm-12">
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
        <!--Gallery Content-->
          <div class="div-content-db">
            <h4 class="text-left title-event-db">Gallery</h4>
            <a href="#" data-toggle="modal" data-target="#upload-modal" class="btn btn-add btn-primary mg-b-15">
              Upload Image <i class="fa fa-plus"></i>
            </a>
            <br>

          <form method="" action="">
            <p class="mg-bt-10 stat-gallery small"> All (0) | <a href="">Published</a> (1) | <a href="">Unpublish</a> (3)</p>
            <!-- GALLERY LIST -->
            <div class="panel panel-default">
                <div class="panel-heading">
                  List
                </div>
                <div class="panel-body">
                  <div class="table-responsive">
                    <div class="row nomag">
                      <div class="col-md-8 small">
                        Selected (0) | <a href="" data-toggle="modal" data-target="#delete"><i data-toggle="tooltip" data-placement="top" title="" class="fa fa-trash-o" data-original-title="Delete"></i><span> Delete Selected</span></a> | <a href=""><i data-toggle="tooltip" data-placement="top" title="" class="fa fa-globe" data-original-title="Publish"></i> Publish Selected</a> | <a href=""><i data-toggle="tooltip" data-placement="top" title="" class="fa fa-minus-circle" data-original-title="Unpublish"></i> Unpublish Selected</a>
                      </div>
                      <div class="col-md-4 nopad text-right">
                        <label>
                          <input id="input-search" name="" class="form-control input-sm" type="text">
                        </label>
                        <label>
                          <input value="Search" name="" class="btn btn-ye-full-3 input-sm" type="submit">
                        </label>
                      </div>
                    </div>
                  <div class="mg-bt-15">
                    <div class="row nomag">

                      <!--Section1-->
                      <section class="col-md-3 pd-t-10">
                        <div class="list-photo">
                          <a href="../assets/img/logo-coming.png" data-rel="lightcase">
                            <img src="../assets/img/logo-coming.png" alt="Gallery" class="cover-img">
                          </a>
                          <div class="col-md-12 mg-t-10 text-center">
                            <label for="">Tittle here</label>
                          </div>
                          <div class="col-md-12 mg-b-10">
                            <label class="mg-t-5">
                              <input name="" value="1" type="checkbox">
                            </label>
                            <span class="float-right">
                              <a href=""><i data-toggle="tooltip" data-placement="top" title="" class="fa fa-minus-circle" data-original-title="Unpublish"></i></a>
                              <a href="" data-toggle="modal" data-target="#delete-modal"><i data-toggle="tooltip" data-placement="top" title="" class="fa fa-trash-o" data-original-title="Delete"></i></a>
                              <a href="../assets/img/logo-coming.png" data-rel="lightcase"><i data-toggle="tooltip" data-placement="top" title="" class="fa fa-search-plus" data-original-title="Detail"></i></a>
                            </span>
                          </div>
                          <span></span>
                        </div>
                      </section>
                      <!--/section-->

                      <!--Section-->
                      <section class="col-md-3 pd-t-10">
                        <div class="list-photo">
                          <a href="../assets/img/logo-coming.png" data-rel="lightcase">
                            <img src="../assets/img/logo-coming.png" alt="Gallery" class="cover-img">
                          </a>
                          <div class="col-md-12 mg-t-10 text-center">
                            <label for="">Tittle here</label>
                          </div>
                          <div class="col-md-12 mg-b-10">
                            <label class="mg-t-5">
                              <input name="" value="1" type="checkbox">
                            </label>
                            <span class="float-right">
                              <a href=""><i class="fa fa-minus-circle"></i></a>
                              <a href="" data-toggle="modal" data-target="#delete-modal"><i data-toggle="tooltip" data-placement="top" title="" class="fa fa-trash-o" data-original-title="Delete"></i></a>
                              <a href="../assets/img/logo-coming.png" data-rel="lightcase"><i class="fa fa-search-plus"></i></a>
                            </span>
                          </div>
                          <span></span>
                        </div>
                      </section>
                      <!--/section-->

                      <section class="col-md-3 pd-t-10">
                        <div class="list-photo">
                          <a href="../assets/img/logo-coming.png" data-rel="lightcase">
                            <img src="../assets/img/logo-coming.png" alt="Gallery" class="cover-img">
                          </a>
                          <div class="col-md-12 mg-t-10 text-center">
                            <label for="">Tittle here</label>
                          </div>
                          <div class="col-md-12 mg-b-10">
                            <label class="mg-t-5">
                              <input name="" value="1" type="checkbox">
                            </label>
                            <span class="float-right">
                              <a href=""><i class="fa fa-minus-circle"></i></a>
                              <a href="" data-toggle="modal" data-target="#delete-modal"><i data-toggle="tooltip" data-placement="top" title="" class="fa fa-trash-o" data-original-title="Delete"></i></a>
                              <a href=""><i class="fa fa-search-plus"></i></a>
                            </span>
                          </div>
                          <span></span>
                        </div>
                      </section>
                      <!--/section-->

                      <section class="col-md-3 pd-t-10">
                        <div class="list-photo">
                          <a href="../assets/img/logo-coming.png" data-rel="lightcase">
                            <img src="../assets/img/logo-coming.png" alt="Gallery" class="cover-img">
                          </a>
                          <div class="col-md-12 mg-t-10 text-center">
                            <label for="">Tittle here</label>
                          </div>
                          <div class="col-md-12 mg-b-10">
                            <label class="mg-t-5">
                              <input name="" value="1" type="checkbox">
                            </label>
                            <span class="float-right">
                              <a href=""><i class="fa fa-minus-circle"></i></a>
                              <a href="" data-toggle="modal" data-target="#delete-modal"><i data-toggle="tooltip" data-placement="top" title="" class="fa fa-trash-o" data-original-title="Delete"></i></a>
                              <a href=""><i class="fa fa-search-plus"></i></a>
                            </span>
                          </div>
                          <span></span>
                        </div>
                      </section>
                      <!--/section-->

                      <section class="col-md-3 pd-t-10">
                        <div class="list-photo">
                          <a href="../assets/img/logo-coming.png" data-rel="lightcase">
                            <img src="../assets/img/logo-coming.png" alt="Gallery" class="cover-img">
                          </a>
                          <div class="col-md-12 mg-t-10 text-center">
                            <label for="">Tittle here</label>
                          </div>
                          <div class="col-md-12 mg-b-10">
                            <label class="mg-t-5">
                              <input name="" value="1" type="checkbox">
                            </label>
                            <span class="float-right">
                              <a href=""><i class="fa fa-minus-circle"></i></a>
                              <a href="" data-toggle="modal" data-target="#delete-modal"><i data-toggle="tooltip" data-placement="top" title="" class="fa fa-trash-o" data-original-title="Delete"></i></a>
                              <a href=""><i class="fa fa-search-plus"></i></a>
                            </span>
                          </div>
                          <span></span>
                        </div>
                      </section>
                      <!--/section-->

                      <section class="col-md-3 pd-t-10">
                        <div class="list-photo">
                          <a href="../assets/img/logo-coming.png" data-rel="lightcase">
                            <img src="../assets/img/logo-coming.png" alt="Gallery" class="cover-img">
                          </a>
                          <div class="col-md-12 mg-t-10 text-center">
                            <label for="">Tittle here</label>
                          </div>
                          <div class="col-md-12 mg-b-10">
                            <label class="mg-t-5">
                              <input name="" value="1" type="checkbox">
                            </label>
                            <span class="float-right">
                              <a href=""><i class="fa fa-minus-circle"></i></a>
                              <a href="" data-toggle="modal" data-target="#delete-modal"><i data-toggle="tooltip" data-placement="top" title="" class="fa fa-trash-o" data-original-title="Delete"></i></a>
                              <a href=""><i class="fa fa-search-plus"></i></a>
                            </span>
                          </div>
                          <span></span>
                        </div>
                      </section>
                      <!--/section-->

                    </div>
                  </div>

                  <!--pagination-->
                  <div class="row nomag">
                    <div class="col-md-6 nopad">
                      <span>Showing 1 to 4 from 4 entries</span>
                    </div>
                    <div class="col-md-6 nopad">
                      <ul class="pagination nomag float-right">
                        <li class="disabled"><a href="#">Prev</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">Next</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>
            </div>
                      <!-- /GALLERY LIST -->
                  </form>
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
<script type="text/javascript" src="../assets/vendor/lightcase/lightcase.js"></script>
<script type="text/javascript" src="../assets/js/main-for-dashboard.js"></script>
</script>
</body>
</html>
