<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;

class FormControllerNando extends Controller
{
     public function simpandata(Request $r){
    	
    	return view::make('nando.tampilform')
    	->with('nama',$r->nama)
    	->with('jenis',$r->jk)
    	->with('alamat',$r->alamat)
    	->with('notelp',$r->notel);
    }
}

