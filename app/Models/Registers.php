<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class Registers extends Model implements AuthenticatableContract
{
    //
    use Authenticatable;

    protected $fillable = ['fname', 'lname', 'mname', 'address', 'gender', 'email', 'password'];

    protected $hidden = [
        'password',
    ];
}
