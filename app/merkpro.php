<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class merkpro extends Model
{
    protected $table = "merk_proyektor";
    protected $guarded = ['kd_merk'];
}
