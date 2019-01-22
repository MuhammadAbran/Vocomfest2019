@section('navigation')
    <nav class="navbar navbar-expand-lg fixed-top bottom-animated" id="myNav">
            <div class="container-fluid">
                <a href="index.html" class="navbar-brand">
                    <div class="logo-nav-white"></div>
                    <div class="logo-nav-mobile"></div>
                </a>
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="index.html#header"  class="nav-link" onclick=" $('#header').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Beranda
                                <span class="line_menu"></span>
                            </a>  
                         </li>
    
                         <li class="nav-item">
                            <a href="index.html#about"  class="nav-link" onclick=" $('#about').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Tentang
                                <span class="line_menu"></span>
                            </a>  
                         </li>
    
                         <li class="nav-item">
                            <a href="index.html#competition" class="nav-link" onclick=" $('#competition').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Kompetisi
                                <span class="line_menu"></span>
                            </a>  
                         </li>
    
                         <li class="nav-item">
                            <a href="index.html#festival" class="nav-link" onclick=" $('#festival').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Festival Technology
                                <span class="line_menu"></span>
                            </a>  
                         </li>
                         
                         <!-- <li class="nav-item">
                            <a href="index.html#timeline"  class="nav-link" onclick=" $('#timeline').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Timeline
                                <span class="line_menu"></span>
                            </a>  
                         </li> -->
    
                         <li class="nav-item">
                            <a href="index.html#news"  class="nav-link" onclick=" $('#news').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Informasi
                                <span class="line_menu"></span>
                            </a>  
                         </li>
    
                         <li class="nav-item">
                            <a href="index.html#contact"  class="nav-link" onclick=" $('#contact').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Hubungi
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
@endsection