<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function index()
    {
        $status = Status::all();
        return view('DataStatus.DataStatus',['status'=>$status,'no'=>1]);
    }

    public function store(Request $request)
    {
        $status = New Status;
        $status->status = $request->status;

        $status->save();

        return redirect()->back()->with('simpan', 'Data Berhasil disimpan!');
    }

    public function update(Request $request,$id)
    {
        $status = Status::find($id);

        $status->status =  $request->status;

        $status->save();

        return redirect()->back()->with('edit', 'Data Berhasil diupdate!');
    }
}
