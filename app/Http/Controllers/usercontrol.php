<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\user;
use App\MGlobal;
use App\Mlog;
class usercontrol extends Controller
{
    function index(){
        $user = User::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_user',compact('user','log'));
    }
    function add(){
        $user = Mglobal::Get_row_Empty('users');
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_user',compact('user','log'));
    }
    function edit($id){
        $user = User::where("id",$id)->first();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_user',compact('user','log'));
    }    

    function save(Request $req){
        
        $this->validate($req,[
            "name" => "required",
            "alamat"=>"required",
            "telp" => "required",
            "email"=>"required",
            "password" => "required",
            "level"=>"required",
        ]);
    
        if($req->get('id')==""){

            $newid = DB::select('SHOW TABLE STATUS LIKE "users"');
            $no = "P".sprintf('%04d',$newid[0]->Auto_increment);
            // Simpan Ke Tabel Anggota
            $user = new User([
                'no_pelanggan'=>$no,
                'name' => $req->get('name'),
                'alamat' => $req->get('alamat'),
                'telp' => $req->get('telp'),
                'email' => $req->get('email'),
                'password' => Hash::make($req->get('password')),
                'level' => $req->get('level'),
            ]);
            $user->save();
            $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Create Member ",
                "updated_at"=>date('Y-m-d H:i:s'),
            
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
        }else{
            $user = User::where("id",$req->get('id'));  
            $user->update([
                'name' => $req->get('name'),
                'alamat' => $req->get('alamat'),
                'telp' => $req->get('telp'),
                'email' => $req->get('email'),
                'level' => $req->get('level'),
                'password' => $req->get('password')!=""? Hash::make($req->get('password')) : $req->get('old_password')
            ]);
            $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Update Member",
                "updated_at"=>date('Y-m-d H:i:s'),
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
        }

        return redirect('user');
    }

    function delete($id){
        $user = User::where("id",$id);        
        $user->delete();
        $user = auth()->user();
            $log = new Mlog ([
                "description"=>"Delete Member",
                "updated_at"=>date('Y-m-d H:i:s'),
            
                "user_id"=>$user->id,
                "name"=>$user->name,
            ]);
            $log->save();   
    }  
   

    
}
