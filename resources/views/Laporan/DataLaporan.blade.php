@extends('layouts.app')

@section('title')
    Laporan Data Pemesanan
@endsection

@section('content')
    @include('layouts.message')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Laporan Pemesanan</h3>
        </div>
        <div class="box-header">
            <a href="" data-toggle="modal" data-target="#cetak" class="btn-sm btn-danger"><i class="fa fa-plus"></i> Cetak Laporan</a>
        </div>
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
                
                  </tr>
                  
                  @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="cetak">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Cetak Laporan Pemesanan</h4>
                </div>
                <form action="{{ url('cetak-laporan') }}" method="POST">
                    @method('POST')
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">Pilih Tahun</label>
                            <select name="tahun" id="" class="form-control">
                                @for ($i = 2020; $i <= date('Y') ; $i++)
                                    <option value="{{ $i }}">{{ $i; }}</option>
                                @endfor
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Pilih Bulan</label>
                            <select name="bulan" id="" class="form-control">
                               <option value="01">Januari</option>
                               <option value="02">Februari</option>
                               <option value="03">Maret</option>
                               <option value="04">April</option>
                               <option value="05">Mei</option>
                               <option value="06">Juni</option>
                               <option value="07">Juli</option>
                               <option value="08">Agustus</option>
                               <option value="09">September</option>
                               <option value="10">Oktober</option>
                               <option value="11">November</option>
                               <option value="12">Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Cetak</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    
@endsection
