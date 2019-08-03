<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Mram extends Model
{
    //
    protected $table   = "tb_ram_laptop";
    protected $guarded = ['kd_ram_laptop'];
    

    public static function getData($id = null){
        $value=DB::table('tb_ram_laptop')->orderBy('kd_ram_laptop','asc')->get();
        return $value;
    }

    public static function insertData($data){
        $value=DB::table('tb_ram_laptop')->where('kd_ram_laptop',$data['kd_ram_laptop'])->get();
        if($value->count()==0){
            $insertid = DB::table('tb_ram_laptop')->insertGetId($data);
            return $insertid;
        }else{
            return 0;
        }
    }

    public static function updateData($id,$data){
        DB::table('tb_ram_laptop')->where('kd_ram_laptop',$id)->update($data);
    }

    public static function deleteData($id=0){
        DB::table('tb_ram_laptop')->where('kd_ram_laptop',$id)->delete();
    }

}
