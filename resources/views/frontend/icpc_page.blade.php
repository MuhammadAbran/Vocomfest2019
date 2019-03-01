@extends('frontend.layouts.competition_page')

@section('title','International Collegiate Programming')

@section('competition_name')
    <span>International Collegiate Programming </span><br/>Contest
@endsection

@section('competition_description')
    International Collegiate Programming Contest (ICPC atau ACM-ICPC) merupakan kompetisi pemrograman antar universitas yang diselenggarakan di bawah asuhan Association for Computing Machinery (ACM). Kompetisi ini terdiri dari tingkatan-tingkatan tertentu. Mulai dari provincial (wilayah dalam negara), regional (antar negara regional), dan world final.
<br/>
<div >
        <h3>Hadiah</h3>
        
            <p>Juara 1 <br/> Rp 5000.000,00</p>
            <p>Juara 2 <br/> Rp 3000.000,00</p>
            <p>Juara 3 <br/> Rp 1500.000,00</p>
        
</div>
    @endsection

@section('rulebook_btn')
    <button class="btn btn-green">Download Rulebook</button>
@endsection
@section('competition_logo')
    <img class="logo" src="{{asset('assets/img/icpc.png')}}" alt="International Collegiate Programming">
@endsection


