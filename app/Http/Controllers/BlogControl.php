<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mlaptop;
use App\Mmerk;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\MGlobal;
use App\Mprocesor;
use App\Mhdd;
use App\Mram;
use App\Mvga;
use App\Mos;
use App\laptop;
class BlogControl extends Controller
{
    function T_laptop(Request $req){

            $req->session()->forget('compare');

            $laptop= DB::table('detail_laptop')
                ->join('merk_laptop','detail_laptop.id_merk','=','merk_laptop.id_merk')
                ->join('tb_procesor','detail_laptop.kd_procesor','=','tb_procesor.kd_procesor')
                ->join('tb_hdd','detail_laptop.kd_hdd','=','tb_hdd.kd_hdd')
                ->join('tb_ram_laptop','detail_laptop.kd_ram_laptop','=','tb_ram_laptop.kd_ram_laptop')
                ->join('tb_vga','detail_laptop.kd_vga','=','tb_vga.kd_vga')
                ->join('tb_os','detail_laptop.kd_os','=','tb_os.kd_os')
                ->orderBy('detail_laptop.updated_at','desc')
                ->paginate(12);
        
                $H10 = 1;

        // dd($laptop);
        return view('front.blog',compact('laptop','req','H10'));
    }

    public function cari(Request $req){
        $cari= $req->cari;
        $laptop = DB::select("select detail_laptop.kd_detail_laptop ,detail_laptop.image,CONCAT_WS('',merk_laptop.merk,' ',detail_laptop.tipe,' ',detail_laptop.color,' ',tb_procesor.nama_procesor,' ',tb_hdd.storage,' ',tb_ram_laptop.kapasitas,' ',tb_ram_laptop.`type`,' ',
         tb_vga.nama_vga,' ', tb_vga.vram,' ',tb_os.nama_os,' ',detail_laptop.aksesoris,' ',detail_laptop.odd,' ',detail_laptop.layar) as nama_laptop,merk_laptop.merk,detail_laptop.tipe,
        detail_laptop.color,tb_procesor.nama_procesor as Procesor,tb_hdd.`storage`,tb_ram_laptop.kapasitas as Ram,tb_ram_laptop.`type`,
         tb_vga.nama_vga as VGA, tb_vga.vram,tb_os.nama_os,detail_laptop.aksesoris,detail_laptop.odd,detail_laptop.layar,
        detail_laptop.H1,detail_laptop.H2,detail_laptop.H3 FROM detail_laptop
        inner join merk_laptop on detail_laptop.id_merk= merk_laptop.id_merk
        inner join tb_procesor on detail_laptop.kd_procesor= tb_procesor.kd_procesor
        inner join tb_hdd on detail_laptop.kd_hdd= tb_hdd.kd_hdd
        inner join tb_ram_laptop on detail_laptop.kd_ram_laptop= tb_ram_laptop.kd_ram_laptop
        inner join tb_vga on detail_laptop.kd_vga= tb_vga.kd_vga
        inner join tb_os on detail_laptop.kd_os = tb_os.kd_os having nama_laptop like  '%$cari%' " );
            // $laptop= DB::table('detail_laptop')
            // ->join('merk_laptop','detail_laptop.id_merk','=','merk_laptop.id_merk')
            // ->join('tb_procesor','detail_laptop.kd_procesor','=','tb_procesor.kd_procesor')
            // ->join('tb_hdd','detail_laptop.kd_hdd','=','tb_hdd.kd_hdd')
            // ->join('tb_ram_laptop','detail_laptop.kd_ram_laptop','=','tb_ram_laptop.kd_ram_laptop')
            // ->join('tb_vga','detail_laptop.kd_vga','=','tb_vga.kd_vga')
            // ->join('tb_os','detail_laptop.kd_os','=','tb_os.kd_os')
            // ->where('merk','like',"%".$cari."%")
            // ->orWhere('tipe','like',"%".$cari."%")
            // ->orwhere('nama_procesor','like',"%".$cari."%")
            // ->paginate(8);

            $H10 = 0;
            //dd($cari);
        return view('front.blog',['laptop'=>$laptop],compact('req','H10'));
    }

