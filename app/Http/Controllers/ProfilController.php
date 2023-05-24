<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        $user = User::find($id);

        return view('Profil.Profil',['item'=>$user]);
    }
}
