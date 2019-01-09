<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="Vocational Computer Festival (Vocomfest) adalah lomba tahunan yang diselenggarakan oleh HIMAKOMSI UGM yang terdiri dari lomba web design untuk SLTA, lomba mobile apps development serta ICPC untuk mahasiswa, dan ditutup dengan sebuah seminar nasional.">
	<meta name="keywords" content="vocomfest, ugm, himakomsi, computer, festival, lomba">
	<meta name="author" content="Vocomfest Technical Support Team">
	<meta name="robots" content="index,follow">

  <title>Vocomfest - Register Page</title>

  <link rel="shortcut icon" type="x-icon" href="./assets/img/icon.png">

  <!-- CSS HERE -->
  <link rel="stylesheet" type="text/css" href="./assets/vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/normalize.css">
  <link rel="stylesheet" type="text/css" href="./assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="./assets/vendor/slick/slick.css">
  <link rel="stylesheet" type="text/css" href="./assets/vendor/slick/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="./assets/vendor/lightcase/lightcase.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/vocom-main-style.css">

</head>
<body id="register">
	<section class="regist-content">
  		<img id="vocom-logo-color" src="./assets/img/logo.png" alt="">
  		<p class="title">Register To Vocomfest</p>
      <div class="container mg-pd-0">
      <div class="form-regist">
        <ul class="nav nav-pills mg-t-10">
          <li class="active">
            <a id="link1" data-toggle="pill" href="#madc-form">
            <i class="fa fa-laptop fa-2x"></i> <br>
            <span>MADC</span>
          </a></li>
          <li><a id="link2" data-toggle="pill" href="#wdc-form">
            <i class="fa fa-mobile fa-2x"></i> <br>
            <span>WDC</span>
          </a></li>
          <li><a id="link3" data-toggle="pill" href="#semnas-form">
            <i class="fa fa-microphone fa-2x"></i> <br>
            <span>SEMNAS</span>
          </a></li>
        </ul>
        <div class="tab-content">
          <!-- WDC FORM -->
          <form  id="madc-form" class="tab-pane fade in active show" action="{{ route('register') }}" method="post">
             @csrf
             <input type="hidden" name="role" value="2">
             <input type="hidden" name="progress" value="0">
             <div>
              <div class="row mg-0">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Team Name
                    </div>
                    <div class="col-md-7">
                      : <input type="text" placeholder="Team Name" name="team_name">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Leader email
                    </div>
                    <div class="col-md-7">
                      : <input type="text" placeholder="Email" name="leader_email">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Password
                    </div>
                    <div class="col-md-7">
                      : <input type="password" placeholder="Password" name="password">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Confirm Password
                    </div>
                    <div class="col-md-7">
                      : <input type="password" placeholder="Confirm Password" name="comfirm_password">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Instance Name
                    </div>
                    <div class="col-md-7">
                      : <input type="text" placeholder="Instance Name" name="instance_name">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Instance Address
                    </div>
                    <div class="col-md-7">
                      : <input type="text" placeholder="Instance Address" name="instance_address">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Leader Name
                    </div>
                    <div class="col-md-7">
                      : <input type="text" placeholder="Leader Name" name="leader_name">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Phone Number
                    </div>
                    <div class="col-md-7 phone-num">
                      : +62 <input type="number" placeholder="Phone Number" name="leader_phone">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <span class="mg-b-15">Team Member #1</span>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Member Name
                    </div>
                    <div class="col-md-7 mg-b-15">
                      : <input type="text" placeholder="Member Name" name="co-leader_name">
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Member Email
                      </div>
                    <div class="col-md-7 mg-b-15">
                      : <input type="text" placeholder="Member Email" name="co-leader_email">
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-5">
                      Phone Number
                      </div>
                    <div class="col-md-7 phone-num">
                      : +62 <input type="number" placeholder="Phone Number" name="co-leader_phone">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <span class="mg-b-15">Team Member #2</span>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Member Name
                    </div>
                    <div class="col-md-7 mg-b-15">
                      : <input type="text" placeholder="Member Name" name="member-1_name">
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Member Email
                      </div>
                    <div class="col-md-7 mg-b-15">
                      : <input type="text" placeholder="Member Email" name="member-1_email">
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-5">
                      Phone Number
                      </div>
                    <div class="col-md-7 phone-num">
                      : +62 <input type="number" placeholder="Phone Number" name="member-1_phone">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" >
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <span class="mg-b-15">Team Member #3</span>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Member Name
                    </div>
                    <div class="col-md-7 mg-b-15">
                      : <input type="text" placeholder="Member Name" name="member-2_name">
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Member Email
                      </div>
                    <div class="col-md-7 mg-b-15">
                      : <input type="text" placeholder="Member Email" name="member-2_email">
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-5">
                      Phone Number
                      </div>
                    <div class="col-md-7 phone-num">
                      : +62 <input type="number" placeholder="Phone Number" name="member-2_phone">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-3 mg-bt-10">
                  <input class="regist-btn mg-bt-15" type="submit" value="REGISTER" name="">
                </div>
              </div>
              <p class="log-here">
                Already have an account? <span><a href="#">Login here</a></span>.
              </p>
            </div>
          </form>


          <!-- END OF WDC FORM -->
          <!-- MADC FORM -->

          <form  id="wdc-form" class="tab-pane fade" action="{{ route('register') }}" method="post">
             @csrf
             <div>
              <div class="row mg-0">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Team Name
                    </div>
                    <div class="col-md-7">
                      : <input type="text" placeholder="Team Name" name="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Leader email
                    </div>
                    <div class="col-md-7">
                      : <input type="text" placeholder="Email" name="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Password
                    </div>
                    <div class="col-md-7">
                      : <input type="password" placeholder="Password" name="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Confirm Password
                    </div>
                    <div class="col-md-7">
                      : <input type="password" placeholder="Confirm Password" name="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Instance Name
                    </div>
                    <div class="col-md-7">
                      : <input type="text" placeholder="Instance Name" name="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Instance Address
                    </div>
                    <div class="col-md-7">
                      : <input type="text" placeholder="Instance Address" name="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Leader Name
                    </div>
                    <div class="col-md-7">
                      : <input type="text" placeholder="Leader Name" name="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Phone Number
                    </div>
                    <div class="col-md-7 phone-num">
                      : +62 <input type="number" placeholder="Phone Number" name="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <span class="mg-b-15">Team Member #1</span>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Member Name
                    </div>
                    <div class="col-md-7 mg-b-15">
                      : <input type="text" placeholder="Member Name" name="">
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Member Email
                      </div>
                    <div class="col-md-7 mg-b-15">
                      : <input type="text" placeholder="Member Email" name="">
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Phone Number
                      </div>
                    <div class="col-md-7 phone-num mg-b-15">
                      : +62 <input type="number" placeholder="Phone Number" name="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <span class="mg-b-15">Team Member #2</span>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Member Name
                    </div>
                    <div class="col-md-7 mg-b-15">
                      : <input type="text" placeholder="Member Name" name="">
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Member Email
                      </div>
                    <div class="col-md-7 mg-b-15">
                      : <input type="text" placeholder="Member Email" name="">
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Phone Number
                      </div>
                    <div class="col-md-7 phone-num mg-b-15">
                      : +62 <input type="number" placeholder="Phone Number" name="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row" style="display:none;">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <span class="mg-b-15">Team Member #3</span>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Member Name
                    </div>
                    <div class="col-md-7 mg-b-15">
                      : <input type="text" placeholder="Member Name" name="">
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Member Email
                      </div>
                    <div class="col-md-7 mg-b-15">
                      : <input type="text" placeholder="Member Email" name="">
                    </div>
                  </div>
                  <div class="row ">
                    <div class="col-md-5 mg-b-15">
                      Phone Number
                      </div>
                    <div class="col-md-7 phone-num mg-b-15">
                      : +62 <input type="number" placeholder="Phone Number" name="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-3 mg-bt-10">
                  <input class="regist-btn mg-bt-15" type="submit" value="REGISTER" name="">
                </div>
              </div>
              <p class="log-here">
                Already have an account? <span><a href="#">Login here</a></span>.
              </p>
            </div>
          </form>

          <!-- END OF MADC FORM -->


          <!-- SEMNAS FORM -->

          <form id="semnas-form" class="tab-pane fade" action="{{ route('register') }}" method="post">
             @csrf
             <div>
              <div class="row mg-0">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Full Name
                    </div>
                    <div class="col-md-7">
                      : <input type="text" placeholder="Full Name" name="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Email Address
                    </div>
                    <div class="col-md-7">
                      : <input type="text" placeholder="Email" name="">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Phone Number
                    </div>
                    <div class="col-md-7 phone-num">
                      : +62 <input type="number" placeholder="Phone Number" name="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6 col-12 mg-b-15">
                  <div class="row">
                    <div class="col-md-5">
                      Category
                    </div>
                    <div class="col-md-7 phone-num">
                      : <select name="">
                          <option value="0">Mahasiswa/Pelajar</option>
                          <option value="1">Umum</option>
                        </select>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-3 mg-bt-10">
                  <input class="regist-btn mg-bt-15" type="submit" value="REGISTER" name="">
                </div>
              </div>
              <p class="log-here">
                Already have an account? <span><a href="#">Login here</a></span>.
              </p>
            </div>
          </form>

        </div>
        <!-- END OF SEMNAS FORM -->
      </div>
    </div>
  </section>
  <section class="desc-form">
    <div id="desc-madc" style="display:block;">
      <img class="desc-logo" src="./assets/img/madc.png" alt="">
      <p>
        <span>MOBILE APPS DEVELOPMENT CONTEST</span><br><br>
          Mobile Apps Development Competition merupakan kompetisi
          berbasis platform android untuk mahasiswa seluruh Indonesia.
          Melalui kompetisi ini, diharapkan dapat memberikan kontribusi
          dalam mencetak generasi baru pengembangan aplikasi.
      </p>
    </div>

    <div id="desc-wdc" style="display:none;">
      <img class="desc-logo" src="./assets/img/wdc.png" alt="">
      <p>
        <span>WEB DESIGN COMPETITION</span><br><br>
          WEB Design Competition 2018 merupakan kompetisi untuk para pengembang
          website di tingkat SMA/SMK sederajat. Melalui kompetisi ini, diharapkan
          dapat memberikan kontribusi dalam mencetak generasi baru pengembangan WEB.
      </p>
    </div>

    <div id="desc-semnas" style="display:none;">
      <img class="desc-logo" src="./assets/img/semnas.png" alt="">
      <p>
        <span>SEMINAR NASIONAL</span><br><br>
        Seminar Nasional merupakan acara puncak VOCOMFEST 2018.
        Acara ini terbuka untuk umum dan diharapkan dapat memberikan
        pengetahuan untuk masyarakat Indonesia tentang pentingnya
        perkembangan dunia IT.
      </p>
    </div>

  </section>


  <script type="text/javascript" src="./assets/js/jquery.min.js"></script>
  <script type="text/javascript" src="./assets/js/popper.js"></script>
  <script type="text/javascript" src="./assets/vendor/bootstrap/bootstrap.min.js"></script>
  <script type="text/javascript" src="./assets/vendor/slick/slick.min.js"></script>
  <script type="text/javascript" src="./assets/vendor/lightcase/lightcase.js"></script>
  <script type="text/javascript" src="./assets/vendor/nicescroll/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="./assets/js/main.js"></script>
  <script>
      $("#link1").click(function(){
        $("#desc-madc").show(200);
        $("#desc-wdc").hide(200);
        $("#desc-semnas").hide(200);
      });

      $("#link2").click(function(){
        $("#desc-madc").hide(200);
        $("#desc-wdc").show(200);
        $("#desc-semnas").hide(200);
      });

      $("#link3").click(function(){
        $("#desc-madc").hide(200);
        $("#desc-wdc").hide(200);
        $("#desc-semnas").show(200);
      });

  </script>
</body>
</html>
