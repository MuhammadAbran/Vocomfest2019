@section('menu')
<ul class="list-unstyled components">
    <li class="{{ URL::route('wdc.dashboard') === URL::current() ? 'active' : '' }}">
        <a href="{{route('wdc.dashboard')}}"><i class="fas fa-briefcase"></i> Dashboard</a>
    </li>
    <li class="{{ URL::route('wdc.team') === URL::current() ? 'active' : '' }}">
        <a href="{{route('wdc.team')}}"><i class="fas fa-users"></i> Team Member</a>
    </li>
    <li class="{{ URL::route('wdc.payment') === URL::current() ? 'active' : '' }}">
        <a href="{{route('wdc.payment')}}"><i class="fas fa-briefcase"></i>  Payment</a>
    </li>
     <li class="{{ URL::route('wdc.submssion') === URL::current() ? 'active' : '' }}">
        <a href="{{route('wdc.submission')}}"><i class="fas fa-briefcase"></i> Submit</a>
    </li>
</ul>
@endsection