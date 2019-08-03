<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mint_proyektor;
use App\MGlobal;
use App\Mlog;
class intControl extends Controller
{
    function index(){
        $int= Mint_proyektor::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_int_proyektor',compact('int','log'));
    }
    function add(){
        $int= MGlobal::Get_Row_Empty('int_pro');
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_int_proyektor',compact('int','log'));
    }
    function edit($id){
        $int = Mint_proyektor::where('kd_int_pro',$id)->first();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_int_proyektor',compact('int','log'));
    }
    function save(Request $req){
        $this->validate($req,[
            'nama_int'=>'required',
        ]);
        if($req->get('kd_int_pro')==""){
            $int = new Mint_proyektor([
                'nama_int'=>$req->get('nama_int'),
            ]);
            $int->save();
            $user = auth()->user();
            $log = new Mlog ([
                "description"=>" Create Intensitas Cahaya Proyektor",
                "updated_at"=>date('Y-m-d H:i:s'),
                "kode"=>1,
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
        }else{
            $int = Mint_proyektor::where('kd_int_pro',$req->get('kd_int_pro'));
            $int->update([
                'nama_int'=>$req->get('nama_int'),
            ]);
            $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Update Intensitas Cahaya Proyektor",
                "updated_at"=>date('Y-m-d H:i:s'),
                "kode"=>2,
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
        }
        return redirect('intPro');
    }
    function delete($id){
        $int = Mint_proyektor::where('kd_int_pro',$id)->delete();
        $user = auth()->user();
        $log = new Mlog ([
            "description"=>"Delete Intensitas Cahaya Proyektor",
            "updated_at"=>date('Y-m-d H:i:s'),
            "kode"=>3,
            "user_id"=>$user->id,
            "name"=>$user->name,
        ]);
        $log->save();   
        return redirect('intPro');
    }
}
