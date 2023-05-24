<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use App\Models\PemesananDetail;

class LacakPemesananController extends Controller
{
    public function index()
    {
        return view('LacakPemesanan');
    }

    public function cari(Request $request)
    {
        $id = $request->no_transaksi;
        $pemesanan = Pemesanan::join('users','pemesanan.id_pelanggan','=','users.id')
                                ->join('status','pemesanan.id_status','=','status.id_status')
                                ->select('pemesanan.*','status.status','users.name')
                                ->where('pemesanan.no_transaksi',$id)->first();
        $pemesanan_detail = PemesananDetail::join('pakaian','pemesanan_detail.id_pakaian','=','pakaian.id_pakaian')->join('ukuran','pemesanan_detail.id_ukuran','ukuran.id_ukuran')->where('no_transaksi',$id)->get();
        return view('LacakPemesanan',['pemesanan'=>$pemesanan,'pemesanan_detail'=>$pemesanan_detail]);
    }
}
