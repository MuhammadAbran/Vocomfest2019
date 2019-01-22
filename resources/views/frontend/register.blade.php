@extends('frontend.layouts.main')

@extends('frontend.menu.page_navigation')

@section('title','Login')

@section('content')
    <section  id="register-page">
        <div class="overlay"></div>
		<div class="container">
            
            <div class="row  bottom-animated">
                <div class="col-lg-10 col-xl-10 mx-auto">
                    <div class="card card-signin flex-row my-5">
                    
                        <div class="card-body">
                        <h1 class="sec-title text-center">Register</h1>
                        <hr class="title-line" />
                        
                            <form class="form-signin">
                                <div class="row">
                                    <div class="col-md-5 offset-md-1">
                                        <div class="form-label-group">
                                            <input type="text" id="teamName" class="form-control" placeholder="Email address" required>
                                            <label for="teamName">Nama Tim</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="email" id="leaderEmail" class="form-control" placeholder="Email Ketua" required>
                                            <label for="leaderEmail">Email Ketua</label>
                                        </div>
                                        <div class="form-label-group">
                                            <input type="password" id="password" class="form-control" placeholder="Email address" required>
                                            <label for="password">Kata Sandi</label>
                                        </div>

                                        <div class="form-label-group">
                                            <input type="email" id="repeatPassword" class="form-control" placeholder="Email address" required>
                                            <label for="repeatPassword">Konfirmasi Kata Sandi</label>
                                        </div>              
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-label-group">
                                            <input type="email" id="instansiName" class="form-control" placeholder="Email address" required>
                                            <label for="instansiName">Nama Instansi</label>
                                        </div>
                                        
                                        <div class="form-label-group">
                                            <input type="email" id="leaderName" class="form-control" placeholder="Email address" required>
                                            <label for="leaderName">Alamat Instansi</label>
                                        </div>

                                        <div class="form-label-group">
                                            <input type="email" id="telp" class="form-control" placeholder="Email address" required>
                                            <label for="telp">Nama Ketua</label>
                                        </div>

                                        <div class="form-label-group">
                                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
                                            <label for="inputEmail">Nomor Telp</label>
                                        </div>
                        
                                    </div>
                                    <div class="col-md-10 offset-md-1">
                                        <button class="btn btn-lg btn-green btn-block text-uppercase" type="submit">Daftar</button>
                                        <a class="d-block text-center mt-2 small" href="login.html">Masuk</a>
                                        <hr class="my-4">
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
                
		</div>
    </section>
@endsection
