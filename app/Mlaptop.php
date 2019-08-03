<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Models\Activity;

class Mlaptop extends Model
{


    protected $table = "detail_laptop";
   
    protected $guarded = ['kd_detail_laptop'];
}
