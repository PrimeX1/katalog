<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mmerk extends Model
{
    //
    protected $table   = "merk_laptop";
    protected $guarded = ['id_merk'];
    public $timestamps  = false;

}
