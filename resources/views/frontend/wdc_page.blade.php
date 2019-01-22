@extends('frontend.layouts.main')

@extends('frontend.menu.page_navigation')

@section('title','Login')

@section('content')
    <section  id="competition-page">
        <div class="overlay"></div>
		<div class="container">

			<div class="row">
                <div class="col-md-6 left-animated">
                    <h1 class="title"><span>Web Design </span><br/>Competition</h1>
                    <p class="content">Web Design Competition merupakan rangkaian acara pertama dari VOCOMFEST 2019, WDC merupakan kompetisi membuat design Website.                      
                    </p>
                    <p class="content">
                            WDC ditujukan untuk siswa SMA/SMK/MA sederajat yang sudah bisa maupun masih belajar dalam mengembangkan website. Peserta berkompetisi dalam tim yang beranggotakan maksimal 3 orang. WDC ini dilaksanakan dalam 2 babak, yaitu babak penyisihan design dan babak final.
                    </p>
                    <p> <strong>TEMA : “Developing Small Industries Through Marketplace”</strong></p>
                    <p><button class="btn btn-green">Download Rulebook</button></p>
                </div>

                <div class="col-md-4 offset-md-1 right-animated">
                    <img class="logo" src="{!! asset('assets/img/wdc.png')!!}" alt="Web Design
                    Competition">
                </div>
            </div>
		</div>
    </section>
@endsection