@section('menu')
<ul class="list-unstyled components">
    <li>
        <a href="{{route('admin.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    </li>
    <li class="{{ URL::route('admin.madcTeams') === URL::current() ? 'active' : '' }} {{ URL::route('admin.wdcTeams') === URL::current() ? 'active' : '' }}">
        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"> <i class="fas fa-users"></i> Teams</a>
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
        <a href="{{route('admin.payments')}}"><i class="fas fa-money-bill-alt"></i> Payments</a>
    </li>
    <li class="{{ URL::route('admin.submissions') === URL::current() ? 'active' : '' }}">
        <a href="{{route('admin.submissions')}}"><i class="fas fa-file"></i> &nbsp; Submissions</a>
    </li>
    <li class="{{ URL::route('admin.galleries') === URL::current() ? 'active' : '' }}">
        <a href="{{route('admin.galleries')}}"><i class="fas fa-money-check"></i> Sponsorship</a>
    </li>
     <li class="{{ URL::route('admin.news') === URL::current() ? 'active' : '' }}">
        <a href="{{route('admin.news')}}"><i class="fas fa-newspaper"></i> News</a>
    </li>
    <li class="{{ URL::route('admin.setting') === URL::current() ? 'active' : '' }}">
            <a href="{{route('admin.setting')}}"><i class="fas fa-cog"></i> Settings</a>
    </li>
</ul>
@endsection