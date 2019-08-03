<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mos extends Model
{
    //
    protected $table   = "tb_os";
    protected $guarded = ['kd_os'];
    public $timestamps = false;
}
