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
                        
                        @component('components.navigation_link',['href' =>route('homePage'),'menu_name' => 'Beranda'])
                        @endcomponent
    
                        @component('components.navigation_link',['href' =>route('homePage').'#about','menu_name' => 'Tentang'])
                        @endcomponent

                        @component('components.navigation_link',['href' =>route('homePage').'#competition','menu_name' => 'Kompetisi'])
                        @endcomponent
                        
                        @component('components.navigation_link',['href' =>route('homePage').'#festival','menu_name' => 'Festival Technology'])
                        @endcomponent

                        @component('components.navigation_link',['href' =>route('homePage').'#timeline','menu_name' => 'Timeline'])
                        @endcomponent
                        
                        @component('components.navigation_link',['href' =>route('homePage').'#news','menu_name' => 'Informasi'])
                        @endcomponent
                        
                        @component('components.navigation_link',['href' =>route('homePage').'#contact','menu_name' => 'Kontak'])
                        @endcomponent
    
                        {{-- checking login status--}}
                        @if(Auth::user())
                            @if(Auth::user()->role == 1)

                                @component('components.navigation_link',['href' =>route('admin.dashboard'),'menu_name' => 'Dashboard'])
                                @endcomponent
                    
                            @elseif(Auth::user()->role == 2)

                                @component('components.navigation_link',['href' =>route('madc.dashboard'),'menu_name' => 'Dashboard'])
                                @endcomponent
                            @else
                                @component('components.navigation_link',['href' =>route('wdc.dashboard'),'menu_name' => 'Dashboard'])
                                @endcomponent
                            @endif

                        {{-- not login status--}}
                        @else
                            @component('components.navigation_link',['href' =>route('register'),'menu_name' => 'Daftar'])
                            @endcomponent

                            @component('components.navigation_link',['href' =>route('login'),'menu_name' => 'Masuk'])
                            @endcomponent
                        @endif
                    </ul>
                </div>
            </div>
    </nav>
@endsection