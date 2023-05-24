<li><a href="{{ url('/') }}">Home</a></li>
<li><a href="{{ url('/') }}#produk">Produk</a></li>
<li><a href="{{ url('lacak-pemesanan') }}">Lacak Pemesanan</a></li>

@guest

<li><a href="{{ route('login') }}">Login</a></li> 
<li><a href="{{ url('daftar') }}">Daftar</a></li> 
@else
@if (Auth::user()->level==1)
<li><a href="{{ url('/home') }}"><i class="fa fa-user"></i> Dashboard Admin</a></li>
@else
<li><a href="{{ url('/akun-saya') }}"><i class="fa fa-user"></i> Akun Saya</a></li>
@endif

<li><a href="{{ url('/pemesanan-saya') }}"> Pemesanan Saya</a></li>
<li><a href="{{ route('logout') }}"
    onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Logout</a></li> 
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

@endif
