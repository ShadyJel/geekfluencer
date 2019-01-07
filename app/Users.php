<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $primaryKey = 'iduser';
    protected $table = 'users';

    public $timestamps = false;
}
