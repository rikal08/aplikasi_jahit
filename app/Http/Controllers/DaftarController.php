<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DaftarController extends Controller
{
    public function index()
    {
        return view('DaftarPelanggan');
    }

    public function store(Request $request)
    {
        $user = New User;
        $user->name = $request->name;
        $user->telepon = $request->telepon;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->password = Hash::make($request->password);
        $user->level = 3;

        $user->save();

        return redirect('login')->with('simpan', 'Pendaftaran Berhasil!');
    }
}
