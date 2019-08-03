<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mmerk;
use App\MGlobal;
use App\User;
use App\Mlog;

class merkControl extends Controller
{
    //

    function index(){
        $merk = Mmerk::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_merk', compact('merk','log'));
    }

    function add(){
        $log= Mlog::all();
        $merk = MGLobal::Get_Row_Empty('merk_laptop');
        return view('form.frm_merk' , compact('merk','log'));
    }

    function edit($id){
        $log = DB::select('select * from log order by updated_at desc limit 5');
        $merk = Mmerk::where('id_merk',$id)->first();
        return view('form.frm_merk' ,compact('merk','log'));
    }

    function save(Request $req){
        $this->validate($req,[
            "merk" => "required","unique:tb_merk,merk"
        ]);
       
        if($req->get('id_merk')==""){
        $merk = new Mmerk([
            "merk" => $req->get('merk'),
        ]);
        
        $user = auth()->user();
        $log = new Mlog ([
            "description"=>1,
            "created_at"=>date('Y-m-d H:i:s'),
           
            "user_id"=>$user->id,
            "name"=>$user->name,
        ]);
        $log->save();
        $merk->save();
        }else{ 
            $user = auth()->user();
            $merk = Mmerk::where('id_merk', $req->get('id_merk'));
            $merk->update([
                "merk" => $req->get('merk')
            ]);
            $log = new Mlog ([
                "description"=>"Update Merk Laptop",
                "updated_at"=>date('Y-m-d H:i:s'),
               
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();
        }

        return redirect('merk');
    }

    function delete($id){
       
        $merk = Mmerk::where('id_merk', $id);
        $merk->delete();
        $user= auth()->user();
        $log = new Mlog ([
            "description"=>"Delete Merk Laptop",
            "deleted_at"=>date('Y-m-d H:i:s'),
            "user_id"=>$user->id,
            "name"=>$user->name,
            
        ]);
        $log->save();
        return redirect('merk');
    }
    // function log(){
    //     $log= Mlog::all();
    //     return view('header',compact('log'));
    // }

}
