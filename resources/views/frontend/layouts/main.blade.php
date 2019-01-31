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

    <link rel="stylesheet" href="{!! asset('assets/vendor/lightcase/css/lightcase.css') !!}" >
    
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
    
    <!-- Navigation -->
    @yield('navigation')
  

      <!-- Content -->
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
    <script src="{!! asset('assets/vendor/lightcase/js/lightcase.js') !!}"></script>
    <!-- Popper.JS -->
    <script src="{!! asset('assets/js/popper.min.js') !!}"></script>
    <!-- Bootstrap JS -->
    <script src="{!! asset('assets/vendor/bootstrap/bootstrap.min.js') !!}"></script>
    <script src="{!! asset('assets/js/animatescroll.js') !!}"></script>
    <script src="{!! asset('assets/js/main.js') !!}"></script>

    <script>
        $('.center').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
        {
        breakpoint: 768,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        },
        {
        breakpoint: 480,
        settings: {
            arrows: false,
            centerMode: true,
            centerPadding: '40px',
            slidesToShow: 1
        }
        }
    ]
});

window.sr = ScrollReveal({reset:true});

sr.reveal('.bottom-animated', {
    duration: 2000,
    origin:'bottom',
    distance:'200px'
});
sr.reveal('.top-animated', {
    duration: 2000,
    origin:'top',
    distance:'200px'
});

sr.reveal('.left-animated', {
    duration: 2000,
    origin:'left',
    distance:'200px'
});
sr.reveal('.right-animated', {
    duration: 2000,
    origin:'right',
    distance:'200px'
});

    </script>

    
</body>

</html>