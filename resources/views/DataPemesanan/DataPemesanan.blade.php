@extends('layouts.app')

@section('title')
    Data Pemesanan
@endsection

@section('content')
    @include('layouts.message')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pemesanan</h3>
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
                  @foreach ($pemesanan as $item)
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
@endsection
