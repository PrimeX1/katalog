<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mprocesor extends Model
{
    //
    protected $table   = "tb_procesor";
    protected $guarded = ['kd_procesor'];
    public $timestamps  = false;

}
