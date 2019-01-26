@extends('user.layouts.main')

@extends('user.admin.menu')
@section('title', 'Team | MADC')



@section('content')
  <div class="box">
  <!-- Team Member  -->

    <div class="row team">
      <!-- Team Member Box -->

      {{-- pakai component member_box($title, $avatar,$name,$email,$button) --}}
      @component('components.member_box')
        @slot('title', 'Ketua Tim')
        @slot('avatar',$tim->leader_avatar)
        @slot('name',$tim->leader_name)
        @slot('email', $tim->leader_email)
        @slot('button')

        @endslot
      @endcomponent

      @component('components.member_box')
        @slot('title', 'Anggota #1')
        @slot('avatar',$tim->co_leader_avatar)
        @slot('name',$tim->co_leader_name)
        @slot('email', $tim->co_leader_email)
        @slot('button')

        @endslot
      @endcomponent

      @component('components.member_box')
        @slot('title', 'Anggota #2')
        @slot('avatar',$tim->member_1_avatar)
        @slot('name',$tim->member_1_name)
        @slot('email', $tim->member_1_email)
        @slot('button')
        
        @endslot
      @endcomponent

    </div>
        <!-- End of Team member -->
  </div>
@endsection
