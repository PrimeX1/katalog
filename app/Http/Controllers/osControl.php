<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Osreq;
use Illuminate\Support\Facades\Validator;
use App\Mos;
use App\MGlobal;
use App\User;
use App\Activity;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Mlog;
class osControl extends Controller
{

    function index(){
        $os = Mos::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_os', compact('os','log'));
    }

    function add(){
        $os =  MGlobal::Get_Row_Empty('tb_os');
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_os',compact('os','log'));
    }

    function save(Osreq $req){
        $this->validate($req,[
            "os" => "unique:tb_os,nama_os"
        ]);
        if($req->get('kd_os')==""){
        $os = new Mos([
            "nama_os" => $req->get('os'),
            
        ]); 
        $os->save();  
        $user = auth()->user();
        $log = new Mlog ([
            "description"=>"Create OS Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
           
            "user_id"=>$user->id,
            "name"=>$user->name,
        ]);
        $log->save();                  
        }else{
            $os = Mos::where('kd_os',$req->get('kd_os'));
            $os->update([
                "nama_os" => $req->get('os'),
               
            ]);
           
            $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Update OS Laptop",
                "updated_at"=>date('Y-m-d H:i:s'),
               
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
            
        }

        

        return redirect('os');
    }

    function delete($id){
        $os = Mos::where('kd_os', $id);
        $os->delete();
        $user = auth()->user();
        $log = new Mlog ([
            "description"=>"Delete OS Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
           
            "user_id"=>$user->id,
            "name"=>$user->name,
        ]);
        $log->save();   
        return redirect('os');
    }

    function edit($id){
        $os = Mos::where("kd_os",$id)->first();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_os',['os'=>$os,'log'=>$log]);
    }

}
