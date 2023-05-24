<?php

namespace App\Http\Controllers;

use App\Models\TypePakaian;
use Illuminate\Http\Request;

class TypePakaianController extends Controller
{
   public function index()
   {
    $type = TypePakaian::all();
    return view('TypePakaian.TypePakaian',['type'=>$type,'no'=>1]);
   }

   public function store(Request $request)
   {
        $type = new TypePakaian;

        $type->nama_type = $request->nama_type;

        $type->save();

        return redirect()->back()->with('simpan', 'Data Berhasil disimpan!');

   }

   public function update(Request $request,$id)
   {
        $type = TypePakaian::find($id);

        $type->nama_type = $request->nama_type;

        $type->save();

        return redirect()->back()->with('edit', 'Data Berhasil disimpan!');
   }
}
