<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mhdd extends Model
{
    //
    protected $table   = "tb_hdd";
    protected $guarded = ['kd_hdd'];
    public $timestamps  = false;

}
