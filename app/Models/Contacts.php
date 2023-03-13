<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Eloquent;

class Contacts extends Model
{
    protected $table = 'contacts';
    use HasFactory;
    protected $fillable=[
        'name','email','phone','hotel','state','city','zip','booking','comments',
    ];

}
