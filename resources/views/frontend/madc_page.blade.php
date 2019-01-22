@extends('frontend.layouts.main')

@extends('frontend.menu.page_navigation')

@section('title','Login')

@section('content')
<section  id="competition-page">
    <div class="overlay"></div>
    <div class="container">

        <div class="row">
            <div class="col-md-6 left-animated">
                <h1 class="title"><span>Mobile Apps Development </span><br/>Competition</h1>
                <p class="content">Mobile Apps Development Competition (MADC) merupakan kompetisi pengembangan aplikasi berbasis platform Android. MADC Vocomfest 2019 bertemakan “Raise up indonesia’s Small Industries with Marketplace”.</p>
                <p class="content">
                        Dengan tema tersebut diharapkan dapat memberikan dampak pada perekonomian di Indonesia khususnya untuk mengangkat UMKM di Indonesia.Selain itu diharapkan juga para developer di Indonesia mendapatkan ruang untuk memberikan kontribusi nyatanya pada Indonesia. 
                </p>
       
               
                <p><button class="btn btn-green">Download Rulebook</button></p>
            </div>

            <div class="col-md-4 offset-md-1 right-animated">
                <img class="logo" src="{!! asset('assets/img/madc.png')!!}" alt="Logo WDC">
            </div>
        </div>
    </div>
</section>
@endsection
