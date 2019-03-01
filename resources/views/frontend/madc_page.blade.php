@extends('frontend.layouts.competition_page')

@section('title','Mobile Apps Development Competition')

@section('competition_name')
    <span>Mobile Apps Development</span> Competition
@endsection

@section('competition_description')
    Mobile Apps Development Competition (MADC) merupakan kompetisi pengembangan aplikasi berbasis platform Android. MADC Vocomfest 2019 bertemakan “Raise up indonesia’s Small Industries with Marketplace”.
    Dengan tema tersebut diharapkan dapat memberikan dampak pada perekonomian di Indonesia khususnya untuk mengangkat UMKM di Indonesia.Selain itu diharapkan juga para developer di Indonesia mendapatkan ruang untuk memberikan kontribusi nyatanya pada Indonesia.
    <br/>
<div >
        <h3>Hadiah</h3>
        
            <p>Juara 1 <br/> Rp 5000.000,00</p>
            <p>Juara 2 <br/> Rp 3000.000,00</p>
            <p>Juara 3 <br/> Rp 1500.000,00</p>
            <p>Best App <br/> Rp 500.000,00</p>
        
</div>
@endsection

@section('rulebook_btn')
    <button class="btn btn-green">Download Rulebook</button>
@endsection
@section('competition_logo')
    <img class="logo" src="{{asset('assets/img/madc.png')}}" alt="Mobile Apps Development Competition">
@endsection


