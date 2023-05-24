<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::join('users','pemesanan.id_pelanggan','=','users.id')
                        ->join('status','pemesanan.id_status','=','status.id_status')
                        ->select('pemesanan.*','users.name','status.status')
                        ->wheremonth('pemesanan.created_at',date('m'))
                        ->where('pemesanan.id_status','=',5)->get();
        return view('Laporan.DataLaporan',['pemesanan'=>$pemesanan,'no'=>1]);

    }

    public function cetak_laporan(Request $request)
    {
        $tahun = $request->tahun;
        $bulan = $request->bulan;

        $pemesanan = Pemesanan::join('users','pemesanan.id_pelanggan','=','users.id')
                        ->join('status','pemesanan.id_status','=','status.id_status')
                        ->select('pemesanan.*','users.name','status.status')
                        ->wheremonth('pemesanan.created_at',date('m'))
                        ->whereyear('pemesanan.created_at',date('Y'))
                        ->where('pemesanan.id_status','=',5)->get();
        $pdf = PDF::loadView('Laporan.CetakLaporan',['pemesanan'=>$pemesanan,'tahun'=>$tahun,'bulan'=>$bulan]);

     

        return $pdf->download('laporanpemesanan.pdf');
    }
}
