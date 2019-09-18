<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class FormControllerWahyu extends Controller
{
    //
    public function simpandata(Request $r){
    	return view::make('wahyu.data')
	    	->with('data', $r->nama)
	    	->with('jk', $r->jk);
	    }
}
