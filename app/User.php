<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

//--------------custom------------
// use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class User extends Model implements Authenticatable
{
    //
    use AuthenticableTrait;
    public $timestamps = false;
}
