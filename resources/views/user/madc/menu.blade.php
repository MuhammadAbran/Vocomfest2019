
@section('menu')
<ul class="list-unstyled components">
    <li class="{{ URL::route('madc.dashboard') === URL::current() ? 'active' : '' }}">
        <a href="{{route('madc.dashboard')}}"><i class="fas fa-briefcase"></i> Dashboard</a>
    </li>
    @if(Auth::user()->verified())
        <li class="{{ URL::route('madc.team') === URL::current() ? 'active' : '' }}">
            <a href="{{route('madc.team')}}"><i class="fas fa-users"></i> Team Member</a>
        </li>
        <li class="{{ URL::route('madc.payment') === URL::current() ? 'active' : '' }}">
            <a  href="{{route('madc.payment')}}"><i class="fas fa-briefcase"></i>  Payment</a>
        </li>
        <li class="{{ URL::route('madc.submission') === URL::current() ? 'active' : '' }}">
            <a href="{{route('madc.submission')}}"><i class="fas fa-briefcase"></i> Submit</a>
        </li>
    @endif
</ul>
@endsection