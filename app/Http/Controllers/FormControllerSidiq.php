<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

Use View;

class FormControllerSidiq extends Controller
{
    public function simpandata(Request $req)
    {
    	return view::make('sidiq.result')
    		->with('name', $req->name)
    		->with('gender', $req->gender)
    		->with('address', $req->address)
    		->with('phone', $req->phone);
    }
}
