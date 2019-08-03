<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LaptopImport;
use App\laptop;
use App\Imports\HardiskImport;
use App\Mlog;
use App\Imports\proyektorImport;
class ExcelControl extends Controller
{
    //
    function index(){
        return view('form.frm_excel');
    }

    public function import(Request $req) 
    {
        // validasi
		$this->validate($req,[
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
        $user = auth()->user();
        Excel::import(new LaptopImport , request()->file('file'));
        $log = new Mlog ([
            "kode"       =>1,
            "description"=>"Import Data Laptop From Excel",
            "updated_at"=>date('Y-m-d H:i:s'),
            "user_id"=>$user->id,
            "name"=>$user->name,
            
        ]);
        $log->save();
    
        return redirect('/laptop')->with('success', 'All good!');
        
    }

   

    function edit($id){
        $laptop = laptop::Where('id',$id)->first();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_excel', ['laptop'=>$laptop,'log'=>$log]);
    }

    function update(Request $req){

        if($req->file('image')){
            $foto = $req->file('image');
            $nama_foto = date('m-Y-').$foto->getClientOriginalName();
        } else {
            $nama_foto = $req->get('old_image');
        }

        $laptop = laptop::where('id',$req->get('id'));
        $laptop->update([
            'id_merk'=>$req->get('id_merk'),
            'image'=>$nama_foto,
            'tipe'=>$req->get('tipe'),
            'color'=>$req->get('color'),
            'kategori'=>$req->get('kategori'),
            'kd_procesor'=>$req->get('kd_procesor'),
            'kd_hdd'=>$req->get('kd_hdd'),
            'kd_ram_laptop'=>$req->get('kd_ram_laptop'),
            'kd_vga'=>$req->get('kd_vga'),
            'kd_os'=>$req->get('kd_os'),
            'odd'=>$req->get('odd'),
            'layar'=>$req->get('layar'),
            'aksesoris'=>$req->get('aksesoris'),
            'H1'=>$req->get('H1'),
            'H2'=>$req->get('H2'),
            'H3'=>$req->get('H3')
        ]);
        $user= auth()->user();
        $log = new Mlog ([
            "description"=>"Update Data Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
            "user_id"=>$user->id,
            "kode"=>2
        ]);
        $log->save();

        if($req->file('image')){
            $foto->move(public_path()."/img", $nama_foto);
        }

        return redirect('/laptop');
    }

    function delete($id){
        $laptop = laptop::where('id',$id);
        $laptop->delete();

        $user= auth()->user();
        $log = new Mlog ([
            "description"=>"Delete Data Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
            "user_id"=>$user->id,
            "kode"=>3
        ]);
        $log->save();
        return redirect('/laptop');

    }
}
