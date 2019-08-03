<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mkategoripro;
use App\Mlog;
use App\MGlobal;
class KtgproControl extends Controller
{
    function index(){
        $ktg = Mkategoripro::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_ktgpro',compact('ktg','log'));
    }

    function add(){
        $ktg = Mglobal::Get_Row_Empty('ktg_proyektor');
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_ktg_proyektor',compact('ktg','log'));
    }

    function edit($id){
        $ktg = Mkategoripro::where("kd_ktg_proyek",$id)->first();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view ('form.frm_ktg_proyektor',compact('ktg','log'));
    }

    function save(Request $req){
        $this->validate($req,[
            "ktg_pro" => "required",
        ]);
        if ($req->get('kd_ktg_proyek')==""){
            $ktg= new Mkategoripro([
                "ktg_proyektor"=>$req->get('ktg_pro'),
            ]);
            $ktg->save();
            $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Create OS Laptop",
                "updated_at"=>date('Y-m-d H:i:s'),
               "kode"=>1,
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();    
        }
        else{
            $ktg = Mkategoripro::where('kd_ktg_proyek',$req->get('kd_ktg_proyek'));
            $ktg->update([
                "ktg_proyektor"=>$req->get("ktg_pro"),
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
        return redirect("ktgpro");
    }

    function delete($id){
        $ktg = Mkategoripro::where("kd_ktg_proyek",$id);
        $ktg->delete();
        $user = auth()->user();
        $log = new Mlog ([
            "description"=>"Delete OS Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
           "kode"=>3,
            "user_id"=>$user->id,
            "name"=>$user->name,
        ]);
        $log->save();   
        return redirect('ktgpro');

    }
}
