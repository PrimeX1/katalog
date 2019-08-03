<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mtipepro;
use App\MGlobal;
use App\Mlog;
class tipeproControl extends Controller
{
    function index(){
        $tpro= Mtipepro::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_tipe_pro',compact('tpro','log'));
    }
    function add(){
        $tpro = MGlobal::Get_Row_Empty('tipe_proyektor');
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_tipe_pro',compact('tpro','log'));
    }

    function edit($id){
        $tpro = Mtipepro::where("kd_tipe_pro",$id)->first();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_tipe_pro',compact('tpro','log'));
    }
    function save(Request $req){
        $this->validate($req,[
            "tipe_pro"=>"required"
        ]);
        if($req->get("kd_tipe_pro")==""){
            
            $tpro= new Mtipepro([
                "tipe_pro"=>$req->get('tipe_pro')
            ]);
            $tpro->save();
            $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Create OS Laptop",
                "updated_at"=>date('Y-m-d H:i:s'),
                "kode"=>1,
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();    
        }else{
            $tpro = Mtipepro::where("kd_tipe_pro",$req->get("kd_tipe_pro"));
            $tpro->update([
                "tipe_pro"=>$req->get("tipe_pro")
            ]);
            $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Create OS Laptop",
                "updated_at"=>date('Y-m-d H:i:s'),
                "kode"=>2,
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
        }
        return redirect('Tipepro');
    }
    function delete($id){
        $tpro = Mtipepro::where('kd_tipe_pro',$id)->delete();
        $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Create OS Laptop",
                "updated_at"=>date('Y-m-d H:i:s'),
                "kode"=>3,
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();    
        return redirect('Tipepro');
    }
}
