@extends('frontend.layouts.main')

@extends('frontend.menu.page_navigation')

@section('title',' 404 Page')

@section('content')
    
    <section  id="register-page">
        <div class="overlay"></div>
		<div class="container">
            
            <div class="row  bottom-animated">
                <div class="col-lg-8 col-xl-8 mx-auto">
                    <div class="card card-signin flex-row my-5">
                    
                        <div class="card-body">
                        <h1 class="sec-title text-center">ERROR 404</h1>
                        <hr class="title-line" />
                            <p class="text-center">Maaf, Halaman yang anda cari tidak tersedia</p>
                            <p class="text-center"><button class="btn btn-warning" onclick="window.history.back();">Go Back</button></p>
                        </div>
                    </div>

                </div>
            </div>
                
		</div>
    </section>
@endsection
