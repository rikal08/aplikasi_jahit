@extends('layouts.app')

@section('title')
    Detail Pemesanan #{{ $pemesanan->no_transaksi }}
 @endsection

 @section('content')
 <div class="row">
    <div class="col-lg-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Detail Pemesana</h3>
            </div>

            <div class="box-body">
                <div class="row">
                    <div class="col-lg-6">
                        <table style="width: 100%">
                            <tr>
                                <td>No Transaksi</td>
                                <td>:</td>
                                <td>{{ $pemesanan->no_transaksi }}</td>
                            </tr>
                            <tr>
                                <td>Nama Pelanggan</td>
                                <td>:</td>
                                <td>{{ $pemesanan->name }}</td>
                            </tr>
                            <tr>
                                <td>Tanggal Pemesanan</td>
                                <td>:</td>
                                <td>{{ $pemesanan->created_at }}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>:</td>
                                <td>{{ $pemesanan->status }}</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-lg-6">
                        <table class="table table-bordered">
                             <tr>
                                 <td>No</td>
                                 <td>Nama Pakaian</td>
                                 <td>Ukuran</td>
                                 <td>Jumlah</td>
                                 <td>Total Harga</td>
                             </tr>
         
                             @foreach ($pemesanan_detail as $item)
                             <tr>
                                 <td>{{ $no++ }}</td>
                                 <td>{{ $item->nama_pakaian }}</td>
                                 <td>{{ $item->ukuran }}</td>
                                 <td>{{ $item->jumlah }}</td>
                                 <td>{{ number_format($item->harga_total) }}</td>
                             </tr>
                             @endforeach
                        </table>
                     </div>
                </div>
            </div>

            <div class="box-footer">
                <h3 class="box-title">Jumlah Pembayaran</h3>
                <h2 class="box-title">Rp. {{ number_format($pemesanan->total_harga) }}</h2>

                
            </div>

           @if ($pemesanan->id_status==1)
           <div class="box-footer">
            <p style="color:red">* Pelanggan belum melakukan pembayaran</p>
             </div>
            
           @else
           <div class="box-footer">
            <h3 class="box-title">Bukti Pembayaran</h3>
            <a style="color:blue;" href="{{ asset('images') }}/{{ $pembayaran->bukti_transfer }}">Lihat Bukti</a>
            </div>
           
           @endif

            <div class="box-footer">
                <a href="{{ url('data-pemesanan') }}" class="btn btn-danger">Kembali</a>
                @if ($pemesanan->id_status > 1)
                <a href="" data-toggle="modal" data-target="#update" class="btn btn-primary">Update Status Pemesanan</a>
                @endif
            </div>

           
        </div>
    </div>
 </div>

 <div class="modal fade" id="update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Data User</h4>
            </div>
            <form action="{{ url('data-pemesanan',$pemesanan->id_pemesanan) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            @foreach ($status as $item)
                                <option value="{{ $item->id_status }}">{{ $item->status }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

 @endsection