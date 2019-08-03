<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;
use App\MProyektor;
use App\Mint_proyektor;
use App\MJ_proyektor;
use App\Mkategoripro;
use App\merkpro;
use App\Mtipepro;
use App\MLog;
use App\MGlobal;
use App\Imports\proyektorImport;

class ProyektorControl extends Controller
{
    //
    function index(){
        $proyektor = DB::select('SELECT detail_proyektor.kd_dt_pro, merk_proyektor.merk_pro , detail_proyektor.image, detail_proyektor.model, tipe_proyektor.tipe_pro, ktg_proyektor.ktg_proyektor, tb_jenis_proyektor.jenis_pro, int_pro.nama_int, detail_proyektor.detail_pro, detail_proyektor.H1, detail_proyektor.H2, detail_proyektor.H3, detail_proyektor.updated_at
        FROM detail_proyektor LEFT JOIN merk_proyektor ON detail_proyektor.kd_merk=merk_proyektor.kd_merk LEFT JOIN tipe_proyektor ON detail_proyektor.kd_tipe_pro=tipe_proyektor.kd_tipe_pro LEFT JOIN ktg_proyektor ON detail_proyektor.kd_ktg_proyek=ktg_proyektor.kd_ktg_proyek LEFT JOIN tb_jenis_proyektor ON detail_proyektor.kd_jenis_pro=tb_jenis_proyektor.kd_jenis_pro LEFT JOIN int_pro ON detail_proyektor.kd_int_pro=int_pro.kd_int_pro
        ORDER BY detaiL_proyektor.updated_at desc');
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('data.data_proyektor',['proyektor'=>$proyektor, 'log'=>$log]);
    }

    public function proimport(Request $req){
        // validasi
      $this->validate($req,[
          'file' => 'required|mimes:csv,xls,xlsx'
      ]);
      $user = auth()->user();
      Excel::import(new proyektorImport , request()->file('file'));
      $log = new Mlog ([
        "kode"       =>"1",
        "description"=>"Import Data Laptop From Excel",
        "updated_at"=>date('Y-m-d H:i:s'),
        "user_id"=>$user->id,
        "name"=>$user->name,
        
    ]);
    $log->save();
  
      return redirect('/proyektor')->with('success', 'All good!');
   }

   public function edit($id){
     $proyektor = MProyektor::where('kd_dt_pro',$id)->first();
     $int       = Mint_proyektor::all();
     $jenis     = MJ_proyektor::all();
     $kategori  = Mkategoripro::all();
     $merk      = merkpro::all();
     $tipe      = Mtipepro::all();
     $log = DB::select('select * from log order by updated_at desc limit 5');
     return view('form.frm_detail_proyektor',['proyektor'=>$proyektor,'log'=>$log,'int'=>$int,'jenis'=>$jenis,'kategori'=>$kategori,'merk'=>$merk,'tipe'=>$tipe]);
   }

   public function add(){
    $proyektor = MGlobal::get_row_empty('detail_proyektor');
    $int       = Mint_proyektor::all();
    $jenis     = MJ_proyektor::all();
    $kategori  = Mkategoripro::all();
    $merk      = merkpro::all();
    $tipe      = Mtipepro::all();
    $log = DB::select('select * from log order by updated_at desc limit 5');
    return view('form.frm_detail_proyektor',['proyektor'=>$proyektor,'log'=>$log,'int'=>$int,'jenis'=>$jenis,'kategori'=>$kategori,'merk'=>$merk,'tipe'=>$tipe]);
   }

    public function save(Request $req){
            
        if($req->file('image')){
            $foto = $req->file('image');
            $nama_foto = date('m-Y-').$foto->getClientOriginalName();
        } else {
            $nama_foto = $req->get('old_image');
        }

        $this->validate($req,[
            'kd_merk'         => "required",
            'model'      => "required",
            'kd_tipe_pro'          => "required",
            'kd_ktg_proyek'         => "required",
            'kd_jenis_pro'   => "required",
            'kd_int_pro'        => "required",
            'H1'         => "required",
            'H2'         => "required",
            'H3'         => "required",
        ]);
        if($req->get('kd_dt_pro')==""){
        $proyektor = new MProyektor([
            'kd_merk'       => $req->get('kd_merk'),
            'image'         =>$nama_foto,
            'model'         => $req->get('model'),
            'kd_tipe_pro'    => $req->get('kd_tipe_pro'),
            'kd_ktg_proyek'  => $req->get('kd_ktg_proyek'),
            'kd_jenis_pro'   =>$req->get('kd_jenis_pro'),
            'kd_int_pro'    => $req->get('kd_int_pro'),
            'H1'            => $req->get('H1'),
            'H2'            => $req->get('H2'),
            'H3'            => $req->get('H3'),
        ]);

        $proyektor->save();
        $user= auth()->user();
        $log = new Mlog ([
            "description"=>" Create Data proyektor",
            "updated_at"=>date('Y-m-d H:i:s'),
            "user_id"=>$user->id,
            "name"=>$user->name,
            "kode"=>"1"
        ]);
        $log->save();
    }else{
        $proyektor = MProyektor::where('kd_dt_pro', $req->get('kd_dt_pro'));
        $proyektor->update([
          'kd_merk'       => $req->get('kd_merk'),
          'image'         =>$nama_foto,
          'model'         => $req->get('model'),
          'kd_tipe_pro'    => $req->get('kd_tipe_pro'),
          'kd_ktg_proyek'  => $req->get('kd_ktg_proyek'),
          'kd_jenis_pro'   =>$req->get('kd_jenis_pro'),
          'kd_int_pro'    => $req->get('kd_int_pro'),
          'H1'            => $req->get('H1'),
          'H2'            => $req->get('H2'),
          'H3'            => $req->get('H3'),
        ]);
        $user= auth()->user();
        $log = new Mlog ([
            "description"=>"Update Data proyektor",
            "updated_at"=>date('Y-m-d H:i:s'),
            "user_id"=>$user->id,
            "name"=>$user->name,
            "kode"=>"2"
            
        ]);
        $log->save();
    }
        
        if($req->file('image')){
            $foto->move(public_path()."/img", $nama_foto);
        }

        
    return redirect('proyektor');
    }
    
    function delete($id){
      $proyektor = MProyektor::where('kd_dt_pro', $id);
      $proyektor->delete();
      $user= auth()->user();
      $log = new Mlog ([
          "description"=>"Delete Data proyektor",
          "updated_at"=>date('Y-m-d H:i:s'),
          "user_id"=>$user->id,
          "name"=>$user->name,
          "kode"=>"3"
      ]);
      $log->save();
      return redirect('proyektor');
  }

}
