<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mvga;
use App\Mglobal;
use App\Mlog;
class vgaControl extends Controller
{
    function index(){
        $vga = Mvga::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_vga', compact('vga','log'));
    }

    function add(){
        $vga = MGlobal::Get_Row_Empty('tb_vga');
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_vga',compact('vga','log'));
    }

    function edit($id){
        $vga = Mvga::where('kd_vga',$id)->first();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_vga',compact('vga','log'));
    }

    function save(Request $req){
        $this->validate($req,[
            "name" => "required",
            "vram" => "required",
            
        ]);
        if($req->get('kd_vga')==""){
            $ram = new Mvga([
                'nama_vga'=>$req->get('name'),
                'vram'=>$req->get('vram')
                
            ]);
            $ram->save();
            
        $user = auth()->user();
        $log = new Mlog ([
            "description"=>"Create VGA Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
           
            "user_id"=>$user->id,
            "name"=>$user->name,
        ]);
        $log->save();   
        }else{
            $ram = Mvga::where("kd_vga",$req->get('kd_vga'));
            $ram->update([
                'nama_vga'=>$req->get('name'),
                'vram'=>$req->get('vram'),
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
        return redirect('vga');
    }
    function delete($id){
        DB::table('tb_vga')->where('kd_vga',$id)->delete();
        $user = auth()->user();
        $log = new Mlog ([
            "description"=>" Delete VGA Laptop",
            "deleted_at"=>date('Y-m-d H:i:s'),
           
            "user_id"=>$user->id,
            "name"=>$user->name,
        ]);
        $log->save();   
        return redirect('vga');
    }
}