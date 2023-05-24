<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index()
    {
        $user = User::where('level',3)->get();
        return view('DataPelanggan.DataPelanggan',['user'=>$user,'no'=>1]);
    }
}
