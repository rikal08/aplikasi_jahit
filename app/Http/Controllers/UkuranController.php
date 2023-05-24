<?php

namespace App\Http\Controllers;

use App\Models\TypePakaian;
use App\Models\Ukuran;
use Illuminate\Http\Request;

class UkuranController extends Controller
{

    public function index()
    {
        $ukuran = Ukuran::join('type_pakaian','ukuran.id_type','=','type_pakaian.id_type')->get();
        $type = TypePakaian::all();
        return view('Ukuran.DataUkuran',['ukuran'=>$ukuran,'no'=>1,'type'=>$type]);
    }

    public function store(Request $request)
    {
        

        $ukuran = New Ukuran;

        $ukuran->ukuran = $request->ukuran;
        $ukuran->deskripsi_ukuran = $request->deskripsi_ukuran;
        $ukuran->id_type = $request->id_type;
       
        $ukuran->save();
        return redirect()->back()->with('simpan', 'Data Berhasil disimpan!');

    }

    public function update(Request $request,$id)
    {
        

        $ukuran = Ukuran::find($id);
        $ukuran->ukuran = $request->ukuran;
        $ukuran->deskripsi_ukuran = $request->deskripsi_ukuran;
       
        $ukuran->save();
        return redirect()->back()->with('edit', 'Data Berhasil disimpan!');

    }
}
