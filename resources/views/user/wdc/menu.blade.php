@section('menu')
<ul class="list-unstyled components">
    <li class="{{ URL::route('wdc.dashboard') === URL::current() ? 'active' : '' }}">
        <a href="{{route('wdc.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    </li>

    {{-- hidden email verification --}}
    {{-- @if(Auth::user()->verified()) --}}
        <li class="{{ URL::route('wdc.team') === URL::current() ? 'active' : '' }}">
            <a href="{{route('wdc.team')}}"><i class="fas fa-users"></i> Anggota Tim</a>
        </li>
        <li class="{{ URL::route('wdc.payment') === URL::current() ? 'active' : '' }}">
            <a href="{{route('wdc.payment')}}"><i class="fas fa-money-bill-alt"></i>  Pembayaran</a>
        </li>
        <li class="{{ URL::route('wdc.submission') === URL::current() ? 'active' : '' }}">
            <a href="{{route('wdc.submission')}}"><i class="fas fa-file"></i> &nbsp; Submit Berkas</a>
        </li>
    {{-- @endif --}}

</ul>
@endsection
