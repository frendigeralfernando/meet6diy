<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class FormControllerAhsani extends Controller
{
    public function simpandata(Request $request)
    {
        return view::make('ahsani.hasil')
        ->with('nama', $request->nama)
        ->with('jenis_kelamin', $request->jenis_kelamin)
        ->with('alamat', $request->alamat)
        ->with('notelp', $request->notelp);
    }
}
