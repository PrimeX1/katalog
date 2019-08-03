<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MGlobal extends Model
{  
    public static function Get_Row_Empty($table){
        $columns = DB::select('show columns from ' . $table);
        foreach($columns as $col){
            $column[$col->Field]="";
        }

        return $column;
    }

    //cek data sudah ada atau belum
    public static function get_id_merk($merk){
        $data = DB::table('merk_laptop')->where('merk',$merk)->first();
        if($data!=""){
            $id = $data->id_merk;
        }else{
            $id = 0;
        }

        return $id;
    }
    
    public static function get_kd_procesor($procesor){
        $data = DB::table('tb_procesor')->where('nama_procesor',$procesor)->first();
        if($data!=""){
            $id = $data->kd_procesor;
        }else{
            $id = 0;
        }

        return $id;
    }

    public static function get_kd_hdd($hdd){
        $data = DB::table('tb_hdd')->where('storage',$hdd)->first();
        if($data!=""){
            $id = $data->kd_hdd;
        }else{
            $id = 0;
        }

        return $id;
    }

    public static function get_kd_ram_laptop($ram){
        $data = DB::table('tb_ram_laptop')->where('kapasitas',$ram)->first();
        if($data!=""){
            $id = $data->kd_ram_laptop;
        }else{
            $id = 0;
        }

        return $id;
    }

    public static function get_kd_vga($vga){
        $data = DB::table('tb_vga')->where('nama_vga',$vga)->first();
        if($data!=""){
            $id = $data->kd_vga;
        }else{
            $id = 0;
        }

        return $id;
    }

    public static function get_kd_os($os){
        $data = DB::table('tb_os')->where('nama_os',$os)->first();
        if($data!=""){
            $id = $data->kd_os;
        }else{
            $id = 0;
        }
        return $id;
    }

    //menambahkan data jika return 0
    public static function get_zero_merk($merk){
        $newid = DB::select('SHOW TABLE STATUS LIKE "merk_laptop"');
        $no_id = $newid[0]->Auto_increment;

        DB::table('merk_laptop')->insert([
            'merk'=>$merk,
        ]);
        return $no_id;
    }

    public static function get_zero_procesor($procesor){
        $newid = DB::select('SHOW TABLE STATUS LIKE "tb_procesor"');
        $no_id = $newid[0]->Auto_increment;

        DB::table('tb_procesor')->insert([
            'nama_procesor'=>$procesor
        ]);

        return $no_id;
    }

    public static function get_zero_hdd($hdd){
        $newid = DB::select('SHOW TABLE STATUS LIKE "tb_hdd"');
        $no_id = $newid[0]->Auto_increment;

        DB::table('tb_hdd')->insert([
            'storage'=>$hdd
        ]);

        return $no_id;
    }

    public static function get_zero_ram($ram){
        $newid = DB::select('SHOW TABLE STATUS LIKE "tb_ram_laptop"');
        $no_id = $newid[0]->Auto_increment;

        DB::table('tb_ram_laptop')->insert([
            'kapasitas'=>$ram
        ]);

        return $no_id;
    }

    public static function get_zero_vga($vga){
        $newid = DB::select('SHOW TABLE STATUS LIKE "tb_vga"');
        $no_id = $newid[0]->Auto_increment;

        DB::table('tb_vga')->insert([
            'nama_vga'=>$vga
        ]);

        return $no_id;
    }

    public static function get_zero_os($os){
        $newid = DB::select('SHOW TABLE STATUS LIKE "tb_os"');
        $no_id = $newid[0]->Auto_increment;

        DB::table('tb_os')->insert([
            'nama_os'=>$os
        ]);

        return $no_id;
    }

    public static function get_merk_pro($merk){
        $data = DB::table('merk_proyektor')->where('merk_pro',$merk)->first();
        if($data!=""){
            $id = $data->kd_merk;
        }else{
            $id = 0;
        }

        return $id;
    }
    public static function get_add_merk($merk){
        $newid = DB::select('SHOW TABLE STATUS LIKE "merk_proyektor"');
        $no_id = $newid[0]->Auto_increment;

        DB::table('merk_proyektor')->insert([
            'merk_pro'=>$merk
        ]);

        return $no_id;
    }

    public static function get_tipe_pro($tipe){
        $data = DB::table('tipe_proyektor')->where('tipe_pro',$tipe)->first();
        if($data!=""){
            $id = $data->kd_tipe_pro;
        }else{
            $id = 0;
        }

        return $id;
    }
    public static function get_add_tipe($tipe){
        $newid = DB::select('SHOW TABLE STATUS LIKE "tipe_proyektor"');
        $no_id = $newid[0]->Auto_increment;

        DB::table('tipe_proyektor')->insert([
            'tipe_pro'=>$tipe
        ]);

        return $no_id;
    }

    public static function get_kd_ktg_proyektor($ktg){
        $data = DB::table('ktg_proyektor')->where('ktg_proyektor',$ktg)->first();
        if($data!=""){
            $id = $data->kd_ktg_proyek;
        }else{
            $id = 0;
        }

        return $id;
    }
    public static function get_add_ktg($ktg){
        $newid = DB::select('SHOW TABLE STATUS LIKE "ktg_proyektor"');
        $no_id = $newid[0]->Auto_increment;

        DB::table('ktg_proyektor')->insert([
            'ktg_proyektor'=>$ktg
        ]);

        return $no_id;
    }

    public static function get_kd_jenis_pro($jenis){
        $data = DB::table('tb_jenis_proyektor')->where('jenis_pro',$jenis)->first();
        if($data!=""){
            $id = $data->kd_jenis_pro;
        }else{
            $id = 0;
        }

        return $id;
    }
    public static function get_add_jenis($jenis){
        $newid = DB::select('SHOW TABLE STATUS LIKE "tb_jenis_proyektor"');
        $no_id = $newid[0]->Auto_increment;

        DB::table('tb_jenis_proyektor')->insert([
            'jenis_pro'=>$jenis
        ]);

        return $no_id;
    }

    public static function get_kd_int_pro($int){
        $data = DB::table('int_pro')->where('nama_int',$int)->first();
        if($data!=""){
            $id = $data->kd_int_pro;
        }else{
            $id = 0;
        }

        return $id;
    }
    public static function get_add_int($int){
        $newid = DB::select('SHOW TABLE STATUS LIKE "int_pro"');
        $no_id = $newid[0]->Auto_increment;

        DB::table('int_pro')->insert([
            'nama_int'=>$int
        ]);

        return $no_id;
    }


}
