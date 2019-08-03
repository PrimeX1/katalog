<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashcontrol extends Controller
{
    function index(){
        $log= Mlog::all();
        return view('header',compact('log'));
    }
   
}
