<?php

namespace App\Http\Controllers;

use App\Models\Ukuran;
use App\Models\JenisPakaian;
use Illuminate\Http\Request;
use App\Models\UkuranPakaian;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HalamanUtama extends Controller
{
    
    public function index()
    {
        $pakaian = JenisPakaian::all();
        $ukuran = Ukuran::all();
        return view('welcome',['pakaian'=>$pakaian,'ukuran'=>$ukuran]);
    }

    public function pesan($id)
    {

        $pakaian = JenisPakaian::find($id);
        $ukuran_pakaian = UkuranPakaian::join('ukuran','ukuran_pakaian.id_ukuran','=','ukuran.id_ukuran')->where('ukuran_pakaian.id_pakaian',$id)->get();  
        return view('pesan',['pakaian'=>$pakaian,'ukuran_pakaian'=>$ukuran_pakaian]);
    }

    public function akun_saya()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('AkunSaya',['item'=>$user]);
    }
}
