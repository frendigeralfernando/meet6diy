<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;


class FormControllerRendi extends Controller
{
    //
    public function simpandata(Request $r){
    	$namadata='yoga';
    	// return view::make('tampilform')->with('data', $r);
    	return view::make('rendi.tampilform')
    	->with('nama', $r->nama)
    	->with('jk',$r->jk);
    }
}
