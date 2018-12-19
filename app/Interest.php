<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    
    protected $primaryKey = 'idinterest';
    protected $table = 'interests';

    public $timestamps = false;
}
