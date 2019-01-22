<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Vocomfest 2019</title>

    <link rel="shortcut icon" type="image/png" href="assets/img/logo_v.png"/>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="{!! asset('assets/vendor//bootstrap/bootstrap.min.css')!!}" >

    <link rel="stylesheet" href="{!! asset('assets/css/animate.css') !!}" >

    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">


    <link rel="stylesheet" href="{!! asset('assets/vendor/slick/slick.css') !!}">
    <link rel="stylesheet" href="{!! asset('assets/vendor/slick/slick-theme.css') !!}">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="{!! asset('assets/css/app.css')!!}">
    <link rel="stylesheet" href="{!! asset('assets/css/stars.css')!!}">
    <!-- Font Awesome JS -->
    <script defer src="{!! asset('assets/vendor/fontawesome/solid.js')!!}"></script>
    <script defer src="{!! asset('assets/vendor/fontawesome/fontawesome.js')!!}"></script>

</head>

<body>
    
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top bottom-animated" id="myNav">
		<div class="container-fluid">
            <a href="index.html" class="navbar-brand">
                <div class="logo-nav"></div>
                <div class="logo-nav-mobile"></div>
			</a>
			<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#mynavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="index.html#header"  class="nav-link" onclick=" $('#header').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Beranda
                            <span class="line_menu"></span>
                        </a>  
                     </li>

                     <li class="nav-item">
                        <a href="index.html#about"  class="nav-link" onclick=" $('#about').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Tentang
                            <span class="line_menu"></span>
                        </a>  
                     </li>

                     <li class="nav-item">
                        <a href="index.html#competition" class="nav-link" onclick=" $('#competition').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Kompetisi
                            <span class="line_menu"></span>
                        </a>  
                     </li>

                     <li class="nav-item">
                        <a href="index.html#festival" class="nav-link" onclick=" $('#festival').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Festival Technology
                            <span class="line_menu"></span>
                        </a>  
                     </li>
                     
                     <!-- <li class="nav-item">
                        <a href="index.html#timeline"  class="nav-link" onclick=" $('#timeline').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Timeline
                            <span class="line_menu"></span>
                        </a>  
                     </li> -->

                     <li class="nav-item">
                        <a href="index.html#news"  class="nav-link" onclick=" $('#news').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Informasi
                            <span class="line_menu"></span>
                        </a>  
                     </li>

                     <li class="nav-item">
                        <a href="index.html#contact"  class="nav-link" onclick=" $('#contact').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Hubungi
                            <span class="line_menu"></span>
                        </a>  
                     </li>
                     
                    <li class="nav-item">
                        <a href="register.html" class="nav-link">Daftar
                            <span class="line_menu"></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="login.html" class="nav-link">Masuk
                            <span class="line_menu"></span>
                        </a>
                    </li>
				</ul>
			</div>
		</div>
    </nav>
    
    <!-- End Navigation -->

    <!-- Start Header Section -->

    <header  id="header">
		<div class="container">
			<div class="row">
				<div class="col-md-4 bottom-animated">
                    <h1 class="headline">"Improving<br />
                        Indonesia's Economy<br />
                        Heading Industry 4.0"</h1>
                    <div class="call-btn">
                        <button class="btn btn-custom btn-transparent m-margin10" onclick=" $('#about').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Tentang</button>
                        <a href="register.html"><button class="animated pulse infinite btn btn-custom ">Daftar</button></a>
                    </div>	
				</div>
			</div>
		</div>
    </header>

    <!-- End Header Section -->

    <!-- Start About  Section  -->
    
    <section id="about">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ">
                    <h1 class="sec-title text-center bottom-animated">Tentang Vocomfest 2019</h1>
                    <hr class="title-line" />
 
                </div> 
            </div>

            <div class="row">
				<div class="col-sm-12 order-sm-2  col-md-7 order-md-1">
					<div class="video_box bottom-animated" data-toggle="modal" data-target="#videoTeaser">
                        <img  class="play_btn" src="assets/img/play_btn.png" alt="Video play button">
                    </div>
				</div>
				<div class=" col-sm-12 order-sm-1  col-md-5 order-md-2 content bottom-animated">
					<p>
                        <strong>VOCOMfest</strong> (Vocational Computer Festival) merupakan acara tahunan yang diselenggarakan oleh Himpunan Mahasiswa Komputer dan Sistem Informasi Sekolah Vokasi UGM
                    </p>
				</div>
			</div>
		</div>
    </section>

    <!-- End About  Section  -->

    <!-- Start  Competition Section  -->

    <section id="competition">
		<div class="container">
			<div class="row">
				<div class="col-md-4 offset-md-4 bottom-animated" >
					<h1 class="title text-center">Kompetisi</h1>	
                </div>
            </div>

           
            <div class="row">
                <div class="col-4 offset-4 bottom-animated">
                    <img class="animated heartBeat infinite mx-auto d-block text-center" src="assets/img/vocom_logo2.png" style="width:100%;height:100%;display:block;">  
                </div>
            </div>

             <!-- Start Card Competition-->
            <div class="row bottom-animated">

                <div class="col-xs-12 col-sm-12 col-md-4 ">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="assets/img/icpc.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center">International Collegiate Programming Contest</p>
                            <div class="text-center">
                                <a href="icpc.html"><button class="btn btn-custom btn-transparent">Selengkapnya</button></a>
                            </div>     
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="assets/img/madc.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center">Mobile Apps Development <br/>Competition</p>
                            <div class="text-center">
                                    <a href="madc.html"><button class="btn btn-custom btn-transparent">Selengkapnya</button></a>
                            </div>     
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="assets/img/wdc.png" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text text-center">Web Design<br/> Competition</p>
                            <div class="text-center">
                                    <a href="wdc.html"><button class="btn btn-custom btn-transparent">Selengkapnya</button></a>
                            </div>     
                        </div>
                    </div>
                </div>

            </div>
            <!-- End Card Competition-->
		</div>
    </section>

    <!-- End Competition Section  -->

    <!-- Start Festival Section  -->

    <section id="festival">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2" >
                    <h1 class="sec-title text-center bottom-animated">National Technology Festival</h1>
                    <hr class="title-line" />
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 left-box bottom-animated">
                    <p>National Technology Festival (NTF) adalah salah satu rangkaian acara pada VOCOMFEST 2019 yang menyelenggarakan festival dimana akan mengundang berbagai start up, komunitas, dan perusahaan yang telah bekerja sama dengan acara ini dengan mengangkat tema dari tema umum VOCOMFEST 2019 sendiri yaitu “Improving Indonesia’s Economy Heading to Industry 4.0”. </p>
                    <p class="mybtn">
                        <a href="ntf.html"><button class="btn btn-green">Selengkapnya</button></a>
                    </p> 

                    <p class="text-center btn-mobile">
                        <a href="ntf.html"><button class="btn btn-green">Selengkapnya</button></a>
                    </p> 
                </div>
                <div class="col-md-6 bottom-animated">
                   <img class="image-responsive" style="width:100%;"src="assets/img/training-seminar.jpg" alt="Festuval image">

                </div>
            </div>

           
		</div>
    </section>

    <!-- End Festival Section  -->
     
    <!-- Start Timeline Section  -->

    <!-- <section id="timeline">
		<div class="container">
			<div class="row">

				<div class="col-md-6 offset-md-6">
                        <div class="bottom-animated">
                            <h1 class="sec-title">Timeline</h1>
                            <p class="desc">Jangan sampai terlawatkan! Segera catat tanggalnya</p>
                            <hr class="title-line" style="width:100%;"><br>
                        </div>
					<div class="timeline-content bottom-animated">
                        <p><b>24 November 2018 – 11 Januari 2019</b> Registrasi Kompetisi</p>
                        <p><b>24 November 2018 – 11 Januari 2019</b> Registrasi Kompetisi</p>
                        <p><b>24 November 2018 – 11 Januari 2019</b> Registrasi Kompetisi</p>
                        <p><b>24 November 2018 – 11 Januari 2019</b> Registrasi Kompetisi</p>
                        <p><b>24 November 2018 – 11 Januari 2019</b> Registrasi Kompetisi</p>

					</div>
				</div>
			</div>
		</div>
    </section> -->
    
    <!-- End Timeline Section  -->


    <!-- Start  News Section  -->
    <section id="news">
		<div class="container">
                <div class="row">
                        <div class="col-md-12 ">
                            <h1 class="sec-title bottom-animated text-center">Berita Terbaru</h1>
                            <hr class="title-line" />
                        </div> 
                    </div>
   
			<div class="row">
				<div class="col-md-12 bottom-animated">
                    <section class="center slider">
                        <!-- news list-->
                        <div class="news-list">
                            <img src="assets/img/news-thumb.jpg">
                            <h1>Lorem ipsum, dolor sit amet consectetur.. </h1>
                            <small>16 September 2018</small>
                            <p class="text-center">
                                <a href="news.html"><button class="btn btn-green">Selengkapnya</button></a>
                            </p>
                        </div>

                        <div class="news-list">
                            <img src="assets/img/news-thumb.jpg">
                            <h1>Lorem ipsum, dolor sit amet consectetur.. </h1>
                            <small>16 September 2018</small>
                            <p class="text-center">
                                <a href="news.html"><button class="btn btn-green">Selengkapnya</button></a>
                            </p>
                        </div>

                        <div class="news-list">
                            <img src="assets/img/news-thumb.jpg">
                            <h1>Lorem ipsum, dolor sit amet consectetur.. </h1>
                            <small>16 September 2018</small>
                            <p class="text-center">
                                <a href="news.html"><button class="btn btn-green">Selengkapnya</button></a>
                            </p>
                        </div>

                        <div class="news-list">
                            <img src="assets/img/news-thumb.jpg">
                            <h1>Lorem ipsum, dolor sit amet consectetur.. </h1>
                            <small>16 September 2018</small>
                            <p class="text-center">
                                <a href="news.html"><button class="btn btn-green">Selengkapnya</button></a>
                            </p>
                        </div>


                      

                      

                        <!-- End of News List-->

                    </section>
                </div>
            </div>
                
		</div>
    </section>

    <!-- End News Section  -->

    <!-- start galleries section-->
    <section id="galleries">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="sec-title text-center bottom-animated">Galleries</h1>
                    <hr class="title-line" />
                </div> 
            </div>
    
            <div class="photo-grid bottom-animated">     
               <img src="assets/img/cat2.jpg" alt="">
               <img src="assets/img/training-seminar.jpg" alt="">
               <img src="assets/img/news-thumb.jpg" alt="">
               <img src="assets/img/cat1.jpg" alt="">
               <img src="assets/img/cat2.jpg" alt="">
               <img src="assets/img/training-seminar.jpg" alt="">
               <img src="assets/img/news-thumb.jpg" alt="">
               <img src="assets/img/cat1.jpg" alt="">
               <img src="assets/img/cat2.jpg" alt="">
               <img src="assets/img/training-seminar.jpg" alt="">
               <img src="assets/img/news-thumb.jpg" alt="">
               <img src="assets/img/cat1.jpg" alt="">
            </div>
        </div>
    </section>
    
    <!-- End of galleries Section  -->
      
    <!-- Start Sponsorship Section  -->

    <section id="sponsorship">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="sec-title text-center bottom-animated">Sponsorship</h1>
                    <hr class="title-line" />
                </div> 
            </div>
    
            <div class="row bottom-animated">
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <img class="logo mx-auto d-block" src="assets/img/telkomsel.png" alt="">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-3">
                    <img class="logo mx-auto d-block" src="assets/img/telkomsel.png" alt="">
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3">
                    <img class="logo mx-auto d-block" src="assets/img/telkomsel.png" alt="">
                </div>

                <div class="col-xs-6 col-sm-6 col-md-3">
                    <img class="logo mx-auto d-block" src="assets/img/telkomsel.png" alt="">
                </div>
             </div>
         </div>
    </section>

    <!-- End  Sponsorship Section  -->

    <!-- Start Contact Section  -->

    <section id="contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="sec-title text-center bottom-animated">Contact</h1>
                    <hr class="title-line" />
                </div> 
            </div>
            
            <div class="row">
                <div class=" col-xs-6 col-sm-4 col-md-3 offset-md-1 left-box bottom-animated">
                    <p> <i class="fas fa-map-marker-alt fa-lg icon-purple"></i>  Gedung Sekolah Vokasi UGM</p>
                    <p><i class="fas fa-envelope fa-lg icon-purple"></i> registration@vocomfest.com</p>
                    <p><i class="fas fa-phone fa-lg icon-purple"></i> (+62) 813-2726-8845</p>
                </div>

                <div class="col-xs-6 col-sm-8 col-md-8 bottom-animated">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.147316700502!2d110.37253361437632!3d-7.774199279276886!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a584a6eaf7cbb%3A0x294cd98559dc9c8c!2sSekolah+Vokasi+UGM!5e0!3m2!1sid!2sid!4v1547922619669" width="100%" height="300px" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>

         </div>
    </section>

    

    <footer id="footer">
        <p class="smaller wh text-center mb-0 mg-t-20">Made with <i class="fa fa-heart icon-red" aria-hidden="true"></i> in <span>Yogyakarta</span><br> by <span>Vocomfest Technical Support</span></p>
    </footer>
    
  <!-- Video Teaser  Modal -->
    <div class="modal fade" id="videoTeaser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Teaser Vocomfest 2019</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
                <iframe style="width:100%;min-height:400px;height:auto;" src="https://www.youtube.com/embed/nM0xDI5R50E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      
        </div>
    </div>
    </div>

    <!-- jQuery  -->
    <script src="{!! asset('assets/js/jquery-3.3.1.js')!!}"></script>
    <script src="{!! asset('assets/js/scrollreveal.min.js')!!}"></script>
    

    <script src="{!! asset('assets/vendor/slick/slick.js')!!}"></script>
    <!-- Popper.JS -->
    <script src="{!! asset('assets/js/popper.min.js')!!}"></script>
    <!-- Bootstrap JS -->
    <script src="{!! asset('assets/vendor/bootstrap/bootstrap.min.js')!!}"></script>
    <script src="{!! asset('assets/js/animatescroll.js')!!}"></script>
    <script src="{!! asset('assets/js/main.js')!!}"></script>

    
</body>

</html>