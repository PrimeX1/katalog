<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MLog extends Model
{
    protected $table = "log";
    protected $fillable = ['description','created_at','updated_at','deleted_at','user_id','name'];
    function setLog($mess){
        // ID_Log,Time ( DATE TIME) , user_id, desc 
    }
}
