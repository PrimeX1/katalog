<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mprocesor;
use App\MGlobal;
use App\Mlog;
class procesControl extends Controller
{
    function index(){
        $procesor = Mprocesor::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_procesor', compact('procesor','log'));
    }

    function add(){
        $procesor = MGlobal::Get_Row_Empty('tb_procesor');
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_procesor',compact('procesor','log'));
    }

    function edit($id){
        $procesor = Mprocesor::where("kd_procesor",$id)->first();
         $log = DB::select('select * from log order by updated_at desc limit 5');
        return view("form.frm_procesor",compact("procesor",'log'));
    }

    function save(Request $req){
        $this->validate($req,[
            "Procesor" => "required",
            
        ]);
        if($req->get('kd_procesor')==""){
            $procesor = new Mprocesor([
                'nama_procesor'=>$req->get('Procesor'),
                // 'frekuensi'=>$req->get('frekuensi')
            ]);

            $procesor->save();
            
            $user = auth()->user();
                $log = new Mlog ([
                    "description"=>"Create Procesor Laptop",
                    "updated_at"=>date('Y-m-d H:i:s'),
                
                    "user_id"=>$user->id,
                    "name"=>$user->name,
                ]);
            $log->save();   
        }else{
            $procesor = Mprocesor::where("kd_procesor",$req->get('kd_procesor'));
            $procesor->update([
                'nama_procesor' =>$req->get('Procesor'),
                // 'frekuensi'=>$req->get('frekuensi')
            ]);
            
            $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Update Procesor Laptop",
                "updated_at"=>date('Y-m-d H:i:s'),
            
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
        }
        return redirect('procesor');
    }

    function delete($id){
        DB::table('tb_procesor')->where('kd_procesor',$id)->delete();
        $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Delete Procesor Laptop",
                "updated_at"=>date('Y-m-d H:i:s'),
            
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
        return redirect('procesor');
    }
}
