<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    protected $table='images';
    use HasFactory;
    protected $fillable=[
        'text','image','type',
    ];
}
