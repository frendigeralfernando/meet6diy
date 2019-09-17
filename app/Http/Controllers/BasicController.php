<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use View;

class BasicController extends Controller
{
     public function tampil_coba(Request $r){

    	return view::make('tasyaazura.tampilform')
    			->with('data', $r->nama)
    			->with('jeniskelamin',$r->jk)
    			->with('nomortelepon',$r->Notel)
    			->with('Alamat',$r->alamat);
    }
}
