<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    //
    protected $table = 'log';
    protected $fillable = ['text'];
    public $timestamps = false;
}
