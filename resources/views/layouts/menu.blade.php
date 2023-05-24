@if (Auth::user()->level==1)
<li><a href="{{ url('/') }}" class="btn btn-danger"> <span>Halaman Utama</span></a></li>
<li><a href="{{ url('home') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
<li><a href="{{ url('data-user') }}"><i class="fa fa-user"></i> <span>Data User</span></a></li>
<li><a href="{{ url('data-status') }}"><i class="fa fa-check"></i> <span>Data Status</span></a></li>
<li><a href="{{ url('data-pelanggan') }}"><i class="fa fa-users"></i> <span>Data Pelanggan</span></a></li>
<li><a href="{{ url('type-pakaian') }}"><i class="fa fa-file"></i> <span>Type Pakaian</span></a></li>
<li><a href="{{ url('ukuran') }}"><i class="fa fa-file"></i> <span>Data Ukuran</span></a></li>
<li><a href="{{ url('data-pakaian') }}"><i class="fa fa-file"></i> <span>Data Pakaian</span></a></li>
<li><a href="{{ url('data-pemesanan') }}"><i class="fa fa-list"></i> <span>Pemesanan</span></a></li>
<li class="header">Laporan</li>
<li><a href="{{ url('laporan-pemesanan') }}"><i class="fa fa-book"></i> <span>Laporan Pemesanan</span></a></li>   
@else
<li><a href="{{ url('/') }}" class="btn btn-danger"> <span>Halaman Utama</span></a></li>
<li><a href="{{ url('home') }}"><i class="fa fa-home"></i> <span>Home</span></a></li>
<li><a href="{{ url('data-status') }}"><i class="fa fa-check"></i> <span>Data Status</span></a></li>
<li><a href="{{ url('data-pelanggan') }}"><i class="fa fa-users"></i> <span>Data Pelanggan</span></a></li>
<li><a href="{{ url('type-pakaian') }}"><i class="fa fa-file"></i> <span>Type Pakaian</span></a></li>
<li><a href="{{ url('ukuran') }}"><i class="fa fa-file"></i> <span>Data Ukuran</span></a></li>
<li><a href="{{ url('data-pakaian') }}"><i class="fa fa-file"></i> <span>Data Pakaian</span></a></li>
<li><a href="{{ url('data-pemesanan') }}"><i class="fa fa-list"></i> <span>Pemesanan</span></a></li>
<li class="header">Laporan</li>
<li><a href="{{ url('laporan-pemesanan') }}"><i class="fa fa-book"></i> <span>Laporan Pemesanan</span></a></li>
@endif