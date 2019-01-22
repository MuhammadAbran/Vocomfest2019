@extends('frontend.layouts.main')

@extends('frontend.menu.page_navigation')

@section('title','Login')

@section('content')

    <section  id="competition-page">
        <div class="overlay"></div>
        <div class="container">

            <div class="row">
                <div class="col-md-6 left-animated">
                    <h1 class="title"><span>International Collegiate  Programming </span><br/>Contest</h1>
                    <p class="content">National Technology Festival (NTF) adalah salah satu rangkaian acara pada VOCOMFEST 2019 yang menyelenggarakan festival dimana akan mengundang berbagai start up, komunitas, dan perusahaan yang telah bekerja sama dengan acara ini dengan mengangkat tema dari tema umum VOCOMFEST 2019 sendiri yaitu “Improving Indonesia’s Economy Heading to Industry 4.0”.
                        </p>               
                    <p><button class="btn btn-green">Download Rulebook</button></p>
                </div>

                <div class="col-md-4 offset-md-1 right-animated">
                    <img class="logo" src="assets/img/ntf.png" alt="Logo National Technology Festival">
                </div>
            </div>
        </div>
    </section>

@endsection

