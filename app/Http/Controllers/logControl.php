<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mlog;
class logControl extends Controller
{
    function index(){
        $log = Mlog::all();
        return view('data.data_log',compact('log'));
    }
}
