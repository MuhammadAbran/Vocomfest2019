@section('menu')
<ul class="list-unstyled components">
    <li>
        <a href="{{route('admin.dashboard')}}"><i class="fas fa-briefcase"></i> Dashboard</a>
    </li>
    <li class="active">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-briefcase"></i> Teams</a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a href="{{route('admin.madcTeams')}}">MADC Teams</a>
            </li>
            <li>
                <a href="{{route('admin.wdcTeams')}}">WDC Teams</a>
            </li>
        </ul>
    </li>
    <li class="{{ URL::route('admin.payments') === URL::current() ? 'active' : '' }}">
        <a href="{{route('admin.payments')}}"><i class="fas fa-briefcase"></i> Payments</a>
    </li>
    <li class="{{ URL::route('admin.submissions') === URL::current() ? 'active' : '' }}">
        <a href="{{route('admin.submissions')}}"><i class="fas fa-briefcase"></i> Submissions</a>
    </li>
    <li class="{{ URL::route('admin.galleries') === URL::current() ? 'active' : '' }}">
        <a href="{{route('admin.galleries')}}"><i class="fas fa-briefcase"></i> Sponsorship</a>
    </li>
     <li class="{{ URL::route('admin.news') === URL::current() ? 'active' : '' }}">
        <a href="{{route('admin.news')}}"><i class="fas fa-briefcase"></i> News</a>
    </li>
    <li class="{{ URL::route('admin.setting') === URL::current() ? 'active' : '' }}">
            <a href="{{route('admin.setting')}}"><i class="fas fa-briefcase"></i> Settings</a>
    </li>
</ul>
@endsection