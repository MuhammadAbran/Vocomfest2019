@extends('frontend.layouts.main')

@extends('frontend.menu.page_navigation')

@section('title','Register Page')

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
                        
                            <form  id="madc-form" class="form-signin" action="{{ route('register') }}" method="post">
                                <div class="row">
                                    <div class="col-md-5 offset-md-1">

                                        <div class="form-group">
                                            <label for="sel1">Pilih Lomba</label>
                                            <select class="form-control" id="sel1" name="role">
                                                <option value="1">Web Design Competition</option>
                                                <option value="2">Mobile Apps Development Competition</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="teamName">Nama Tim</label>
                                            <input type="text" class="form-control" id="teamName" placeholder="Nama Tim" name="team_name">
                                        </div>

                                       <div class="form-group">
                                            <label for="leaderEmail">Email</label>
                                            <input type="email" class="form-control" id="leaderEmail"  placeholder="Email" name="leader_email">
                                        </div>

                                        <div class="form-group">
                                            <label for="password">Kata Sandi</label>
                                            <input type="password" class="form-control" id="password" placeholder="Kata Sandi" name="password">
                                        </div>

                                       
                                         <div class="form-group">
                                            <label for="instanceName">Nama Instansi</label>
                                            <input type="text" class="form-control" id="instanceName" placeholder="Nama Instansi" name="instance_name">
                                        </div>

                                       <div class="form-group">
                                            <label for="instanceAddress">Alamat Instansi</label>
                                            <input type="text" class="form-control"  placeholder="Alamat Instansi" name="instance_address">
                                        </div>
                                        
                                    </div>

                                    <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="leaderName">Nama Ketua</label>
                                            <input type="text" class="form-control" id="leaderName"  placeholder="Nama Ketua" name="leader_name">
                                        </div>

                                        <div class="form-group">
                                            <label for="leaderPhone">No Hp</label>
                                            <input type="text" class="form-control" id="leaderPhone"  placeholder="No Hp Ketua" name="leader_phone">
                                        </div>

                                        <div class="form-group">
                                            <label for="member1Name">Nama Anggota #1</label>
                                            <input type="text" class="form-control" id="member1Name"  placeholder="Nama Anggota #1" name="co_leader_name">
                                        </div>

                                        <div class="form-group">
                                            <label for="member1Email">Email</label>
                                            <input type="text" class="form-control" id="member1Email" placeholder="Email Anggota #1" name="co_leader_email">
                                        </div>

                                        <div class="form-group">
                                            <label for="member1Phone">No hp</label>
                                            <input type="text" class="form-control" id="member1Phone" placeholder="Nomor Hp Anggota #1" name="co_leader_phone">
                                        </div>

                                        <div class="form-group">
                                            <label for="member2Name">Nama Anggota #2</label>
                                            <input type="text" class="form-control" id="member2Name" placeholder="Nama Anggota #2" name="member_1_name">
                                        </div>

                                        <div class="form-group">
                                            <label for="member2Email">Email</label>
                                            <input type="text" class="form-control" id="member2Email" placeholder="Email Anggota #1" name="member_1_email">
                                        </div>

                                        <div class="form-group">
                                            <label for="member2Phone">No Hp</label>
                                            <input type="text" class="form-control" id="member2Phone"  placeholder="No Hp Anggota #2" name="member_1_phone">
                                        </div>

                                        <input type="hidden" name="progress" value="0">
                                       
                                    </div>
                                    <div class="col-md-10 offset-md-1">
                                        <button class="btn btn-lg btn-green btn-block text-uppercase" type="submit">Daftar</button>
                                    <a class="d-block text-center mt-2 small" href="{{route('login')}}">Masuk</a>
                                        <hr class="my-4">
                                    </div>

                                </div>
                                @csrf
                            </form>
                        </div>
                    </div>

                </div>
            </div>
                
		</div>
    </section>
@endsection
