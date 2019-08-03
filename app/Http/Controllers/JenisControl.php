<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\MGlobal;
use App\MJ_proyektor;
use App\Mlog;

class JenisControl extends Controller
{
    function index(){
        $jpro = MJ_proyektor::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_jenis_proyektor',compact('jpro','log'));
    }
    function add(){
        $jpro= MGlobal::Get_Row_Empty('tb_jenis_proyektor');
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_jenis_proyektor',compact('jpro','log'));
    }
    function edit($id){
        $jpro= MJ_proyektor::where('kd_jenis_pro',$id)->first();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_jenis_proyektor',compact('jpro','log'));
    }
    function save(Request $req){
        $this->validate($req,[
            'jenis_pro'=>'required'
        ]);
        if($req->get('kd_jenis_pro')==""){
            $jpro = new MJ_proyektor([
                "jenis_pro"=>$req->get("jenis_pro")
            ]);
            $jpro->save();
            $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Create Jenis Proyektor",
                "updated_at"=>date('Y-m-d H:i:s'),
                "kode"=>1,
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
        }else{
            $jpro = MJ_proyektor::where('kd_jenis_pro',$req->get('kd_jenis_pro'));
            $jpro->update([
                "jenis_pro"=>$req->get('jenis_pro'),
            ]);
            $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Update Jenis Proyektor",
                "updated_at"=>date('Y-m-d H:i:s'),
                "kode"=>2,
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
        }
        return redirect('Jpro');
    }
    function delete($id){
        $jpro = MJ_proyektor::where("kd_jenis_pro",$id)->delete();
        $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Delete Jenis Proyektor",
                "updated_at"=>date('Y-m-d H:i:s'),
                "kode"=>3,
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();  
            return redirect('Jpro');
    }
}
