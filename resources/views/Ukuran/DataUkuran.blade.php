@extends('layouts.app')

@section('title')
    Data Ukuran
@endsection

@section('content')
    @include('layouts.message')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Ukuran</h3>
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
                        <th>Type Pakaian</th>
                        <th>Ukuran</th>
                        <th>Deskripsi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($ukuran as $item)
                  <tr>
                      <td>{{ $no++; }}</td>
                      <td>{{ $item->nama_type; }}</td>
                      <td>{{ $item->ukuran; }}</td>
                      <td>{{ $item->deskripsi_ukuran; }}</td>
                      
                      <td>
                        <a href="" data-toggle="modal" data-target="#edit{{ $item->id_ukuran }}" class="btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                      </td>
                  </tr>
                  @include('Ukuran.Edit')
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
@include('Ukuran.Tambah')
@endsection
