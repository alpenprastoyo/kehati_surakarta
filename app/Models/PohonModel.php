<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PohonModel extends Model
{
    protected $table = 'kehati_pohon';

    protected $fillable = [
        'id',
        'nama_jenis',
        'spesies',
        'iucn',
        'image'
    ];


    use HasFactory;
}
