@extends('layouts.app')

@section('title')
    Kelola {{ $pakaian->nama_pakaian }}
@endsection

@section('content')
@include('layouts.message')
    <div class="row">
        <div class="col-lg-4">
            <img class="shadow" width="100%" src="{{ asset('images') }}/{{ $pakaian->foto_path }}" alt="">
        </div>

        <div class="col-lg-8">
            <form action="{{ url('data-pakaian',$pakaian->id_pakaian) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="box">
                    <div class="box-header">
                        Detail Pakaian
                    </div>
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">Nama Pakaian</label>
                            <input type="text" name="nama_pakaian" class="form-control" value="{{ $pakaian->nama_pakaian }}">
                        </div>
                        <div class="form-group">
                            <label for="">Deskripsi</label>
                            <textarea name="deskripsi" id="" class="form-control" cols="30" rows="10">{{ $pakaian->deskripsi }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Estimasi Selesai (Hari)</label>
                            <input type="number" name="estimasi_selesai" class="form-control" value="{{ $pakaian->estimasi_selesai }}">
                        </div>
                        <div class="form-group">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control" value="{{ $pakaian->harga }}">
                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{ url('data-pakaian') }}" class="btn btn-danger">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
                        <th>Nama Ukuran</th>
                        <th>Deskripsi Ukuran</th>
                      
                    </tr>
                </thead>
                <tbody>
                  @foreach ($ukuran_pakaian as $item)
                  <tr>
                      <td>{{ $no++; }}</td>
                      <td>{{ $item->ukuran; }}</td>
                      <td>{{ $item->deskripsi_ukuran; }}</td>
                      
                      
                  </tr>
                  @include('DataPakaian.EditUkuran')
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('DataPakaian.TambahUkuran')
@endsection
