<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use Illuminate\Support\Facades\DB;

class compareControl extends Controller
{
    //

    public function index(Request $req){
        if($req->session()->has('compare')){
            $compare = $req->session()->get('compare');
            //dd($compare);
            return view('front.compare',compact('compare'));
        }else{
            echo "tidak tampil";
        }
    }

   

    public function add(Request $req){
        foreach($req->get("kd_lp") as $kd){
       $laptop = DB::select("select detail_laptop.kd_detail_laptop as id,merk_laptop.merk,detail_laptop.image, detail_laptop.tipe,
       detail_laptop.color,detail_laptop.kategori as kategori,detail_laptop.layar,tb_ram_laptop.kapasitas,
        tb_ram_laptop.`type`,tb_vga.nama_vga as VGA,tb_vga.vram,tb_procesor.nama_procesor as procesor,tb_os.nama_os as OS,tb_hdd.`storage`,
       detail_laptop.aksesoris,detail_laptop.odd,detail_laptop.H1,detail_laptop.H2,detail_laptop.H3 FROM detail_laptop
        Left join merk_laptop on detail_laptop.id_merk=merk_laptop.id_merk Left join tb_ram_laptop 
        on detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop left join tb_hdd on detail_laptop.kd_hdd=tb_hdd.kd_hdd
        left join tb_procesor on detail_laptop.kd_procesor=tb_procesor.kd_procesor
         left join tb_os on detail_laptop.kd_os= tb_os.kd_os left join tb_vga on detail_laptop.kd_vga= tb_vga.kd_vga
         where detail_laptop.kd_detail_laptop ='$kd' ");

       $req->session()->push('compare',$laptop[0]);
        }
      //$compare = $req->session()->pull('compare');
        //print_r($compare);
    // foreach($compare as $c){
    //    echo $c;
    //  }
    // dd($laptop);
        return redirect('compare');

    }

    public function delete(Request $request) {
		$request->session()->forget('compare');
        // echo "Data telah dihapus dari session.";
        
       return redirect('/product');
	}
}
