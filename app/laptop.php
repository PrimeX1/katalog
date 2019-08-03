<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class laptop extends Model
{
    //
    protected $table = "laptop";
    //protected $fillable = ["merk","tipe","kategori","processor","hdd","ram","vga","os","odd","harga"];
    protected $guarded = ['id','kd_detail_laptop'];
    
}
