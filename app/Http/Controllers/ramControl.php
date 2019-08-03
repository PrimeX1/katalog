<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mram;
use App\MGlobal;
use App\Mlog;
class ramControl extends Controller
{
    function index(){
        $ram = Mram::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_ram', compact('ram','log'));
    }

    function add(){
        $ram = MGlobal::Get_Row_Empty('tb_ram_laptop');
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_ram',compact('ram','log'));
    }

    function edit($id){
        $ram = Mram::where('kd_ram_laptop',$id)->first();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_ram',compact('ram','log'));
    }

    function save(Request $req){
        $this->validate($req,[
            "kapasitas" => "required",
            "kecepatan"=>"required",
            "type"=>"required",
        ]);
        if($req->get('kd_ram_laptop')==""){
            $ram = new Mram([
                'kapasitas'=>$req->get('kapasitas'),
                'kecepatan'=>$req->get('kecepatan'),
                'type'=>$req->get('type')
            ]);
            $ram->save();

            $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Create Ram Laptop",
                "updated_at"=>date('Y-m-d H:i:s'),
            
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
        }else{
            $ram = Mram::where("kd_ram_laptop",$req->get('kd_ram_laptop'));
            $ram->update([
                'kapasitas'=>$req->get('kapasitas'),
                'kecepatan'=>$req->get('kecepatan'),
                'type'=>$req->get('type')
            ]);

            $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Update Ram Laptop",
                "updated_at"=>date('Y-m-d H:i:s'),
            
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
        }
        return redirect('ram');
    }
    

    public function delete($id){
        DB::table('tb_ram_laptop')->where('kd_ram_laptop',$id)->delete();
        $user = auth()->user();
        $log = new Mlog ([
            "description"=>"Delete Ram Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
           
            "user_id"=>$user->id,
            "name"=>$user->name,
        ]);
        $log->save();   
        return redirect('ram');
        
        exit;
    }

}
