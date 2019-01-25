@section('navigation')
    <nav class="navbar navbar-expand-lg fixed-top bottom-animated" id="myNav">
            <div class="container-fluid">
                <a href="{{route('homePage')}}" class="navbar-brand">
                    <div class="logo-nav-white"></div>
                    <div class="logo-nav-mobile"></div>
                </a>
                <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#mynavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                        <a href="{{route('homePage')}}#header"  class="nav-link" onclick=" $('#header').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Beranda
                                <span class="line_menu"></span>
                            </a>  
                         </li>
    
                         <li class="nav-item">
                            <a href="{{route('homePage')}}#about"  class="nav-link" onclick=" $('#about').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Tentang
                                <span class="line_menu"></span>
                            </a>  
                         </li>
    
                         <li class="nav-item">
                            <a href="{{route('homePage')}}#competition" class="nav-link" onclick=" $('#competition').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Kompetisi
                                <span class="line_menu"></span>
                            </a>  
                         </li>
    
                         <li class="nav-item">
                            <a href="{{route('homePage')}}#festival" class="nav-link" onclick=" $('#festival').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Festival Technology
                                <span class="line_menu"></span>
                            </a>  
                         </li>
                         
                         <!-- <li class="nav-item">
                            <a href="index.html#timeline"  class="nav-link" onclick=" $('#timeline').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Timeline
                                <span class="line_menu"></span>
                            </a>  
                         </li> -->
    
                         <li class="nav-item">
                            <a href="{{route('homePage')}}#news"  class="nav-link" onclick=" $('#news').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Informasi
                                <span class="line_menu"></span>
                            </a>  
                         </li>
    
                         <li class="nav-item">
                            <a href="{{route('homePage')}}#contact"  class="nav-link" onclick=" $('#contact').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Hubungi
                                <span class="line_menu"></span>
                            </a>  
                         </li>
                         
                         @if(Auth::user())
                         @if(Auth::user()->role == 1)
                             <li class="nav-item">
                                 <a href="{{route('admin.dashboard')}}" class="nav-link">Dashboard
                                     <span class="line_menu"></span>
                                 </a>
                             </li>
                         @elseif(Auth::user()->role == 2)
                             <li class="nav-item">
                                 <a href="{{route('madc.dashboard')}}" class="nav-link">Dashboard
                                     <span class="line_menu"></span>
                                 </a>
                             </li>
                         @else
                             <li class="nav-item">
                                 <a href="{{route('wdc.dashboard')}}" class="nav-link">Dashboard
                                     <span class="line_menu"></span>
                                 </a>
                             </li>
                         @endif
 
                     
                      @else
                         <li class="nav-item">
                             <a href="{{route('register')}}" class="nav-link">Daftar
                                 <span class="line_menu"></span>
                             </a>
                         </li>
 
                         <li class="nav-item">
                         <a href="{{route('login')}}"class="nav-link">Masuk
                                 <span class="line_menu"></span>
                             </a>
                         </li>
                     @endif
                    </ul>
                </div>
            </div>
    </nav>
@endsection