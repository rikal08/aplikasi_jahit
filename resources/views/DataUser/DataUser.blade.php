@extends('layouts.app')

@section('title')
    Data Users
@endsection

@section('content')
    @include('layouts.message')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Data User</h3>
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
                        <th>Nama</th>
                        <th>Telepon</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach ($user as $item)
                  <tr>
                      <td>{{ $no++; }}</td>
                      <td>{{ $item->name; }}</td>
                      <td>{{ $item->telepon; }}</td>
                      <td>{{ $item->email; }}</td>
                      <td>{{ $item->alamat; }}</td>
                      <td>
                        @if ($item->level==1)
                            <span class="badge bg-red">Pemilik</span>
                        @else
                        <span class="badge bg-blue">Karyawan</span>
                        @endif
                      </td>
                      <td>
                        <a href="" data-toggle="modal" data-target="#hapus{{ $item->id }}" class="btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                        <a href="" data-toggle="modal" data-target="#edit{{ $item->id }}" class="btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                      </td>
                  </tr>
                  @include('DataUser.Hapus')
                  @include('DataUser.Edit')
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
@include('DataUser.Tambah')
@endsection
