<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mhdd;
use App\MGlobal;
use App\Mlog;
class hddControl extends Controller
{

    

    function index(){
        $hardisk = Mhdd::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_hdd', compact('hardisk','log'));
    }

    function add(){
        $hdd = MGlobal::Get_Row_Empty('tb_hdd');
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_hdd' , compact ('hdd','log'));
    }

    function save(Request $req){
        $this->validate($req,[
            "Hardisk" => "required"
        ]);

        if($req->get('kd_hdd')==""){
        $hdd = new Mhdd([
            "storage" => $req->get('Hardisk'),
            "kecepatan" => $req->get('Kecepatan'),
            
        ]); 
        $hdd->save();
        $user = auth()->user();
        $log = new Mlog ([
            "description"=>"Create HDD Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
           
            "user_id"=>$user->id,
            "name"=>$user->name,
        ]);
        $log->save();                 
        }else{
            $hdd = Mhdd::where('kd_hdd',$req->get('kd_hdd'));
            $hdd->update([
                "storage" => $req->get('Hardisk'),
                "kecepatan" => $req->get('Kecepatan'),
            ]);
            $user = auth()->user();
        $log = new Mlog ([
            "description"=>"Update HDD Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
           
            "user_id"=>$user->id,
            "name"=>$user->name,
        ]);
        $log->save();   
        }
        return redirect('hardisk');
    }

    function delete($id){
        $hdd = Mhdd::where('kd_hdd', $id);
        $hdd->delete();
        $user = auth()->user();
        $log = new Mlog ([
            "description"=>"Delete HDD Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
           
            "user_id"=>$user->id,
            "name"=>$user->name,
        ]);
        $log->save();   
        return redirect('hardisk');
    }

    function edit($id){
        $hdd = Mhdd::where("kd_hdd",$id)->first();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_hdd',compact('hdd','log'));
    }
}
