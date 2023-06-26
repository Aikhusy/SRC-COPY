<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    use HasFactory; 
    protected $fillable=
    [
        'id_pengguna',
        'status',
    ];
    protected $table='invoice';
}
