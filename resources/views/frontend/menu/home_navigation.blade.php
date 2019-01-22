@section('navigation')

    <nav class="navbar navbar-expand-lg fixed-top bottom-animated" id="myNav">
		<div class="container-fluid">
        <a href="{{route('homePage')}}" class="navbar-brand">
                <div class="logo-nav"></div>
                <div class="logo-nav-mobile"></div>
			</a>
			<button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#mynavbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="mynavbar">
				<ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" onclick=" $('#header').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Beranda
                            <span class="line_menu"></span>
                        </a>  
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" onclick=" $('#about').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Tentang
                            <span class="line_menu"></span>
                        </a>  
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" onclick=" $('#competition').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Kompetisi
                            <span class="line_menu"></span>
                        </a>  
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" onclick=" $('#festival').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Festival Technology
                            <span class="line_menu"></span>
                        </a>  
                     </li>
                     
                     <!-- <li class="nav-item">
                        <a href="index.html#timeline"  class="nav-link" onclick=" $('#timeline').animatescroll({scrollSpeed:3000,easing:'easeInOutBack'});">Timeline
                            <span class="line_menu"></span>
                        </a>  
                     </li> -->

                     <li class="nav-item">
                        <a class="nav-link" onclick=" $('#news').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Informasi
                            <span class="line_menu"></span>
                        </a>  
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" onclick=" $('#contact').animatescroll({scrollSpeed:1500,easing:'easeInOutBack'});">Hubungi
                            <span class="line_menu"></span>
                        </a>  
                     </li>
                     
                    <li class="nav-item">
                        <a class="nav-link">Daftar
                            <span class="line_menu"></span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link">Masuk
                            <span class="line_menu"></span>
                        </a>
                    </li>
				</ul>
			</div>
		</div>
    </nav>
@endsection