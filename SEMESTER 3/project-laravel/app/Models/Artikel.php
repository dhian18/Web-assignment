<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class Artikel extends Model
{
    use softDeletes;
    
    protected $table = 'artikel';
    protected $fillable =[
        'judul',
        'deskripsi',

    ];
    protected $hidden; 
}
