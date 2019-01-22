<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>@yield('title') - Vocomfest 2019</title>

    <link rel="shortcut icon" type="image/png" href="{!! asset('assets/img/logo_v.png') !!}"/>

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

    @yield('content')

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
    <script src="{!! asset('assets/js/jquery-3.3.1.js') !!}"></script>
    <script src="{!! asset('assets/js/scrollreveal.min.js') !!}"></script>
    

    <script src="{!! asset('assets/vendor/slick/slick.js') !!}"></script>
    <!-- Popper.JS -->
    <script src="{!! asset('assets/js/popper.min.js') !!}"></script>
    <!-- Bootstrap JS -->
    <script src="{!! asset('assets/vendor/bootstrap/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('assets/js/animatescroll.js') !!}"></script>
    <script src="{!! asset('assets/js/main.js') !!}"></script>

    
</body>

</html>