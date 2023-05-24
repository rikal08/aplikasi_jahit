@extends('layouts.app')

@section('title')
    Data Status
@endsection

@section('content')
    @include('layouts.message')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data Status Pemesanan</h3>
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
                        <th>Nama Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($status as $item)
                  <tr>
                      <td>{{ $no++; }}</td>
                      <td>{{ $item->status; }}</td>
                      
                      <td>
                        <a href="" data-toggle="modal" data-target="#edit{{ $item->id_status }}" class="btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                      </td>
                  </tr>
                  @include('DataStatus.Edit')
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
@include('DataStatus.Tambah')
@endsection
