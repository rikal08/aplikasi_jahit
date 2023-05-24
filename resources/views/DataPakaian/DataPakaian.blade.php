@extends('layouts.app')

@section('title')
    Data Pakaian
@endsection

@section('content')
    @include('layouts.message')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Pakaian</h3>
        </div>
        <div class="box-header">
            <a href="" data-toggle="modal" data-target="#tambah" class="btn-sm btn-primary"><i class="fa fa-plus"></i> Tambah Data</a>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Foto</th>
                        <th>Type Pakaian</th>
                        <th>Nama Pakaian</th>
                        <th>Deskripsi</th>
                        <th>Estimasi Selesai</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($pakaian as $item)
                  <tr>
                      <td>{{ $no++; }}</td>
                      <td><img src="{{ asset('images') }}/{{ $item->foto_path }}" alt="" width="50px"></td>
                      <td>{{ $item->nama_type }}</td>
                      <td>{{ $item->nama_pakaian }}</td>
                      <td>{{ $item->deskripsi }}</td>
                      <td>{{ $item->estimasi_selesai }} Hari</td>
                      <td>Rp. {{ number_format($item->harga) }}</td>
                      <td>
                        <a href="" data-toggle="modal" data-target="#hapus{{ $item->id_pakaian }}" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a> <br><br>
                        <a href="{{ url('data-pakaian',$item->id_pakaian) }}" class="btn-sm btn-primary">Kelola</a>
                      </td>
                  </tr>
                  @include('DataPakaian.Hapus')
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
@include('DataPakaian.Tambah')
@endsection
