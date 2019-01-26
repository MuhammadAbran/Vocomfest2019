@extends('frontend.layouts.competition_page')

@section('title','National Festival Technology')

@section('competition_name')
    <span>National Festival Technology</span>
@endsection

@section('competition_description')
    National Technology Festival (NTF) adalah salah satu rangkaian acara pada VOCOMFEST 2019 yang menyelenggarakan festival dimana akan mengundang berbagai start up, komunitas, dan perusahaan yang telah bekerja sama dengan acara ini dengan mengangkat tema dari tema umum VOCOMFEST 2019 sendiri yaitu “Improving Indonesia’s Economy Heading to Industry 4.0”.
@endsection

@section('rulebook_btn')
    <a href="https://goo.gl/forms/Nu47DwjTLmjv84UU2" target="_blank"><button class="btn btn-green">Form Pendaftaran</button></a>
@endsection
@section('competition_logo')
    <img class="logo" src="{{asset('assets/img/ntf.png')}}" alt="National Technology Festival Vocomfest">
@endsection


