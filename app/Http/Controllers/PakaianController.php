<?php

namespace App\Http\Controllers;

use App\Models\JenisPakaian;
use App\Models\TypePakaian;
use App\Models\Ukuran;
use App\Models\UkuranPakaian;
use Illuminate\Http\Request;

class PakaianController extends Controller
{
    public function index()
    {
        $type = TypePakaian::all();
        $pakaian = JenisPakaian::join('type_pakaian','pakaian.id_type','=','type_pakaian.id_type')->get();
        return view('DataPakaian.DataPakaian',['pakaian'=>$pakaian,'no'=>1,'type'=>$type]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images'), $imageName);
        $pakaian = New JenisPakaian;
        $pakaian->nama_pakaian = $request->nama_pakaian;
        $pakaian->deskripsi = $request->deskripsi;
        $pakaian->estimasi_selesai = $request->estimasi_selesai;
        $pakaian->foto_path = $imageName;
        $pakaian->harga = $request->harga;
        $pakaian->id_type = $request->type;
        $pakaian->save();
        return redirect()->back()->with('simpan', 'Data Berhasil disimpan!');
    }

    public function update(Request $request,$id)
    {
        $pakaian = JenisPakaian::find($id);

        $pakaian->nama_pakaian = $request->nama_pakaian;
        $pakaian->deskripsi = $request->deskripsi;
        $pakaian->estimasi_selesai = $request->estimasi_selesai;
        $pakaian->harga = $request->harga;
        $pakaian->save();
        return redirect()->back()->with('simpan', 'Data Berhasil disimpan!');
    }

    public function show($id)
    {
        $pakaian = JenisPakaian::find($id);
        $ukuran_pakaian = UkuranPakaian::join('ukuran','ukuran_pakaian.id_ukuran','=','ukuran.id_ukuran')->where('ukuran_pakaian.id_pakaian',$id)->get();    
        $ukuran = Ukuran::where('id_type', $pakaian->id_type)->get();
        return view('DataPakaian.Detail',['pakaian'=>$pakaian,'ukuran'=>$ukuran,'no'=>1,'ukuran_pakaian'=>$ukuran_pakaian]);
    }

    public function destroy($id)
    {
        $user = JenisPakaian::find($id);
        $user->delete();
        return redirect()->back()->with('hapus', 'Data Berhasil dihapus!');
    }

    public function add_ukuran_pakaian(Request $request)
    {
        $ukuran_pakaian = new UkuranPakaian;
        $ukuran_pakaian->id_pakaian = $request->id_pakaian;
        $ukuran_pakaian->id_ukuran = $request->id_ukuran;

        $ukuran_pakaian->save();
        return redirect()->back()->with('simpan', 'Data Berhasil disimpan!');
    }
}
