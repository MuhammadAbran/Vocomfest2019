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

                    {{-- using component navigation  --}}
                    @component('components.navigation_animate',['section_id' =>'header','menu_name' => 'Beranda'])
                    @endcomponent

                    @component('components.navigation_animate',['section_id' =>'about','menu_name' => 'Tentang'])
                    @endcomponent

                    @component('components.navigation_animate',['section_id' =>'competition','menu_name' => 'Kompetisi'])
                    @endcomponent

                    @component('components.navigation_animate',['section_id' =>'festival','menu_name' => 'Festival Technology'])
                    @endcomponent

                    @component('components.navigation_animate',['section_id' =>'news','menu_name' => 'Informasi'])
                    @endcomponent

                    @component('components.navigation_animate',['section_id' =>'contact','menu_name' => 'Hubungi'])
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
                        @component('components.navigation_link',['href' =>route('register'),'menu_name' => 'Register'])
                        @endcomponent

                        @component('components.navigation_link',['href' =>route('login'),'menu_name' => 'Login'])
                        @endcomponent
                    @endif
				</ul>
			</div>
		</div>
    </nav>
@endsection