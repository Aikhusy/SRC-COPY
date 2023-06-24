<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class pengguna extends Model implements AuthenticatableContract
{
    use HasFactory;
    use Authenticatable;
    protected $table='pengguna';
    protected $fillable=
    [
        'username',
        'email', 
        'password',
        'levels',
    ];
}
