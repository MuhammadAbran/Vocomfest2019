@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'Detail Tim')
@section('breadcrumbs')
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb bg-light"  style="color:#7386D5;margin: 1px 0 0 30px">
         <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
         <li class="breadcrumb-item"><a href="{{ route('admin.madcTeams') }}">MADC Teams</a></li>
         <li class="breadcrumb-item active" aria-current="page">{{ $tim->user->team_name }}</li>
      </ol>
     </nav>
@endsection
@section('content')
  <div class="box">
  <!-- Team Member  -->
  <div class="row">
     <h3>{{ $tim->instance_name }}</h3>

  </div>
  <div class="row" style="margin-top: -10px">
     <p>{{ $tim->instance_address }}</p>
  </div>
    <div class="row team">

      <!-- Team Member Box -->

      {{-- pakai component member_box($title, $avatar,$name,$email,$button) --}}
      @component('components.member_box')
        @slot('title', 'Ketua Tim')
        @slot('avatar',$tim->leader_avatar)
        @slot('name',$tim->leader_name)
        @slot('telp',$tim->leader_phone)
        @slot('email', $user->email)
        @slot('button')

        @endslot
      @endcomponent

      @component('components.member_box')
        @slot('title', 'Anggota #1')
        @slot('avatar', $tim->co_leader_avatar)
        @slot('name', $tim->co_leader_name)
        @slot('telp', $tim->co_leader_phone)
        @slot('email', $tim->co_leader_email)
        @slot('button')

        @endslot
      @endcomponent

      @component('components.member_box')
        @slot('title', 'Anggota #2')
        @slot('avatar',$tim->member_avatar)
        @slot('name',$tim->member_name)
        @slot('telp', $tim->member_phone)
        @slot('email', $tim->member_email)
        @slot('button')

        @endslot
      @endcomponent

    </div>
        <!-- End of Team member -->
  </div>
@endsection
