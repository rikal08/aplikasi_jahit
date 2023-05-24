@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
    @include('layouts.message')
<div class="row">
    <div class="col-lg-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pemesanan Hari Ini</h3>
            </div>
            {{-- <div class="box-header">
                <a href="" data-toggle="modal" data-target="#tambah" class="btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
            </div> --}}
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Nama Pelanggan</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($pemesanan_today as $item)
                      <tr>
                          <td>{{ $no++; }}</td>
                          <td>{{ $item->no_transaksi; }}</td>
                          <td>{{ $item->created_at; }}</td>
                          <td>{{ $item->name; }}</td>
                          <td>{{ number_format($item->total_harga) }}</td>
                          <td>{{ $item->status }}</td>
                          
                          <td>
                            <a href="{{ url('data-pemesanan',$item->no_transaksi) }}" class="btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                          </td>
                      </tr>
                      
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pemesanan Menunggu Pembayaran</h3>
            </div>
            {{-- <div class="box-header">
                <a href="" data-toggle="modal" data-target="#tambah" class="btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
            </div> --}}
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example3" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Nama Pelanggan</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($pemesanan_bayar as $item)
                      <tr>
                          <td>{{ $no++; }}</td>
                          <td>{{ $item->no_transaksi; }}</td>
                          <td>{{ $item->created_at; }}</td>
                          <td>{{ $item->name; }}</td>
                          <td>{{ number_format($item->total_harga) }}</td>
                          <td>{{ $item->status }}</td>
                          
                          <td>
                            <a href="{{ url('data-pemesanan',$item->no_transaksi) }}" class="btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                          </td>
                      </tr>
                      
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pemesanan Dalam Proses Pengerjaan</h3>
            </div>
            {{-- <div class="box-header">
                <a href="" data-toggle="modal" data-target="#tambah" class="btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
            </div> --}}
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example4" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Nama Pelanggan</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($pemesanan_proses as $item)
                      <tr>
                          <td>{{ $no++; }}</td>
                          <td>{{ $item->no_transaksi; }}</td>
                          <td>{{ $item->created_at; }}</td>
                          <td>{{ $item->name; }}</td>
                          <td>{{ number_format($item->total_harga) }}</td>
                          <td>{{ $item->status }}</td>
                          
                          <td>
                            <a href="{{ url('data-pemesanan',$item->no_transaksi) }}" class="btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                          </td>
                      </tr>
                      
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Pemesanan Selesai</h3>
            </div>
            {{-- <div class="box-header">
                <a href="" data-toggle="modal" data-target="#tambah" class="btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
            </div> --}}
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example4" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Transaksi</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Nama Pelanggan</th>
                            <th>Total Harga</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($pemesanan_selesai as $item)
                      <tr>
                          <td>{{ $no++; }}</td>
                          <td>{{ $item->no_transaksi; }}</td>
                          <td>{{ $item->created_at; }}</td>
                          <td>{{ $item->name; }}</td>
                          <td>{{ number_format($item->total_harga) }}</td>
                          <td>{{ $item->status }}</td>
                          
                          <td>
                            <a href="{{ url('data-pemesanan',$item->no_transaksi) }}" class="btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                          </td>
                      </tr>
                      
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
