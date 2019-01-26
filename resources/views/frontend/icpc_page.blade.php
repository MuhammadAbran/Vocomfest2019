@extends('frontend.layouts.competition_page')

@section('title','International Collegiate Programming')

@section('competition_name')
    <span>International Collegiate Programming </span><br/>Contest
@endsection

@section('competition_description')
    International Collegiate Programming Contest (ICPC atau ACM-ICPC) merupakan kompetisi pemrograman antar universitas yang diselenggarakan di bawah asuhan Association for Computing Machinery (ACM). Kompetisi ini terdiri dari tingkatan-tingkatan tertentu. Mulai dari provincial (wilayah dalam negara), regional (antar negara regional), dan world final.
@endsection

@section('rulebook_btn')
    <button class="btn btn-green">Download Rulebook</button>
@endsection
@section('competition_logo')
    <img class="logo" src="{{asset('assets/img/icpc.png')}}" alt="International Collegiate Programming">
@endsection


