
@section('menu')
<ul class="list-unstyled components">
    <li>
        <a href="{{route('madc.dashboard')}}"><i class="fas fa-briefcase"></i> Dashboard</a>
    </li>
    <li>
        <a href="{{route('madc.team')}}"><i class="fas fa-users"></i> Team Member</a>
    </li>
    <li>
        <a href="{{route('madc.payment')}}"><i class="fas fa-briefcase"></i>  Payment</a>
    </li>
     <li>
        <a href="{{route('madc.submission')}}"><i class="fas fa-briefcase"></i> Submit</a>
    </li>
</ul>
@endsection