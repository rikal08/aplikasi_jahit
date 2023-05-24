<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Pemesanan;
use App\Models\PemesananDetail;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::join('users','pemesanan.id_pelanggan','=','users.id')
                        ->join('status','pemesanan.id_status','=','status.id_status')
                        ->select('pemesanan.*','users.name','status.status')->get();

        return view('DataPemesanan.DataPemesanan',['pemesanan'=>$pemesanan,'no'=>1]);
        
    }

    public function show($id)
    {
        $pemesanan = Pemesanan::join('users','pemesanan.id_pelanggan','=','users.id')
        ->join('status','pemesanan.id_status','=','status.id_status')
        ->select('pemesanan.*','users.name','status.status')
        ->where('pemesanan.no_transaksi',$id)->first();
        $pembayaran = Pembayaran::where('no_transaksi',$id)->first();
        $pemesanan_detail = PemesananDetail::join('pakaian','pemesanan_detail.id_pakaian','=','pakaian.id_pakaian')->join('ukuran','pemesanan_detail.id_ukuran','ukuran.id_ukuran')->where('no_transaksi',$id)->get();

        $status = Status::all();

        return view('DataPemesanan.DetailPemesanan',['pemesanan'=>$pemesanan,'pembayaran'=>$pembayaran,'pemesanan_detail'=>$pemesanan_detail,'no'=>1,'status'=>$status]);
    }

    public function update(Request $request,$id)
    {
        $pemesanan = Pemesanan::find($id);
        $pemesanan->id_status = $request->status;
        $pemesanan->save();
        return redirect()->back()->with('edit','Pemesanan berhasil di update');
    }

    public function add_pemesanan(Request $request)
    {
        $id_pelanggan = Auth::user()->id;
        $id_status = 1;
        $ket = $request->ket;
        $total_harga = $request->total_harga;
        $no_transaksi = rand(10000,99999);

        $pemesanan = new Pemesanan;
        $pemesanan_detail = new PemesananDetail;

        $pemesanan->no_transaksi = $no_transaksi;
        $pemesanan->id_pelanggan = $id_pelanggan;
        $pemesanan->id_status = $id_status;
        $pemesanan->keterangan = $ket;
        $pemesanan->total_harga = $total_harga;

        // pemesanan detail
        $pemesanan_detail->no_transaksi = $no_transaksi;
        $pemesanan_detail->id_pakaian = $request->id_pakaian;
        $pemesanan_detail->id_ukuran = $request->id_ukuran;
        $pemesanan_detail->jumlah = $request->jumlah;
        $pemesanan_detail->harga_jual = $request->harga;
        $pemesanan_detail->harga_total = $total_harga;


        $pemesanan->save();
        $pemesanan_detail->save();

        
        return redirect()->to('form-pembayaran/'.$no_transaksi);

    }

    public function form_pembayaran($id)
    {
        $pemesanan = Pemesanan::join('users','pemesanan.id_pelanggan','=','users.id')
                                ->join('status','pemesanan.id_status','=','status.id_status')
                                ->select('pemesanan.*','users.name','status.status')
                                ->where('pemesanan.no_transaksi',$id)->first();
        $pemesanan_detail = PemesananDetail::join('pakaian','pemesanan_detail.id_pakaian','=','pakaian.id_pakaian')->join('ukuran','pemesanan_detail.id_ukuran','ukuran.id_ukuran')->where('no_transaksi',$id)->get();
        return view('FormPembayaran',['id'=>$id,'pemesanan'=>$pemesanan,'pemesanan_detail'=>$pemesanan_detail,'no'=>1]);
    }

    public function add_pembayaran(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ]);
        $imageName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images'), $imageName);

        $no_transaksi = $request->no_transaksi;
        $no_rek = $request->no_rek;
        $nama_rek = $request->nama_rek;
        $jumlah = $request->jumlah;

        $pembayaran = new Pembayaran;
        $pembayaran->no_transaksi = $no_transaksi;
        $pembayaran->no_rek = $no_rek;
        $pembayaran->nama_rek = $nama_rek;
        $pembayaran->jumlah = $jumlah;
        $pembayaran->bukti_transfer = $imageName;

        $pembayaran->save();

        $pemesanan = Pemesanan::where('no_transaksi',$no_transaksi)->first();
        $pemesanan->id_status = 2;
        $pemesanan->save();

        return view('AlertSukses',['id'=>$no_transaksi]);
    }

    public function pemesanan_saya()
    {
        $id_pelanggan = Auth::user()->id;

        $pemesanan = Pemesanan::join('users','pemesanan.id_pelanggan','=','users.id')
                                ->join('status','pemesanan.id_status','=','status.id_status')
                                ->select('pemesanan.*','status.status')
                                ->where('pemesanan.id_pelanggan',$id_pelanggan)->get();

        return view('PemesananSaya',['pemesanan'=>$pemesanan,'no'=>1]);


    }

    public function detail_pemesanan($id)
    {
        $pemesanan = Pemesanan::join('users','pemesanan.id_pelanggan','=','users.id')
                                ->join('status','pemesanan.id_status','=','status.id_status')
                                ->select('pemesanan.*','users.name','status.status')
                                ->where('pemesanan.no_transaksi',$id)->first();
        $pembayaran = Pembayaran::where('no_transaksi',$id)->first();
        $pemesanan_detail = PemesananDetail::join('pakaian','pemesanan_detail.id_pakaian','=','pakaian.id_pakaian')->join('ukuran','pemesanan_detail.id_ukuran','ukuran.id_ukuran')->where('no_transaksi',$id)->get();
        return view('DetailPemesanan',['id'=>$id,'pemesanan'=>$pemesanan,'pemesanan_detail'=>$pemesanan_detail,'no'=>1,'pembayaran'=>$pembayaran]);
    }
}
