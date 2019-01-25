@extends('frontend.layouts.main')

@extends('frontend.menu.page_navigation')

@section('content')

    <section  id="competition-page">
        <div class="overlay"></div>
        <div class="container">

            <div class="row">
                <div class="col-md-6 left-animated">

                    <h1 class="title"> @yield('competition_name') </h1>
                    <p class="content"> @yield('competition_description') </p>
                    <p> @yield('rulebook_btn') </p>
                </div>

                <div class="col-md-4 offset-md-1 right-animated">
                    @yield('competition_logo')
                </div>
            </div>
        </div>
    </section>

@endsection