     function detail($id){
        $laptop = DB::select("select detail_laptop.kd_detail_laptop as id,merk_laptop.merk as merk,detail_laptop.image as image, detail_laptop.tipe as tipe,detail_laptop.color as color,detail_laptop.kategori as kategori
        ,detail_laptop.layar as layar,tb_ram_laptop.kapasitas as ram,tb_ram_laptop.`type` as type,tb_vga.nama_vga as VGA,
        tb_vga.vram as vram ,tb_procesor.nama_procesor as Procesor,tb_os.nama_os as OS,tb_hdd.`storage` as storage,detail_laptop.aksesoris as aksesoris,detail_laptop.odd as odd,detail_laptop.H1 as H1,detail_laptop.H2 as H2,detail_laptop.H3 as H3 FROM detail_laptop
        Left join merk_laptop on detail_laptop.id_merk=merk_laptop.id_merk Left join tb_ram_laptop 
        on detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop left join tb_hdd on detail_laptop.kd_hdd=tb_hdd.kd_hdd
        left join tb_procesor on detail_laptop.kd_procesor=tb_procesor.kd_procesor
        left join tb_os on detail_laptop.kd_os= tb_os.kd_os left join tb_vga on detail_laptop.kd_vga= tb_vga.kd_vga where kd_detail_laptop='$id'");
        //dd($laptop);
        return view('front.detail',compact('laptop'));
    }

    function merk(Request $req){
        $ckBox= $req->ckBox;
        $asus = $req->Asus;
        $lenovo= $req->Lenovo;
        $acer= $req->acer;
        $hp= $req->hp;
        $dell = $req->dell;
        $toshiba =$req->Toshiba;
        
        $laptop= DB::table('detail_laptop')
        ->join('merk_laptop','detail_laptop.id_merk','=','merk_laptop.id_merk')
        ->join('tb_procesor','detail_laptop.kd_procesor','=','tb_procesor.kd_procesor')
        ->join('tb_hdd','detail_laptop.kd_hdd','=','tb_hdd.kd_hdd')
        ->join('tb_ram_laptop','detail_laptop.kd_ram_laptop','=','tb_ram_laptop.kd_ram_laptop')
        ->join('tb_vga','detail_laptop.kd_vga','=','tb_vga.kd_vga')
        ->join('tb_os','detail_laptop.kd_os','=','tb_os.kd_os')
        ->orwhere('merk','=',$ckBox)
        ->orwhere('merk','=',$asus)
        ->orwhere('merk','=',$acer)
        ->orwhere('merk','=',$hp)
        ->orwhere('merk','=',$dell)
        ->orwhere('merk','=',$toshiba)
        ->paginate(12);
        
        $H10=1;
       //dd($laptop);
        return view('front.blog',compact('laptop', 'req', 'H10'));
    }
    
    function harga(Request $req){
        $H1= $req->H1;
        $H2= $req->H2;
        $ckBox= $req->ckBox;
        $asus = $req->Asus;
        $lenovo= $req->Lenovo;
        $acer= $req->acer;
        $hp= $req->hp;
        $dell = $req->dell;
        $toshiba =$req->Toshiba;

        if(Auth()->user()){
            if (Auth()->user()->level==2) {

                if ($H1 && $H2) {
                    $laptop= DB::select("SELECT detail_laptop.kd_detail_laptop , detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.updated_at
                    FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
                    where detail_laptop.H2 >= '$H1' and detail_laptop.H2 <= '$H2' order by detail_laptop.updated_at desc ");
                } elseif($H1) {
                    $laptop= DB::select("SELECT detail_laptop.kd_detail_laptop , detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.updated_at
                    FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
                    where detail_laptop.H2 >= '$H1'  order by detail_laptop.updated_at desc ");
                }
                
            }else{
                $laptop= DB::select("SELECT detail_laptop.kd_detail_laptop , detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.updated_at
                FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
                where detail_laptop.H2 >= '$H1'  order by detail_laptop.updated_at desc ");
            }  
        }else{

            if ( $H1 && $H2) {
                
                $laptop= DB::select("SELECT detail_laptop.kd_detail_laptop , detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.updated_at
                FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
                where detail_laptop.H3 >= '$H1' and detail_laptop.H3 <= '$H2'  order by detail_laptop.updated_at desc ");

            } elseif($H1) {
                 $laptop= DB::select("SELECT detail_laptop.kd_detail_laptop , detail_laptop.image , detail_laptop.tipe, detail_laptop.color , detail_laptop.kategori as kategori, merk_laptop.merk, tb_procesor.nama_procesor, tb_hdd.storage ,tb_ram_laptop.kapasitas, tb_vga.nama_vga , tb_os.nama_os, detail_laptop.odd,detail_laptop.layar, detail_laptop.H1,detail_laptop.H2,detail_laptop.H3, detail_laptop.updated_at
                 FROM detail_laptop LEFT JOIN merk_laptop ON detail_laptop.id_merk=merk_laptop.id_merk LEFT JOIN tb_procesor ON detail_laptop.kd_procesor=tb_procesor.kd_procesor LEFT JOIN tb_hdd ON detail_laptop.kd_hdd=tb_hdd.kd_hdd LEFT JOIN tb_ram_laptop ON detail_laptop.kd_ram_laptop=tb_ram_laptop.kd_ram_laptop LEFT JOIN tb_vga ON detail_laptop.kd_vga=tb_vga.kd_vga LEFT JOIN tb_os ON detail_laptop.kd_os=tb_os.kd_os
                 where detail_laptop.H3 >= '$H1'   order by detail_laptop.updated_at desc ");
            }
        }

        $H10 = 2;
    
        return view('front.blog',compact('laptop','req','H10'));
    }

    function asus(Request $req){
        $laptop= DB::table('detail_laptop')
        ->leftjoin('merk_laptop','detail_laptop.id_merk','=','merk_laptop.id_merk')
        ->leftjoin('tb_procesor','detail_laptop.kd_procesor','=','tb_procesor.kd_procesor')
        ->leftjoin('tb_hdd','detail_laptop.kd_hdd','=','tb_hdd.kd_hdd')
        ->leftjoin('tb_ram_laptop','detail_laptop.kd_ram_laptop','=','tb_ram_laptop.kd_ram_laptop')
        ->leftjoin('tb_vga','detail_laptop.kd_vga','=','tb_vga.kd_vga')
        ->leftjoin('tb_os','detail_laptop.kd_os','=','tb_os.kd_os')
        ->where("merk","=","asus")
        ->paginate(8);

        $H10 = 1;
        dd($laptop);
        return view("front.blog",compact("laptop","req","H10"));
    }

    function lenovo(Request $req){
        $laptop= DB::table('detail_laptop')
        ->leftjoin('merk_laptop','detail_laptop.id_merk','=','merk_laptop.id_merk')
        ->leftjoin('tb_procesor','detail_laptop.kd_procesor','=','tb_procesor.kd_procesor')
        ->leftjoin('tb_hdd','detail_laptop.kd_hdd','=','tb_hdd.kd_hdd')
        ->leftjoin('tb_ram_laptop','detail_laptop.kd_ram_laptop','=','tb_ram_laptop.kd_ram_laptop')
        ->leftjoin('tb_vga','detail_laptop.kd_vga','=','tb_vga.kd_vga')
        ->leftjoin('tb_os','detail_laptop.kd_os','=','tb_os.kd_os')
        ->where("merk","=","lenovo")
        ->paginate(8);

        $H10 = 1;

        return view("front.blog",compact("laptop","req","H10"));
    }

    function Acer(Request $req){
        $laptop= DB::table('detail_laptop')
        ->leftjoin('merk_laptop','detail_laptop.id_merk','=','merk_laptop.id_merk')
        ->leftjoin('tb_procesor','detail_laptop.kd_procesor','=','tb_procesor.kd_procesor')
        ->leftjoin('tb_hdd','detail_laptop.kd_hdd','=','tb_hdd.kd_hdd')
        ->leftjoin('tb_ram_laptop','detail_laptop.kd_ram_laptop','=','tb_ram_laptop.kd_ram_laptop')
        ->leftjoin('tb_vga','detail_laptop.kd_vga','=','tb_vga.kd_vga')
        ->leftjoin('tb_os','detail_laptop.kd_os','=','tb_os.kd_os')
        ->where("merk","=","Acer")
        ->paginate(8);
        $H10 = 1;
        return view("front.blog",compact("laptop","req","H10"));
    }

    function toshiba(Request $req){
        $laptop= DB::table('detail_laptop')
        ->leftjoin('merk_laptop','detail_laptop.id_merk','=','merk_laptop.id_merk')
        ->leftjoin('tb_procesor','detail_laptop.kd_procesor','=','tb_procesor.kd_procesor')
        ->leftjoin('tb_hdd','detail_laptop.kd_hdd','=','tb_hdd.kd_hdd')
        ->leftjoin('tb_ram_laptop','detail_laptop.kd_ram_laptop','=','tb_ram_laptop.kd_ram_laptop')
        ->leftjoin('tb_vga','detail_laptop.kd_vga','=','tb_vga.kd_vga')
        ->leftjoin('tb_os','detail_laptop.kd_os','=','tb_os.kd_os')
        ->where("merk","=","toshiba")
        ->paginate(8);
        $H10 = 1;
        return view("front.blog",compact("laptop","req","H10"));
    }

    function hp(Request $req){
        $laptop= DB::table('detail_laptop')
        ->leftjoin('merk_laptop','detail_laptop.id_merk','=','merk_laptop.id_merk')
        ->leftjoin('tb_procesor','detail_laptop.kd_procesor','=','tb_procesor.kd_procesor')
        ->leftjoin('tb_hdd','detail_laptop.kd_hdd','=','tb_hdd.kd_hdd')
        ->leftjoin('tb_ram_laptop','detail_laptop.kd_ram_laptop','=','tb_ram_laptop.kd_ram_laptop')
        ->leftjoin('tb_vga','detail_laptop.kd_vga','=','tb_vga.kd_vga')
        ->leftjoin('tb_os','detail_laptop.kd_os','=','tb_os.kd_os')
        ->where("merk","=","hp")
        ->paginate(8);
        $H10 = 1;
        return view("front.blog",compact("laptop","req","H10"));
    }

    function dell(Request $req){
        $laptop= DB::table('detail_laptop')
        ->leftjoin('merk_laptop','detail_laptop.id_merk','=','merk_laptop.id_merk')
        ->leftjoin('tb_procesor','detail_laptop.kd_procesor','=','tb_procesor.kd_procesor')
        ->leftjoin('tb_hdd','detail_laptop.kd_hdd','=','tb_hdd.kd_hdd')
        ->leftjoin('tb_ram_laptop','detail_laptop.kd_ram_laptop','=','tb_ram_laptop.kd_ram_laptop')
        ->leftjoin('tb_vga','detail_laptop.kd_vga','=','tb_vga.kd_vga')
        ->leftjoin('tb_os','detail_laptop.kd_os','=','tb_os.kd_os')
        ->where("merk","=","dell")
        ->paginate(8);
        $H10 = 1;
        return view("front.blog",compact("laptop","req","H10"));
    }
    
   
}
