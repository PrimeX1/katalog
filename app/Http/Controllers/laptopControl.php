<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mlaptop;
use App\MGlobal;
use App\Mmerk;
use App\Mprocesor;
use App\Mhdd;
use App\Mram;
use App\Mvga;
use App\Mos;
use App\laptop;
use App\Mlog;
class laptopControl extends Controller
{
    function index(Request $req){
        $harga1 = $req->H1;
        $harga2 = $req->H2;
        $harga3 = $req->H3;
        $harga4 = $req->H4;
        $harga5 = $req->H5;
        $harga6 = $req->H6;

            if($_REQUEST){
                if($harga1 && $harga2 ){
                    $laptop = DB::select("SELECT detail_laptop.kd_detail_laptop as id, detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.updated_at
                    FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
                    where H1 BETWEEN $harga1 AND $harga2
                    order by updated_at desc");
                }elseif($harga1){
                    $laptop = DB::select("SELECT detail_laptop.kd_detail_laptop as id, detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.updated_at
                    FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
                    where H1>='$harga1'
                    order by updated_at desc");
                }elseif($harga3 && $harga4){
                    $laptop = DB::select("SELECT detail_laptop.kd_detail_laptop as id, detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.updated_at
                    FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
                    where H2>='$harga3' and H2<='$harga4'
                    order by updated_at desc");
                }elseif($harga3){
                    $laptop = DB::select("SELECT detail_laptop.kd_detail_laptop as id, detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.updated_at
                    FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
                    where H2>='$harga3' 
                    order by updated_at desc");
                }elseif($harga5 && $harga6){
                    $laptop = DB::select("SELECT detail_laptop.kd_detail_laptop as id, detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.updated_at
                    FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
                    where H3>='$harga5' AND H3<='$harga6'
                    order by updated_at desc");
                }if($harga5){
                    $laptop = DB::select("SELECT detail_laptop.kd_detail_laptop as id, detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.updated_at
                    FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
                    where H3>='$harga5' 
                    order by updated_at desc");
                }
            }else{
            $laptop = DB::select('SELECT detail_laptop.kd_detail_laptop as id, detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.updated_at
            FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
            order by updated_at desc');
            // $laptop = DB::select('SELECT detail_laptop.kd_detail_laptop as id, detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.excel, detail_laptop.updated_at
            // FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
            // UNION
            // select laptop.id, laptop.image , tipe, laptop.color ,kategori,id_merk,kd_procesor,kd_hdd,kd_ram_laptop,kd_vga,kd_os,odd,layar,H1,H2,H3,excel,updated_at from laptop
            // order by updated_at desc');
            }
          
            $log = DB::select('select * from log order by updated_at desc limit 5');
            return view('data.data_laptop' , compact('laptop','log'));
    }

    function add(){
        $laptop = MGlobal::Get_Row_Empty('detail_laptop');
        $merk   = Mmerk::all();
        $procesor = Mprocesor::all();
        $hdd    = Mhdd::all();
        $ram    = Mram::all();
        $vga    = Mvga::all();
        $os     = Mos::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_detail_laptop', compact('laptop', 'merk', 'procesor' , 'hdd', 'ram', 'vga', 'os','log')); 
    }

    function edit($id){
        $laptop = Mlaptop::where('kd_detail_laptop',$id)->first();
        $merk   = Mmerk::all();
        $procesor = Mprocesor::all();
        $hdd    = Mhdd::all();
        $ram    = Mram::all();
        $vga    = Mvga::all();
        $os     = Mos::all();
        $log = DB::select('select * from log order by updated_at desc limit 5');
        return view('form.frm_detail_laptop', ['laptop'=>$laptop,'tipe'=>$laptop, 'merk'=>$merk, 'procesor'=>$procesor, 'hdd'=>$hdd, 'ram'=>$ram, 'vga'=>$vga, 'os'=>$os, 'log'=>$log ]);
    }

    function save(Request $req){
        
        if($req->file('image')){
            $foto = $req->file('image');
            $nama_foto = date('m-Y-').$foto->getClientOriginalName();
        } else {
            $nama_foto = $req->get('old_image');
        }

        $this->validate($req,[
            'layar'         => "required",
            'kategori'      => "required",
            'tipe'          => "required",
            'color'         => "required",
            'kd_procesor'   => "required",
            'kd_hdd'        => "required",
            'kd_ram_laptop' => "required",
            'kd_vga'        => "required",
            'kd_os'         => "required",
            'odd'           => "required",
            'aksesoris'     => "required",
            'H1'         => "required|numeric",
            'H2'         => "required|numeric",
            'H3'         => "required|numeric",
        ]);
        if($req->get('id')==""){
        $laptop = new Mlaptop([
            'id_merk'       => $req->get('id_merk'),
            'image'         =>$nama_foto,
            'layar'         => $req->get('layar'),
            'kategori'      => $req->get('kategori'),
            'tipe'          => $req->get('tipe'),
            'color'         =>$req->get('color'),
            'kd_procesor'   => $req->get('kd_procesor'),
            'kd_hdd'        => $req->get('kd_hdd'),
            'kd_ram_laptop' => $req->get('kd_ram_laptop'),
            'kd_vga'        => $req->get('kd_vga'),
            'kd_os'         => $req->get('kd_os'),
            'odd'         => $req->get('odd'),
            'aksesoris'         => $req->get('aksesoris'),
            'H1'         => $req->get('H1'),
            'H2'         => $req->get('H2'),
            'H3'         => $req->get('H3'),
            
        ]);

        $laptop->save();
        $user= auth()->user();
        $log = new Mlog ([
            "description"=>" Create Data Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
            "user_id"=>$user->id,
            "name"=>$user->name,
            "kode"=>1
            
        ]);
        $log->save();
    }else{
        $laptop = Mlaptop::where('kd_detail_laptop', $req->get('id'));
        $laptop->update([
            'id_merk'       => $req->get('id_merk'),
            'image'         =>$nama_foto,
            'layar'         => $req->get('layar'),
            'kategori'      => $req->get('kategori'),
            'tipe'          => $req->get('tipe'),
            'color'         =>$req->get('color'),
            'kd_procesor'   => $req->get('kd_procesor'),
            'kd_hdd'        => $req->get('kd_hdd'),
            'kd_ram_laptop' => $req->get('kd_ram_laptop'),
            'kd_vga'        => $req->get('kd_vga'),
            'kd_os'         => $req->get('kd_os'),
            'odd'         => $req->get('odd'),
            'aksesoris'         => $req->get('aksesoris'),
            'H1'         => $req->get('H1'),
            'H2'         => $req->get('H2'),
            'H3'         => $req->get('H3')
        ]);
        $user= auth()->user();
        $log = new Mlog ([
            "description"=>"Update Data Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
            "user_id"=>$user->id,
            "name"=>$user->name,
            "kode"=>2
            
        ]);
        $log->save();
    }
        
        if($req->file('image')){
            $foto->move(public_path()."/img", $nama_foto);
        }

        
    return redirect('laptop');
    }

    function delete($id){
        $laptop = Mlaptop::where('kd_detail_laptop', $id);
        $laptop->delete();
        $user= auth()->user();
        $log = new Mlog ([
            "description"=>"Delete Data Laptop",
            "updated_at"=>date('Y-m-d H:i:s'),
            "user_id"=>$user->id,
            "name"=>$user->name,
            "kode"=>3
        ]);
        $log->save();
        return redirect('laptop');
    }
    
}
