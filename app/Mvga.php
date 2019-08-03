<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mvga extends Model
{
    //
    protected $table   = "tb_vga";
    protected $guarded = ['kd_vga'];
    public $timestamps  = false;

}
