<?php

namespace App\Http\Controllers;

use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $cek = Auth::user()->level;

        if ($cek==3) {
            return redirect('/');
        }else{
            $pemesanan_today = Pemesanan::join('users','pemesanan.id_pelanggan','=','users.id')
                                ->join('status','pemesanan.id_status','=','status.id_status')
                                ->select('pemesanan.*','users.name','status.status')
                                ->wheredate('pemesanan.created_at',date('Y-m-d'))->get();
            $pemesanan_bayar = Pemesanan::join('users','pemesanan.id_pelanggan','=','users.id')
                                ->join('status','pemesanan.id_status','=','status.id_status')
                                ->select('pemesanan.*','users.name','status.status')
                                ->where('pemesanan.id_status',1)->get();
            $pemesanan_proses = Pemesanan::join('users','pemesanan.id_pelanggan','=','users.id')
                                ->join('status','pemesanan.id_status','=','status.id_status')
                                ->select('pemesanan.*','users.name','status.status')
                                ->where('pemesanan.id_status','=',4)
                                ->get();
            $pemesanan_selesai = Pemesanan::join('users','pemesanan.id_pelanggan','=','users.id')
                                ->join('status','pemesanan.id_status','=','status.id_status')
                                ->select('pemesanan.*','users.name','status.status')
                                ->where('pemesanan.id_status','=',5)
                                ->get();

            return view('home',['pemesanan_today'=>$pemesanan_today,'no'=>1,'pemesanan_bayar'=>$pemesanan_bayar,'pemesanan_proses'=>$pemesanan_proses,'pemesanan_selesai'=>$pemesanan_selesai]);
        }
        
    }
}
