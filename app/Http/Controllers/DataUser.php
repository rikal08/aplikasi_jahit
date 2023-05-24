<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DataUser extends Controller
{
    public function index()
    {
        $user = User::where('level','<',3)->get();
        return view('DataUser.DataUser',['user'=>$user,'no'=>1]);
    }

    public function store(Request $request)
    {
        $user = New User;
        $user->name = $request->name;
        $user->telepon = $request->telepon;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->password = Hash::make($request->password);
        $user->level = $request->level;

        $user->save();

        return redirect()->back()->with('simpan', 'Data Berhasil disimpan!');
    }

    public function update(Request $request,$id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->telepon = $request->telepon;
        $user->alamat = $request->alamat;
        
        if ($request->password == true) {
            $user->password = Hash::make($request->password);
        }

        $user->save();

        return redirect()->back()->with('edit', 'Data Berhasil diedit!');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->back()->with('hapus', 'Data Berhasil dihapus!');
    }
}
