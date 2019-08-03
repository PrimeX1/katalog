<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\merkpro;
use App\MGlobal;
use App\Mlog;
class MerkproControl extends Controller
{
    function index(){
        $mpro = merkpro::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_merkpro',compact('mpro','log'));
    }

    function add(){
        $mpro = MGlobal::Get_Row_Empty('merk_proyektor');
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_merk_proyektor',compact('mpro','log'));
    }

    function edit($id){
        $mpro= merkpro::where("kd_merk",$id)->first();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_merk_proyektor',compact('mpro','log'));
    }

    function save(Request $req){
        $this->validate($req,[
            'merk_pro'=>"required",
        ]);
        if($req->get('kd_merk')==""){
            $mpro = new merkpro ([
                'merk_pro'=>$req->get('merk_pro')
            ]);
            $mpro->save();
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
            $mpro = merkpro::where('kd_merk',$req->get('kd_merk'));
            $mpro->update([
                "merk_pro"=>$req->get('merk_pro')
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
        return redirect('Merkpro');
    }

    function delete($id){
        $mpro = merkpro::where("kd_merk",$id)->delete();
        $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Create OS Laptop",
                "updated_at"=>date('Y-m-d H:i:s'),
                "kode"=>3,
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();  
            return redirect('Merkpro');
    }
}
