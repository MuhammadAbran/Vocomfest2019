
@section('menu')
<ul class="list-unstyled components">
    <li class="{{ URL::route('madc.dashboard') === URL::current() ? 'active' : '' }}">
        <a href="{{route('madc.dashboard')}}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
    </li>

    {{-- hidden email verification --}}
    {{-- @if(Auth::user()->verified()) --}}
        <li class="{{ URL::route('madc.team') === URL::current() ? 'active' : '' }}">
            <a href="{{route('madc.team')}}"><i class="fas fa-users"></i> Anggota Tim</a>
        </li>
        <li class="{{ URL::route('madc.payment') === URL::current() ? 'active' : '' }}">
            <a  href="{{route('madc.payment')}}"><i class="fas fa-money-bill-alt"></i>  Pembayaran</a>
        </li>
        <li class="{{ URL::route('madc.submission') === URL::current() ? 'active' : '' }}">
            <a href="{{route('madc.submission')}}"><i class="fas fa-file"></i> &nbsp; Submit Berkas</a>
        </li>
    {{-- @endif --}}
</ul>
@endsection